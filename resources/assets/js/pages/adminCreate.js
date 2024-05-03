$(function() {
    init();
});

function init(){
    const form = $('#default-form');
    const input = $('#user_type_id');
    const formLawer = $('[data-formlawer]');

    $('[data-saveform]').on('click',function(e){
        e.preventDefault();
        form.trigger( "submit" );
    });

    $(input).on('change', function(e){
        if(e.target.value == 4){
            formLawer.show('slow');

        }else{
            formLawer.hide();

        }
    });
}