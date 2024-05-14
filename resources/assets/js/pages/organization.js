import { deletOrganization } from "../components/requestsaxios";

function deleteOrganization() {
    //adiciona a função editar e update
    $('[data-delete]').on('click', async function () {
        Swal.fire({
            title: 'Deletar empresa?',
            text: "Esta ação irá remover permanentemente a empresa e todos os seus dados?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim, deletar agora!',
            cancelButtonText: 'Cancelar'
        }).then(async (result) => {
            if (result.isConfirmed) {
                await deletOrganization($(this).data('delete'));
            }
        })
    });
}
deleteOrganization();
