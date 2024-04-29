import { deleteTitle } from "../components/requestsaxios";

$('[data-delete]').on('click', function () {
    const id = $(this).data('delete');
    modalDeletPhone(id);
});


function modalDeletPhone(id, element) {
    Swal.fire({
        title: 'Deletar Título?',
        text: "Esta ação irá remover permanentemente o título. Tem certeza que deseja continuar?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, deletar agora!',
        cancelButtonText: 'Cancelar'
    }).then(async (result) => {
        if (result.isConfirmed) {
            await deleteTitle(id, () => window.location.reload());

            // deletPhoneUser(phoneId, () => {
            //     removeLinePhone(phoneId, element);
            // });
        }
    })
}