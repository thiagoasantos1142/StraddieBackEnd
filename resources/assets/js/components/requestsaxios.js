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


async function saveDocument(data, func = () => { }) {
    //ajustar para criar e enviar um form;


    try {
        const response = await axios.post(`/upload/file`, data);
        console.log("@response", response);
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

// CtrTypes
async function getAllCrtTypes(func = () => { }) {
    try {
        const response = await axios.get(`/dashboard/crtType`);
        if (func && typeof func === 'function') {
            func(response.data);
        }
        return response;
    } catch (error) {
        console.error('Erro ao enviar formulário:', error);
    }
}

// UserController
async function getAllUsers(func = () => { }) {
    try {
        const response = await axios.get(`/dashboard/users`);
        if (func && typeof func === 'function') {
            func(response.data);
        }
        return response;
    } catch (error) {
        console.error('Erro ao enviar formulário:', error);
    }
}

async function saveUser(data, func = () => { }) {
    try {
        const response = await axios.post(`/dashboard/users`, data);
        openAlert('success', 'user salvo com sucesso.');
        if (func && typeof func === 'function') {
            func(response.data);
        }
        return response;
    } catch (error) {
        openAlert('alert', JSON.stringify(error.response.data.errors));
        console.error('Erro ao enviar formulário:', error);
    }
}

//organization
async function deletOrganization(organizationId, func = () => { }) {
    try {
        const response = await axios.delete(`/dashboard/organization/${organizationId}`);
        openAlert('success', 'empresa deletada com sucesso.');
        if (func && typeof func === 'function') {
            func(response.data);
        }
        return response;
    } catch (error) {
        openAlert('alert', 'Erro ao deletar empresa.');
        console.error('Erro:', error);
    }
}




export {
    savePhoneUser,
    deletPhoneUser,
    saveDocument,
    getAllCrtTypes,
    getAllUsers,
    saveUser,
    deletOrganization
}