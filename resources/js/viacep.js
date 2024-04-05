const btnSaveAddress = document.querySelector('[data-saveaddress]');
const inputCep = document.querySelector('input.zip');

//campos do form
const inputZip = document.querySelector('#zip');
const inputStreet = document.querySelector('#street');
const inputNeighborhood = document.querySelector('#neighborhood');
const inputCity = document.querySelector('#city_id');


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
        durations : {
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
    await saveCep()
}

async function saveCep() {
    // pegar as info do form agora
    const form = document.querySelector("#form-address");
    const dataForm = new FormData(form);


    await axios.post('/dashboard/address', dataForm)
        .then(function (response) {
            $('#address').modal('hide');
            openAlert('success','endereço salvo com sucesso.');
        })
        .catch(function (error) {
            openAlert('alert','Erro ao salvar endereço.');
            console.error('Erro ao enviar formulário:', error);
        });

    console.log(dataForm);
}
