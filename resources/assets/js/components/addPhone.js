//eu devo ter dois arquivos aqui um de configuração para criar e outro de escopo para tratar as vatiantes;
import ComponentPhone from '../addPhone-lib.js'
import { savePhoneUser, deletPhoneUser } from './requestsaxios.js';

new ComponentPhone('#add-address', {
    onLoad: function (obj) {
        const { element } = obj;
        addFunctionsInbtns(element);
    },
    onpressSaveBtnModal: async (obj, element) => {
        const { keys: { user_id }, form } = obj;
        const phone = $(form).find('#phone').val();

        const formData = new FormData();
        formData.append('user_id', user_id);
        formData.append('phone', phone);

        await savePhoneUser(formData, (data) => { sucessSavePhone(data, obj) });
    }
});

function sucessSavePhone(data, obj) {
    const { dataShow, modal, element } = obj;
    if (createElementInList(data, dataShow, element)) {
        modal.modal('hide');
    }
}

function createElementInList(data, elemntList, component) {
    console.log(data);
    try {
        const element = elemntList.find(`[data-key="${data.id}"]`);
        if (!!element.length) {
            return false;
        }

        const newdiv = `
        <li class="list-group-item" data-key="${data?.id}">
            <div class="d-flex flex-row justify-content-between">
                <div class="d-flex mt-2">
                    <div>
                        <a class="nav-link border rounded-pill avatar avatar-sm bg-light me-2" href="javascript:void(0);"><i class="fe fe-map-pin"></i></a>
                    </div>
                    <div class="ms-2" id="line-addresses">
                        <p class="fs-13 fw-600 mb-0">Telefone: ${data?.phone}</p>
                    </div>
                </div>
                <div class="btn-list">
                    <button class="btn btn-sm btn-icon btn-secondary-light rounded-circle" type="button" data-btndeletaddress="${data?.id}"><i class="bi bi-trash"></i></button>
                </div>
            </div>
        </li>
        `
        elemntList.append(newdiv);

        addFunctionsInbtns(component);
    } catch (error) {
        return false;
    }

    return true;
}

function modalDeletPhone(phoneId, element) {
    Swal.fire({
        title: 'Deletar telefone?',
        text: "Esta ação irá remover permanentemente seu telefone. Tem certeza que deseja continuar?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, deletar agora!',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            deletPhoneUser(phoneId, () => {
                removeLinePhone(phoneId, element);
            });
        }
    })
}


function removeLinePhone(phoneId, element) {
    element.find(`[data-key="${phoneId}"]`).remove();
}

function addFunctionsInbtns(element) {
    element.find('[data-btndeletaddress]').on('click', function () {
        modalDeletPhone($(this).data('btndeletaddress'), element);
    })
}