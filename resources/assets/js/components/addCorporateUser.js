[
    ['keyup', searchUser],
    ['focus', searchUser],
    ['blur', searchUser],
].forEach(([event, listener]) => {
    document.querySelector("#serarchuser").addEventListener(event, async function () {
        listener(this);
    });
});

function searchUser(element) {
    getUsers();
    console.log($(element).val());
}

$('[data-modaluser]').on('click', function () {
    $('#addUser').modal('show');
});


async function getUsers() {
    await axios.get('/dashboard/users')
        .then(function (response) {
           createLinesUserAdd(response.data);
        })
        .catch(function (error) {
            console.error('Erro ao enviar formulário:', error);
        });
}



function createLinesUserAdd(data){
    const usersTable = $('#users-search-table')
    const elementsTable = createLinesTable(data);
    usersTable.html(elementsTable);
}


const USER_LINE_ELEMRNT = (name, email) => `
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
                <span class="badge bg-light text-dark p-2"><i
                        class="bi bi-circle-fill fs-8 me-1 text-success"></i> Online</span>
            </div>
        </div>
    </li>
    `

function createLinesTable(arrayData) {
    const finalArray = arrayData.map(({ name, email }) => {
        return USER_LINE_ELEMRNT(name, email);
    });

    return finalArray.join("");
}