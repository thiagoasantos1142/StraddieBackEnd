const btnSaveAddress = document.querySelector('[data-saveaddress]');
const inputCep = document.querySelector('input.zip');

//campos do form
const inputZip = document.querySelector('#zip');
const inputStreet = document.querySelector('#street');
const inputNeighborhood = document.querySelector('#neighborhood');
const inputCity = document.querySelector('#city_id');
const streetNumber = document.querySelector('#street_number');
const complement = document.querySelector('#complement');
let typeAction = null;
let idUpdateAddress = null;


let lastSearchCeps = {};

async function getAddress(address) {
    try {
        const response = await axios.get(`https://viacep.com.br/ws/${address}/json`);
        lastSearchCeps = {
            ...lastSearchCeps,
            [`${response.data.cep.replace(/-/g, '')}`]: response.data
        }
    } catch (error) {
        console.error('Erro:', error);
    } finally {
        console.log('A requisição foi concluída.');
    }
}

//verifica se o cep já foi pesquisado para não realizar uma nova requisição
function verifyCepIsSearch(cep) {
    if (cep in lastSearchCeps) {
        return true;
    }
    return false;
}

[
    ['change', getAddress],
    ['focus', getAddress],
    ['blur', getAddress],
].forEach(([event, listener]) => {
    inputCep.addEventListener(event, async function () {
        const currentCep = inputCep.value.trim().replace(/-/g, '');
        if (currentCep.length === 8 && !verifyCepIsSearch(currentCep)) { // Verifica se o CEP tem 8 dígitos e se é diferente do último pesquisado
            await listener(currentCep);
        }
        setValues(currentCep);
    });
});


function setValues(cep) {
    if (!lastSearchCeps[cep]) {
        return;
    }
    const objectAddress = lastSearchCeps[cep];

    inputStreet.value = objectAddress?.logradouro || '';
    inputNeighborhood.value = objectAddress?.bairro || '';
    inputCity.value = objectAddress?.localidade || '';
}


function openAlert(type, message) {
    // documentação
    // https://f3oall.github.io/awesome-notifications/docs/toasts
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
    /* Basic notifications */
    notifier[type](message)
    // document.querySelector('#basic').addEventListener('click', function () {
    // })
}

btnSaveAddress.onclick = async () => {
    //pegar antes o tipo de ação que deve ser axecutada
    if (typeAction == 'update') {
        updateCep(idUpdateAddress);
        return;
    }
    await saveCep()
}

async function saveCep() {
    // pegar as info do form agora
    const form = document.querySelector("#form-address");
    const dataForm = new FormData(form);


    await axios.post('/dashboard/address', dataForm)
        .then(function (response) {
            $('#address').modal('hide');
            newLineAddress(response.data, '[data-addresses]');
            openAlert('success', 'endereço salvo com sucesso.');
        })
        .catch(function (error) {
            openAlert('alert', 'Erro ao salvar endereço.');
            console.error('Erro ao enviar formulário:', error);
        });

    console.log(dataForm);
}

async function updateCep(idAddress) {
    // pegar as info do form agora
    const form = document.querySelector("#form-address");
    const dataForm = new FormData(form);
    dataForm.append('_method', 'put');


    await axios.post(`/dashboard/address/${idAddress}`, dataForm)
        .then(function (response) {
            $('#address').modal('hide');
            updateLineAddress(response.data, '[data-addresses]');
            openAlert('success', 'endereço salvo com sucesso.');
        })
        .catch(function (error) {
            openAlert('alert', 'Erro ao salvar endereço.');
            console.error('Erro ao enviar formulário:', error);
        });
}

async function deleteCep(idAddress) {
    // pegar as info do form agora
    await axios.delete(`/dashboard/address/${idAddress}`)
        .then(function (response) {
            removeLineAddress(idAddress, '[data-addresses]');
            openAlert('success', 'removido com sucesso.');
        })
        .catch(function (error) {
            openAlert('alert', 'Erro ao remover endereço.');
            console.error('Erro ao enviar formulário:', error);
        });
}

async function internalGetAddress(idAddress) {
    try {
        const address = axios.get(`/dashboard/address/${idAddress}`);
        return address;
    } catch (error) {
        console.log(error);
    }
}

//editar
function initializeFunctionsBtn() {
    //adiciona a função editar e update
    $('[data-modaladdress]').on('click', async function () {
        typeAction = $(this).data('typeaction');

        if(typeAction != 'delete'){
            clearForm();
            $('#address').modal('show');
        }

        if (typeAction === 'update') {
            idUpdateAddress = $('[data-idaddress]').data('idaddress');
            const response = await internalGetAddress(idUpdateAddress);
            setInternalValueAddress(response.data);
        } else if (typeAction === 'delete') {
            idUpdateAddress = $('[data-idaddress]').data('idaddress');
            Swal.fire({
                title: 'Deletar endereço?',
                text: "Esta ação irá remover permanentemente seu endereço. Tem certeza que deseja continuar?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim, deletar agora!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    deleteCep(idUpdateAddress);
                }
            })
        }
    });
}
initializeFunctionsBtn();

function setInternalValueAddress(dataAddress) {
    console.log(dataAddress);
    inputZip.value = dataAddress.zip;
    inputStreet.value = dataAddress.street;
    inputNeighborhood.value = dataAddress.neighborhood;
    inputCity.value = dataAddress.city_id;
    streetNumber.value = dataAddress.street_number;
    complement.value = dataAddress.complement;

}

function clearForm() {
    inputZip.value = '';
    inputStreet.value = '';
    inputNeighborhood.value = '';
    inputCity.value = '';
    streetNumber.value = '';
    complement.value = '';
}


//adiciona e remove linhas na tag definida no front
function newLineAddress(dataAddress, elementId) {
    const lineAddress = `
    <li class="list-group-item" data-idaddress="${dataAddress.id}">
    <div class="d-flex flex-row justify-content-between">
        <div class="d-flex mt-2">
            <div>
                <a class="nav-link border rounded-pill avatar avatar-sm bg-light me-2"
                    href="javascript:void(0);"><i class="fe fe-map-pin"></i></a>
            </div>
            <div class="ms-2" id="line-addresses">
                <p class="fs-13 fw-600 mb-0">${dataAddress.zip}</p>
                <p class="fs-12 text-muted">CEP: ${dataAddress.zip}, CIDADE:
                ${dataAddress.title_city}<br>BAIRRO: ${dataAddress.neighborhood}<br>N:
                ${dataAddress.street_number}<br>COMPLEMENTO: ${dataAddress.complement}
                </p>
            </div>
        </div>
        <div class="btn-list">
            <button class="btn btn-sm btn-icon btn-info-light rounded-circle" type="button"
                data-modaladdress data-typeaction="update"><i class="bi bi-pencil-square"></i></button>
            <button class="btn btn-sm btn-icon btn-secondary-light rounded-circle"
                type="button"><i class="bi bi-trash"></i></button>
        </div>
        </div>
    </li>
    `
    $(elementId).append(lineAddress);
    initializeFunctionsBtn();
}


function updateLineAddress(dataAddress, elementId) {
    console.log('@aqui');
    // pegar a div com o id?
    const lineAddress = `
    <div class="d-flex flex-row justify-content-between">
        <div class="d-flex mt-2">
            <div>
                <a class="nav-link border rounded-pill avatar avatar-sm bg-light me-2"
                    href="javascript:void(0);"><i class="fe fe-map-pin"></i></a>
            </div>
            <div class="ms-2" id="line-addresses">
                <p class="fs-13 fw-600 mb-0">${dataAddress.zip}</p>
                <p class="fs-12 text-muted">CEP: ${dataAddress.zip}, CIDADE:
                ${dataAddress.title_city}<br>BAIRRO: ${dataAddress.neighborhood}<br>N:
                ${dataAddress.street_number}<br>COMPLEMENTO: ${dataAddress.complement}
                </p>
            </div>
        </div>
        <div class="btn-list">
            <button class="btn btn-sm btn-icon btn-info-light rounded-circle" type="button"
                data-modaladdress data-typeaction="update"><i class="bi bi-pencil-square"></i></button>
            <button class="btn btn-sm btn-icon btn-secondary-light rounded-circle"
                type="button"><i class="bi bi-trash"></i></button>
        </div>
        </div>
    `

    console.log($(elementId).find(`[data-idaddress="${dataAddress.id}"]`));
    $(elementId).find(`[data-idaddress="${dataAddress.id}"]`).html(lineAddress);
    initializeFunctionsBtn();
}



function removeLineAddress(idAddress, elementId) {
    $(elementId).find(`[data-idaddress="${idAddress}"]`).remove();
}

