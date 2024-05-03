function addFunctionToForm() {
    $('[data-saveform]').on('click', function (e) {
        e.preventDefault();

        const typeAction = $(this).data('saveform');
        const form = $(this).parent().parent();
        const formInputs = $(this).parent().parent().find('[data-input]');

        if(typeAction === 'update'){
            if ($(formInputs[0]).prop('disabled')) {
                $(this).text('Salvar');
                formInputs.prop('disabled', false);
            }else{
                form.trigger( "submit" );
                //executar a rotina para salvar
                // $(this).text('Editar');
                // formInputs.prop('disabled', true);
            }
        }else{
            form.trigger( "submit" );
        }
    })
}

function addInputInForm(){

}

addFunctionToForm();