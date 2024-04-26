// const stepMenuOne = document.querySelector('.formbold-step-menu1')
// const stepMenuTwo = document.querySelector('.formbold-step-menu2')
// const stepMenuThree = document.querySelector('.formbold-step-menu3')

// const stepOne = document.querySelector('.formbold-form-step-1')
// const stepTwo = document.querySelector('.formbold-form-step-2')
// const stepThree = document.querySelector('.formbold-form-step-3')
import { saveDocument } from "../components/requestsaxios";

//pegar os steps
const steps = $('[data-step]');
const headersteps = $('[data-stepheader]');
const totalSteps = steps.length;

const stopIn = $('[name="stopIn"]')?.val();

let currentStep = stopIn || 1;

const formSubmitBtn = $('.formbold-btn')
const formBackBtn = $('.formbold-back-btn')


function initConfigElement() {
    $(`[data-step="${currentStep}"]`).css('display', 'block');
    const divTotalSteps = $('[data-totalsteps]');
    setHeaderValues(divTotalSteps, totalSteps, 'Total');
    setHeaderSteps();
    verifyBtnBackAndNext();
    setFuncInInputs();
}

function setFuncInInputs() {
    $('[name="file"]').on('input', async function () {

        if (verifyExistFormDocument(currentStep)) {
            try {
                const formData = new FormData();
                formData.append("file", $(`[data-step="${currentStep}"]`).find('[name="form"]').find('input[type="file"]').prop('files')[0]);
                const formArray = $(`[data-step="${currentStep}"]`).find('[name="form"]').serializeArray();
                $.each(formArray, function (i, field) {
                    formData.append(field.name, field.value);
                });
                await saveDocument(formData, (data) => {
                    createDocument(data);
                });
            } catch (error) {
                openAlert('alert', 'Erro ao salvar documento.');
                return;
            }
        }
    })
}

initConfigElement();

formSubmitBtn.on("click", function (event) {
    event.preventDefault()
    nextStep(() => { verifyBtnBackAndNext(), setHeaderSteps() });

    // if (stepMenuOne.className == 'formbold-step-menu1 active') {
    //     event.preventDefault()

    //     stepMenuOne.classList.remove('active')
    //     stepMenuTwo.classList.add('active')

    //     stepOne.classList.remove('active')
    //     stepTwo.classList.add('active')

    //     formBackBtn.classList.add('active')
    //     formBackBtn.addEventListener("click", function (event) {
    //         event.preventDefault()

    //         stepMenuOne.classList.add('active')
    //         stepMenuTwo.classList.remove('active')

    //         stepOne.classList.add('active')
    //         stepTwo.classList.remove('active')

    //         formBackBtn.classList.remove('active')

    //     })

    // } else if (stepMenuTwo.className == 'formbold-step-menu2 active') {
    //     event.preventDefault()

    //     stepMenuTwo.classList.remove('active')
    //     stepMenuThree.classList.add('active')

    //     stepTwo.classList.remove('active')
    //     stepThree.classList.add('active')

    //     formBackBtn.classList.remove('active')
    //     formSubmitBtn.textContent = 'Submit'
    // } else if (stepMenuThree.className == 'formbold-step-menu3 active') {
    //     document.querySelector('form').submit()
    // }
})

formBackBtn.on("click", function (event) {
    event.preventDefault()
    backStep(() => { verifyBtnBackAndNext(), setHeaderSteps() });
})


async function nextStep(func) {
    if (currentStep == totalSteps) {
        //executar o submit ou no caso outra coisa
        return;
    }

    if (!verifyExistFormDocument(currentStep)) {
        //save document;
        openAlert('alert', 'Documento obrigatorio.');
        return;
    }

    currentStep++;
    hideSteps();
    showStep($(`[data-step="${currentStep}"]`));

    if (func && typeof func === 'function') {
        func();
    }
}

function backStep(func) {
    if (currentStep == 1) {
        //executar o submit ou no caso outra coisa
        return;
    }
    currentStep--;
    hideSteps();
    showStep($(`[data-step="${currentStep}"]`));

    if (func && typeof func === 'function') {
        func();
    }
}

function hideSteps() {
    steps.hide();
}

function showStep(elemento) {
    elemento.fadeIn('slow');
}


function verifyBtnBackAndNext() {
    if (currentStep == 1) {
        formBackBtn.hide();
        return;
    } else {
        formBackBtn.show('slow');
    }
}

function setHeaderSteps() {
    headersteps.hide();
    $(`[data-stepheader="${currentStep}"]`).show('slow');
}

function verifyExistFormDocument(currentStep) {
    const form = $(`[data-step="${currentStep}"]`).find('[name="form"]');
    const inputFile = form.find('input[type="file"]');

    if (inputFile.prop('files').length > 0) {
        return true;
    }
    return false;
}

// const MultipleElement1 = document.querySelector('.product-Images');

// var filePondInstance = FilePond.create(MultipleElement1, {
//     allowMultiple: false,
//     allowReplace: true,
//     maxFiles: 1,
//     instantUpload: true,
// });

// filePondInstance.on('onaddfile', function (error, file) {
//     // Obtém o arquivo carregado
//     console.log(file);
// });


function setHeaderValues(element, value, text) {

    const internalDiv = `<span>${value}</span>${text}`;
    element.html(internalDiv);
    // console.log(element);
}



function openAlert(type, message) {
    "use strict";
    var options = {
        durations: {
            alert: 2000
        }
    }
    var notifier = new AWN(options);
    if (!(type, message)) {
        return;
    }
    notifier[type](message)
}


function createDocument(data) {

    const component = `
    <div class="col-12" data-file>
        <div class="card file-manager">
            <a href="{{ route('download.file', ['id' => $file->id]) }}" target="_blank"
                class="stretched-link"></a>
            <div class="card-body">
                <div class="file-dropdown file-icon">
                    <a href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><i
                            class="mdi mdi-dots-vertical fs-10"></i></a>
                    <div class="dropdown-menu dropdown-menu-start">
                        <a class="dropdown-item" href="javascript:void(0);"><i
                                class="fe fe-edit me-2"></i> Visualizar</a>
                        <a class="dropdown-item" href="javascript:void(0);"><i
                                class="fe fe-download me-2"></i> Baixar</a>
                        <form action="{{ route('files.destroy', ['file' => $file->id]) }}"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="dropdown-item">
                                <i class="fe fe-trash me-2"></i> Excluir
                            </button>
                        </form>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <svg xmlns="http://www.w3.org/2000/svg" height="55px" width="55px"
                        enable-background="new 0 0 100 100" viewBox="0 0 100 100" id="pdf">
                        <path fill="#00a5a2" d="M55,52c0.3,0.3,0.5,0.7,0.5,1.2c0,0.6-0.2,1-0.5,1.3c-0.4,0.3-0.9,0.4-1.6,0.4h-0.8v-3.3h1.1
                                            C54.3,51.6,54.7,51.8,55,52z"></path>
                        <path fill="#00a5a2" d="M75.6,73.6H72c-0.6,0-1,0.5-1,1l0,7.3c0,2.7-2.2,5-4.9,5l-44.9,0.3c-2.4,0-4.4-1.6-4.9-3.9
                                                c-0.1-0.3-0.1-0.7-0.1-1.1L16,35.9c0-0.3,0.3-0.6,0.6-0.6l18.8-0.1c3.3,0,5.9-2.7,5.9-5.9l-0.1-15.7c0-0.3,0.3-0.6,0.6-0.6
                                                l23.8-0.2c2.7,0,5,2.2,5,4.9l0.1,18.5c0,0.6,0.5,1,1,1h3.6c0.6,0,1-0.5,1-1l-0.1-21.4c0-4.3-3.5-7.8-7.9-7.8L39.1,7.3
                                                c-0.8,0-1.7,0.3-2.3,0.9L11.4,31.5c-0.7,0.7-1.1,1.6-1.1,2.5l0.2,51c0,4.3,3.5,7.8,7.9,7.8l50.6-0.1c4.3-0.2,7.8-3.7,7.8-8l0-10.1
                                                C76.6,74.1,76.2,73.6,75.6,73.6z"></path>
                        <path fill="#00a5a2"
                            d="M63.6,51.6h-1.3v7.3h1c2.3,0,3.4-1.2,3.4-3.7C66.8,52.8,65.7,51.6,63.6,51.6z M63.6,51.6
                                                h-1.3v7.3h1c2.3,0,3.4-1.2,3.4-3.7C66.8,52.8,65.7,51.6,63.6,51.6z M86.7,41.9H42c-1.7,0-3,1.4-3,3v20.8c0,1.7,1.4,3,3,3h44.7
                                                c1.7,0,3-1.4,3-3V44.9C89.7,43.2,88.4,41.9,86.7,41.9z M56.8,55.9c-0.8,0.6-1.8,1-3.2,1h-1v4h-2.4V49.7h3.6c1.4,0,2.4,0.3,3.1,0.9
                                                c0.7,0.6,1.1,1.5,1.1,2.6C57.9,54.4,57.5,55.3,56.8,55.9z M67.7,59.4c-1,1-2.6,1.5-4.5,1.5H60V49.7h3.5c1.8,0,3.2,0.5,4.2,1.4
                                                c1,1,1.5,2.3,1.5,4C69.2,57,68.7,58.4,67.7,59.4z M78,51.6h-4.1v2.9h3.8v1.9h-3.8v4.4h-2.3V49.7H78V51.6z M63.6,51.6h-1.3v7.3h1
                                                c2.3,0,3.4-1.2,3.4-3.7C66.8,52.8,65.7,51.6,63.6,51.6z">
                        </path>
                    </svg>
                </div>
                <p class="text-center mt-3">${data.filename}</p>
            </div>
        </div>
    </div>
    `;

    $(`[data-step="${currentStep}"]`).find('[data-showdocument]').html(component);
}
