import { getAllUsers, saveUser } from "./requestsaxios";
let arraySteps = [];
let currentStep = '';
$(function () {

    const config = {
        modal: '[data-modal="addUserInCreditRigthTitle"]',
        inputAddSelects: '#user_select',
        setInputs: '[name="user_select"]',
        stepsInModal: true
    }
    init(config);
});

async function init(config) {
    $('[name="user"]').on('focus', function () {
        $(config.modal).modal('show');
    });

    if (config?.stepsInModal) {
        initSteps();
        btnNextStep();
        btnBack();
        btnContinue();
    }

    const { data } = await getAllUsers();
    $(config.inputAddSelects).html(createSelects(data));
    $(config.inputAddSelects).on('change', function () {
        const inputUser = $('#user');
        const inputUserId = $('#user_id');
        inputUser.val($(this).find('option:selected').text());
        inputUserId.val($(this).val());
    });

    $('.add-user-in-credit-rigth-title').select2({
        dropdownParent: $(config.modal),
        templateResult: formatState,
        // matcher: customMatcher
    });
}

function initSteps() {
    const steps = $('[data-step]');
    setStep($(steps[0]).data('step'));
    mapSteps();
}

function btnNextStep() {
    $('[data-nextstep]').on('click', function () {
        const nextStep = $(this).data('nextstep');
        if (nextStep) {
            setStep(nextStep);
        } else {
            const indexStep = arraySteps.indexOf(currentStep);
            if (!arraySteps[indexStep + 1]) {
                return;
            }
            setStep(arraySteps[indexStep + 1]);
        }
    });
}

function btnBack() {
    $('[data-btnback]').on('click', function () {
        const nextStep = $(this).data('btnback');
        if (nextStep) {
            setStep(nextStep);
        } else {
            const indexStep = arraySteps.indexOf(currentStep);
            if (!arraySteps[indexStep - 1]) {
                return;
            }
            setStep(arraySteps[indexStep - 1]);
        }
    });
}

function setStep(nameStep) {
    $('[data-step]').hide();
    $(`[data-step=${nameStep}]`).show('slow');
    currentStep = nameStep;

    const indexStep = arraySteps.indexOf(nameStep);
    console.log(indexStep);
    if (indexStep != 0 && indexStep != -1) {
        $(`[data-btnback]`).show();
    } else {
        $(`[data-btnback]`).hide();
    }
}

function formatState(state) {
    const getData = $(state.element).data();
    return $(`
        <div class="d-flex align-items-center">
         <span class="avatar avatar-sm avatar-radius me-2">
                 <img src="https://w7.pngwing.com/pngs/129/292/png-transparent-female-avatar-girl-face-woman-user-flat-classy-users-icon.png" class="avatar-radius" alt="product">
             </span>
             ${state.text} ${getData?.email ? '/' + getData?.email : ''} ${getData?.cpf ? '/' + getData?.cpf : ''}
         </div>
     `)
}


function createSelects(data) {
    const optionNull = ['<option value="">Selecione um usuário</option>']
    const newArraySelect = data.map(({ id, email, name, cpf }) => {
        return `<option value="${id}" data-email="${email}" data-cpf="${cpf}">${name}</option>`
    });
    return optionNull + newArraySelect.join('');
}

//salvar um historico
function mapSteps() {
    arraySteps = $('[data-step]').map(function () {
        return $(this).data('step');
    }).get();
}

function btnContinue() {
    $('[data-continue]').on('click', function () {
        handlerInStep(currentStep);
    });
}

////////////////////////////////////
async function handlerInStep() {
    switch (currentStep) {
        case 'add-user':
            await internalSaveUser();
            break;

        default:
            $('[data-modal="addUserInCreditRigthTitle"]').modal('hide');
            break;
    }
}


async function internalSaveUser() {
    const data = $('[id="add-new-user"]').serialize();
    await saveUser(data, () => { window.location.reload() });
}

