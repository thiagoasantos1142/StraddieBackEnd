//global component
console.log($('[name="custom_request"]').val());

$('[data-modaluser]').on('click', function () {
    $('#addUser').modal('show');
});

[
    ['keyup', searchUser],
].forEach(([event, listener]) => {
    document.querySelector("#serarchuser").addEventListener(event, async function () {
        listener(this);
    });
});

function searchUser(element) {
    getUsers($(element).val());
}

async function getUsers(val) {
    await axios.get(`/dashboard/users?search=${val}`)
        .then(function (response) {
            createLinesUserAdd(response.data);
        })
        .catch(function (error) {
            console.error('Erro ao enviar formulário:', error);
        });
}



function createLinesUserAdd(data) {
    const usersTable = $('#users-search-table');
    const elementsTable = createLinesTable(data);
    usersTable.html(elementsTable);
    //add function btns
    $('[data-adduserincorporate]').on('click', function () {
        const userId = $(this).data('adduserincorporate');
        updateUserCorporate(userId, this, createElementInList(userId));
    });
}


const USER_LINE_ELEMRNT = (id, name, email) => `
    <li class="list-group-item br-ts-5 br-te-5">
        <div class="d-flex align-items-center">
            <span class="avatar avatar-md rounded-circle">
                <img src="{{ asset('build/assets/images/users/1.jpg') }}" class="rounded-circle"
                    alt="img">
            </span>
            <div class="ms-3">
                <p class="mb-0 fs-14">${name}</p>
                <span class="clearfix"></span>
                <small class="text-muted fs-12">${email}</small>
            </div>
            <div class="ms-auto">
            <button type="button" class="btn btn-sm btn-primary" data-adduserincorporate="${id}"><i class="fe fe-plus me-2"></i>Atribuir</button>
            </div>
        </div>
    </li>
    `

function createLinesTable(arrayData) {
    const finalArray = arrayData.map(({ id, name, email }) => {
        return USER_LINE_ELEMRNT(id, name, email);
    });
    return finalArray.join("");
}


async function updateUserCorporate(userId, element, func = () => { }) {
    const jsonData = $('[name="custom_request"]').val() && JSON.parse($('[name="custom_request"]').val());
    // pegar as info do form agora
    const data = {
        user_id: userId,
        ...jsonData
    };

    const route = $('[name="route"]').val();

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
}

function removeUserCorporate(element) {
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
            console.log($(element).data('removeusercorporate'));
            await updateUserCorporate($(element).data('removeusercorporate'), null, null);
            removeListUser(element);
        }
    })
}

function removeListUser(element) {
    const liElement = $(element).parent().parent();
    liElement.fadeOut();
    setTimeout(() => {
        liElement.remove();
    }, 300);
}

async function createElementInList(userId) {
    //verifica se o elemento já existe
    const element = $(`[data-removeusercorporate="${userId}"]`);
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
    $(`#list-users-colaborate`).append(newdiv);
    addRemoveCorporateBtn();
}

async function getUser(userId, func = () => { }) {

    try {
        const response = await axios.get(`/dashboard/users/${userId}`);
        if (func && typeof func === 'function') {
            func();
        }
        return response; // Retorna a resposta da requisição Axios
    } catch (error) {
        openAlert('alert', 'Erro ao buscar usuario.');
        console.error('Erro ao enviar formulário:', error);
    }
}


addRemoveCorporateBtn();

