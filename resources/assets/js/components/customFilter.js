import CustomFilter from "../customFilter-lib";

if ($('#custom-filter').length) {
    new CustomFilter('#custom-filter', {
        keys: {
            title: 'title',
            value: 'id'
        },
        onClick: (obj, target, inputsActive) => {
            const arrayValuesIds = arrayInputActive(inputsActive);
            createNewUrl(arrayValuesIds);
        }
    });

    function createNewUrl(value) {
        // ctrTypes
        const newParamns = {
            ctrTypesId: [...value].join(',')
        }
        table.ajax.url('/dashboard/creditRightsTitle?' + $.param(newParamns)).load();
    }

    function arrayInputActive(inputsActive) {
        return inputsActive.map((_, element) => {
            return $(element).data('btnfilter');
        })
    }
}
