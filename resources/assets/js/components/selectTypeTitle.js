import { getAllCrtTypes } from "./requestsaxios";
$(function () {
    const config = {
        inputAddSelects: '#select_crt_type_id',
        modal: '[data-modal="typeTitle"]',
        setInputs: '[name="crt_type_id"]'
    }
    init(config);
});

async function init(config) {
    const { data } = await getAllCrtTypes();
    //adicionar os caampos valídos
    $(config.inputAddSelects).html(createSelects(data));
    $(config.modal).modal({
        keyboard: false,
        backdrop: "static"
    }).modal('show');

    $(config.inputAddSelects).on('change', function() {
        $(config.setInputs).val($(this).val());
    });
}


function createSelects(data) {
    const optionNull = ['<option value="">Selecione o tipo do título</option>']
    const newArraySelect = data.map(({ id, title }) => {
        return `<option value="${id}">${title}</option>`
    });
    return optionNull + newArraySelect.join('');
}