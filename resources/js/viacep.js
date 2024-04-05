const modal = document.querySelector('[data-saveaddress]');
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
        openAlert('success','endereço pesquisado com sucesso.');
        console.log(lastSearchCeps);
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
    inputCep.addEventListener(event, function () {
        const currentCep = inputCep.value.trim().replace(/-/g, '');
        if (currentCep.length === 8 && !verifyCepIsSearch(currentCep)) { // Verifica se o CEP tem 8 dígitos e se é diferente do último pesquisado
            listener(currentCep);
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
    "use strict";
    var options = {}
    var notifier = new AWN(options);

    if (!(type, message)) {
        return;
    }
    /* Basic notifications */
    notifier[type](message)
    // document.querySelector('#basic').addEventListener('click', function () {
    // })
}