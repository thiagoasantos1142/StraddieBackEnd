// import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs';
import '/resources/js/bootstrap.js'
import '~bootstrap/js/bootstrap.min.js';
import jQuery from 'jquery';
import Swiper from 'swiper/bundle'
import '@floating-ui/dom';
import {
  computePosition,
  flip,
  shift,
  offset,
  arrow
} from '@floating-ui/dom';

window.jQuery = window.$ = jQuery;
window.Swiper = Swiper;


const swiper = new Swiper('#swiper-one', {
    direction: 'horizontal',
    slidesPerView: 1.6,
    on: {
        resize: function () {
            setTimeout(() => {
                ajustSlidHeigth();
            }, 20);
        }
    },
    // modules: [Navigation, Pagination],
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    }
});

$(document).ready(function () {
    addDragrable("questions");

    //toda a vez que redimensionar o layout
    $(window).resize(function () {
        //ajustar padding container dos slids
        applayMarginAndPadding();

        //ajusta a altura dos slids
        ajustSlidHeigth()
    });
    applayMarginAndPadding();


    //save form
});

function addDragrable(elementId) {
    $(`#${elementId} [data-opendragable]`).on("click", function () {
        if ($(this).next('.content').is(':visible')) {
            $(this).next('.content').slideToggle();
            //icon
            const icon = $(this).find('i');
            icon.removeClass('rotate');
            return;
        }
        //todos os elementos deven resetar
        $('[data-opendragable]').find('i').removeClass('rotate');
        $(`#${elementId} .content`).slideUp();
        $(this).next('.content').slideToggle();
        $(this).find('i').addClass('rotate');
    });
}

function applayMarginAndPadding() {
    const containerFluid = $('#base-padding').children();
    const container = containerFluid.children();

    const me_containerFluid = parseInt(containerFluid.css('margin-left'));
    const pe_containerFluid = parseInt(containerFluid.css('padding-left'));

    const me_container = parseInt(container.css('margin-left'));
    const pe_container = parseInt(container.css('padding-left'));

    const totalPadding = me_containerFluid + me_container + pe_containerFluid + pe_container;

    $('[data-swippermargin]').css('margin-left', `${totalPadding}px`);
}

function ajustSlidHeigth() {
    const cards = $('#swiper-one .content');
    const maiorAltura = calculateDiv(cards);
    console.log(maiorAltura);
    cards.height(maiorAltura);

}

function calculateDiv(elements) {
    const alturas = [];

    // Itera sobre cada div selecionada e armazena suas alturas em um array
    elements.each(function () {
        const alturaAtual = $(this).height(); // Obtém a altura da div atual
        alturas.push(alturaAtual); // Adiciona a altura ao array de alturas
    });

    // Encontra o maior valor dentro do array de alturas usando o método Math.max
    const maiorAltura = Math.max.apply(null, alturas);

    return maiorAltura;
}

// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            saveForm(form);
            event.preventDefault()
            if (!form.checkValidity()) {
                event.stopPropagation()
                form.classList.add('was-validated')
            } else {
                saveForm();
            }
        }, false)
    })
})()


async function saveForm(form) {
    const btnSubmit = $(form).find('button[type="submit"]');
    btnSubmit.prop('disabled', true);
    btnSubmit.children().fadeIn();

    const formData = $('#form-register').serialize();
    await axios.post('/', formData).then(function (response) {
        console.log(response.data);
    }).catch(function (error) {
        console.error(error);
    }).finally(function () {
        btnSubmit.prop('disabled', false);
        btnSubmit.children().fadeOut();
    });
}


// teste de toutlip
// const { computePosition, flip, shift, offset, arrow } = Floating;

const elementsToutlip = document.querySelectorAll('[data-toutlip]');
elementsToutlip.forEach(e => {
    [
        ['mouseenter', showTooltip],
        ['mouseleave', hideTooltip],
        ['focus', showTooltip],
        ['blur', hideTooltip],
    ].forEach(([event, listener]) => {
        e.addEventListener(event, listener);
    });
}
);


function updateToutlip(element, tooltipElement) {
    const tooltip = tooltipElement;
    const arrowElement = tooltipElement.querySelector('.arrow');


    computePosition(element, tooltip, {
        placement: 'top',
        middleware:
            [
                offset(20),
                flip(),
                shift({ padding: 10 }),
                arrow({ element: arrowElement }),
            ]
    }).then(({ x, y, placement, middlewareData }) => {
        Object.assign(tooltip.style, {
            left: `${x}px`,
            top: `${y}px`,
        });
        // Accessing the data
        const { x: arrowX, y: arrowY } = middlewareData.arrow;
        const staticSide = {
            top: 'bottom',
            right: 'left',
            bottom: 'top',
            left: 'right',
        }[placement.split('-')[0]];

        Object.assign(arrowElement.style, {
            left: arrowX != null ? `${arrowX}px` : '',
            top: arrowY != null ? `${arrowY}px` : '',
            right: '',
            bottom: '',
            [staticSide]: '-4px',
        });
    });
}


function showTooltip() {
    const toutlip = checkExistToutLip(this);
    if(toutlip){
        $(toutlip).fadeIn(300);
        updateToutlip(this, toutlip);
    }
}

function hideTooltip() {
    $(this.nextElementSibling).fadeOut(300);
}

function checkExistToutLip(element) {
    const tooltipElement = $(element).next('.tooltip-custom')[0];
    if (tooltipElement && tooltipElement.classList.contains('tooltip-custom')) {
        return tooltipElement;
    }
    return null;
}


