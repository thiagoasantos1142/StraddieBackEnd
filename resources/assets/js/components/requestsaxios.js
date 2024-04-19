import AWN from '~awersome';

async function savePhoneUser(data, func = () => { }) {
    try {
        const response = await axios.post(`/dashboard/contacts`, data);
        openAlert('success', 'telefone salvo com sucesso.');
        if (func && typeof func === 'function') {
            func(response.data);
        }
        return response;
    } catch (error) {
        openAlert('alert', 'Erro ao salvar telefone.');
        console.error('Erro ao enviar formulário:', error);
    }
}

async function deletPhoneUser(phoneId, func = () => { }) {
    try {
        const response = await axios.delete(`/dashboard/contacts/${phoneId}`);
        openAlert('success', 'telefone removido com sucesso.');
        if (func && typeof func === 'function') {
            func(response.data);
        }
        return response;
    } catch (error) {
        openAlert('alert', 'Erro ao salvar telefone.');
        console.error('Erro ao enviar formulário:', error);
    }
}


function openAlert(type, message) {
    // documentação
    // https://f3oall.github.io/awesome-notifications/docs/toasts
    "use strict";
    var options = {
        durations: {
            alert: 2000,
            success: 500
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

export {
    savePhoneUser,
    deletPhoneUser
}