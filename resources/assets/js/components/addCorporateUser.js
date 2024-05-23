import { saveUser, saveOrganization, getOrganization, saveLawyer, saveUserInCrt, saveLawyerInCrt, saveOrganizationInCrt } from "./requestsaxios";
const existCrt = $($('[name="data_component"]')[0]).val();
const creditRigthTitles = JSON.parse(existCrt);

//global component
let mainComponent = null;
const actionBtnRemove = $('[name="action_btnremove"]').val();
let typeFormPf = true;

$('[data-modaluser]').on('click', function () {
    switch ($(this).data('modaluser')) {
        case 'search':
            mainComponent = $(this).parents("[name='container-main']");
            const modal = mainComponent.find("[name='addUser']");
            modal.modal('show');
            break;

        default:
            break;
    }
    // $('[#addUser]').modal('show');
});

[
    ['keyup', searchUser],
].forEach(([event, listener]) => {
    $("[name='serarchuser']").on(event, async function () {
        listener(this);
    })
});

function searchUser(element) {
    getUsers($(element).val());
}

async function getUsers(val) {
    //verifica se existe uma rota definida 
    const route = mainComponent.find('[name="search_dataroute"]').val();


    await axios.get(route ? `${route}?search=${val}` : `/dashboard/users?search=${val}`)
        .then(function (response) {
            createLinesUserAdd(response.data);
        })
        .catch(function (error) {
            console.error('Erro ao enviar formulário:', error);
        });
}



function createLinesUserAdd(data) {
    const usersTable = mainComponent.find("[name='search-data']");
    const elementsTable = createLinesTable(data);
    usersTable.html(elementsTable);
    //add function btns
    $('[data-adduserincorporate]').on('click', function () {
        // @aqui verificar se é pj para outro procedimento de adicionar user
        const userId = $(this).data('adduserincorporate');
        const is_pj = $(this).data('ispj');
        const objectData = mainComponent.find('[name="data_component"]').val() && JSON.parse($('[name="data_component"]').val());
        if (is_pj) {
            createElementInList(userId, 'ORGANIZATION');
            includUserInCreditRigthTitle(userId, 'ORGANIZATION');
            return;
        }
        updateUserCorporate(userId, objectData, this, createElementInList(userId, 'USER'));
    });
}


const USER_LINE_ELEMRNT = (id, name, email, OAB, is_pj) => `
    <li class="list-group-item br-ts-5 br-te-5">
        <div class="d-flex align-items-center">
            <span class="avatar avatar-md rounded-circle">
                <img src="{{ asset('build/assets/images/users/1.jpg') }}" class="rounded-circle"
                    alt="img">
            </span>
            <div class="ms-3">
                <p class="mb-0 fs-14">${name}</p>
                <span class="clearfix"></span>
                <small class="text-muted fs-12">${email || `OAB: ${OAB}`}</small>
            </div>
            <div class="ms-auto">
            <button type="button" class="btn btn-sm btn-primary" data-adduserincorporate="${id}" data-ispj="${is_pj}"><i class="fe fe-plus me-2"></i>Atribuir</button>
            </div>
        </div>
    </li>
    `

function createLinesTable(arrayData) {
    const finalArray = arrayData.map(({ id, name, email, OAB_number = null, is_pj = false }) => {
        return USER_LINE_ELEMRNT(id, name, email, OAB_number, is_pj);
    });
    return finalArray.join("");
}


async function updateUserCorporate(userId, objectData, element, func = () => { }) {
    // pegar as info do form agora
    const route = mainComponent.find('[name="route_update"]').val();

    if (objectData === 0) {
        $(mainComponent).find('[name="addUser"]').modal('hide')
        if ($('input[name="users_ids[]"][value="' + userId + '"]').length === 0) {
            if (route.includes("/crtLawyer")) {
                $('<input>').attr({
                    type: 'hidden',
                    name: 'laywers_ids[]',
                    value: userId
                }).appendTo('[data-setUsersSelected]');
            } else {
                $('<input>').attr({
                    type: 'hidden',
                    name: 'users_ids[]',
                    value: userId
                }).appendTo('[data-setUsersSelected]');
            }
        }
        return;
    }

    const data = {
        user_id: userId,
        ...objectData
    };


    await axios.post(route, data)
        .then(function (response) {
            if (element) {
                $(element).fadeOut();
            }
            if (func && typeof func === 'function') {
                func();
            }
            openAlert('success', 'Advogado atribuido com sucesso.');
        })
        .catch(function (error) {
            openAlert('alert', 'Erro ao atribuir advogado.');
            console.error('Erro ao enviar formulário:', error);
        });
}

async function includUserInCreditRigthTitle(userId, typeUser) {
    switch (typeUser) {
        case 'USER':
            console.log("Incluindo user");
            $('<input>').attr({
                type: 'hidden',
                name: 'users_ids[]',
                value: userId
            }).appendTo('[data-setUsersSelected]');
            if (creditRigthTitles?.credit_rights_title_id) {
                //executa a função que salva no crédito
                var formData = new FormData();
                formData.append('credit_rights_title_id', creditRigthTitles?.credit_rights_title_id);
                formData.append('user_id', userId);
                saveUserInCrt(formData);
            }
            break;
        case 'ORGANIZATION':
            console.log("Incluindo organization");
            $('<input>').attr({
                type: 'hidden',
                name: 'organizations_ids[]',
                value: userId
            }).appendTo('[data-setUsersSelected]');

            if (creditRigthTitles?.credit_rights_title_id) {
                //executa a função que salva no crédito
                var formData = new FormData();
                formData.append('credit_rights_titles_id', creditRigthTitles?.credit_rights_title_id);
                formData.append('organizations_id', userId);
                saveOrganizationInCrt(formData);
            }
            break;
        case 'LAWYER':
            console.log("Incluindo lawyer");
            $('<input>').attr({
                type: 'hidden',
                name: 'lawyers_ids[]',
                value: userId
            }).appendTo('[data-setUsersSelected]');

            if (creditRigthTitles?.credit_rights_title_id) {
                //executa a função que salva no crédito
                var formData = new FormData();
                formData.append('credit_rights_title_id', creditRigthTitles?.credit_rights_title_id);
                formData.append('lawyer_id', userId);
                saveLawyerInCrt(formData);
            }
            break;

        default:
            break;
    }
}

async function deletRegister(userId, objectData, element, func = () => { }) {
    // pegar as info do form agora
    const data = {
        user_id: userId,
        ...objectData
    };

    const route = mainComponent.find('[name="route_delete"]').val();

    await axios.post(route, data)
        .then(function (response) {
            if (element) {
                $(element).fadeOut();
            }
            if (func && typeof func === 'function') {
                func();
            }
            openAlert('success', 'endereço salvo com sucesso.');
        })
        .catch(function (error) {
            openAlert('alert', 'Erro ao salvar endereço.');
            console.error('Erro ao enviar formulário:', error);
        });
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


function addRemoveCorporateBtn() {
    $('[data-removeusercorporate]').on('click', function () {
        removeUserCorporate(this);
    })
    $('[data-removeuserorganization]').on('click', function () {
        removeUserOrganization(this);
    })
}

function removeUserCorporate(element) {
    mainComponent = $(element).parents("[name='container-main']");
    Swal.fire({
        title: 'Remover colaborador?',
        text: "Esta ação irá remover o colaborador da empresa. Tem certeza que deseja continuar?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, remover agora!',
        cancelButtonText: 'Cancelar'
    }).then(async (result) => {
        if (result.isConfirmed) {
            //executar a função de update para remover
            //verificar qual rota executar
            if (actionBtnRemove === 'update') {
                const data = JSON.parse($('[name="data_component"]').val());
                const nullDate = setKeysNull(data);
                await updateUserCorporate($(element).data('removeusercorporate'), nullDate, null, null);
            } else if (actionBtnRemove === 'delete') {
                //executar outra rota
                const objectData = mainComponent.find('[name="data_component"]').val() && JSON.parse($('[name="data_component"]').val());
                await deletRegister($(element).data('removeusercorporate'), objectData, null, null);
            }


            removeListUser(element);
        }
    })
}

function removeUserOrganization(element) {
    mainComponent = $(element).parents("[name='container-main']");
    Swal.fire({
        title: 'Remover colaborador?',
        text: "Esta ação irá remover o colaborador da empresa. Tem certeza que deseja continuar?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, remover agora!',
        cancelButtonText: 'Cancelar'
    }).then(async (result) => {
        if (result.isConfirmed) {
            //executar a função de update para remover
            //verificar qual rota executar
            if (actionBtnRemove === 'update') {
                const data = JSON.parse($('[name="data_component"]').val());
                const nullDate = setKeysNull(data);
                await updateUserCorporate($(element).data('removeusercorporate'), nullDate, null, null);
            } else if (actionBtnRemove === 'delete') {
                //executar outra rota
                const objectData = mainComponent.find('[name="data_component"]').val() && JSON.parse($('[name="data_component"]').val());
                await deletRegister($(element).data('removeusercorporate'), objectData, null, null);
            }

            removeListUser(element);
        }
    })
}

function setKeysNull(obj) {
    var keys = Object.keys(obj);
    var newObj = {};

    keys.forEach(function (key) {
        newObj[key] = null;
    });

    return newObj;
}

function removeListUser(element) {
    const liElement = $(element).parent().parent();
    liElement.fadeOut();
    setTimeout(() => {
        liElement.remove();
    }, 300);
}

async function createElementInList(userId, type,) {
    //verifica se o elemento já existe
    //usar o this para pegar apenas desta tabela
    if (type == 'USER') {
        const element = mainComponent.find(`[data-removeusercorporate="${userId}"]`);
        if (!!element.length) {
            return;
        }
        const { data } = await getUser(userId);
        const newdiv = `
        <li>
            <a class="dropdown-item d-flex flex-row justify-content-between" href="javascript:void(0);">
                <div>
                    <img src="http://localhost:9000/build/assets/images/users/1.jpg" alt="img"
                        width="25" height="25" class="rounded-circle me-2">${data?.name}
                </div>
                <button type="button" class="btn btn-sm btn-secondary" data-removeusercorporate=${data?.id}><i class="fe fe-minus me-2"></i>remover</button>
            </a>
        </li>
        `
        mainComponent.find(`[name="show-date"]`).append(newdiv);
        addRemoveCorporateBtn();
    }

    if (type == 'ORGANIZATION') {
        const element = mainComponent.find(`[data-removeuserorganization="${userId}"]`);
        if (!!element.length) {
            return;
        }
        const { data } = await getOrganization(userId);

        const newdiv = `
        <li>
            <a class="dropdown-item d-flex flex-row justify-content-between" href="javascript:void(0);">
                <div>
                    <img src="http://localhost:9000/build/assets/images/users/1.jpg" alt="img"
                        width="25" height="25" class="rounded-circle me-2">${data?.nome_fantasia}
                </div>
                <button type="button" class="btn btn-sm btn-secondary" data-removeuserorganization=${data?.id}><i class="fe fe-minus me-2"></i>remover</button>
            </a>
        </li>
        `
        mainComponent.find(`[name="show-date"]`).append(newdiv);
        addRemoveCorporateBtn();
    }

    if (type == 'LAWYER') {
        const element = mainComponent.find(`[data-removeusercorporate="${userId}"]`);
        if (!!element.length) {
            return;
        }

        const { data } = await getUser(userId);

        const newdiv = `
        <li>
            <a class="dropdown-item d-flex flex-row justify-content-between" href="javascript:void(0);">
                <div>
                    <img src="http://localhost:9000/build/assets/images/users/1.jpg" alt="img"
                        width="25" height="25" class="rounded-circle me-2">${data?.name}
                </div>
                <button type="button" class="btn btn-sm btn-secondary" data-removeusercorporate=${data?.id}><i class="fe fe-minus me-2"></i>remover</button>
            </a>
        </li>
        `
        mainComponent.find(`[name="show-date"]`).append(newdiv);
        addRemoveCorporateBtn();
    }


}

async function getUser(userId, func = () => { }) {
    const route = mainComponent.find('[name="search_dataroute"]').val();

    try {
        const response = await axios.get(route ? `${route}/${userId}` : `/dashboard/users/${userId}`);
        if (func && typeof func === 'function') {
            func();
        }
        return response; // Retorna a resposta da requisição Axios
    } catch (error) {
        openAlert('alert', 'Erro ao buscar usuario.');
        console.error('Erro ao enviar formulário:', error);
    }
}

function initFunctionsBtnModal() {
    const btnCreateUser = $('[data-modaluser="addAndSearch"]');
    const modalUser = $('#create_user');
    const modalLaywer = $('#create_laywer');

    btnCreateUser.on('click', function () {

        mainComponent = $(this).parents("[name='container-main']");
        const route = mainComponent.find('[name="route_update"]').val();

        if (route.includes("/crtLawyer")) {
            modalLaywer.modal('show');
        } else {
            modalUser.modal('show');
        }
    })

    $('[data-saveUser]').on('click', async function () {
        const formUserPf = $('#form-add-user-pf').serialize();
        const formUserPj = $('#form-add-user-pj').serialize();
        const formLaywer = $('#form_add_lawyer').serialize();

        if ($(this).data('saveuser') == 'laywer') {
            const response = await saveLawyer(formLaywer, async function (data) {
                try {
                    await createElementInList(data.id, 'LAWYER');
                    includUserInCreditRigthTitle(response.data.id, 'LAWYER');
                    modalLaywer.modal('hide');
                } catch (error) {

                }
            });
        } else {
            if (typeFormPf) {
                const response = await saveUser(formUserPf);
                createElementInList(response.data.id, 'USER');
                includUserInCreditRigthTitle(response.data.id, 'USER');
            } else {
                const response = await saveOrganization(formUserPj);
                //@aqui deve ser diferente se não n salva
                createElementInList(response.data.id, 'ORGANIZATION');
                includUserInCreditRigthTitle(response.data.id, 'ORGANIZATION');
            }
            modalUser.modal('hide');
        }
    })
}

function openPjOrPf() {
    const modalUser = $('[data-modal="createUser"]');
    const modalLawyer = $('[data-modal="createLawyer"]');

    const btnOpenPfUser = modalUser.find('[data-openform="PF"]');
    const btnOpenPjUser = modalUser.find('[data-openform="PJ"]');

    const formOpenPfUser = modalUser.find('[data-typeform="PF"]');
    const formOpenPjUser = modalUser.find('[data-typeform="PJ"]');

    btnOpenPfUser.on('click', function () {
        formOpenPfUser.fadeIn();
        formOpenPjUser.hide();
        typeFormPf = true;
    });
    btnOpenPjUser.on('click', function () {
        formOpenPjUser.fadeIn();
        formOpenPfUser.hide();
        typeFormPf = false;
    });

}

openPjOrPf();
initFunctionsBtnModal();
addRemoveCorporateBtn();

