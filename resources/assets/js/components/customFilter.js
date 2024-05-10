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

if ($('#filter-assets').length) {
    new CustomFilter('#filter-assets', {
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

        ctrTypesId = $.param(newParamns);

        table.ajax.url(createUrlAssets()).load();
    }

    function arrayInputActive(inputsActive) {
        return inputsActive.map((_, element) => {
            return $(element).data('btnfilter');
        })
    }
}

if ($('#filter-assets-origin-debitors').length) {
    new CustomFilter('#filter-assets-origin-debitors', {
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
            crtOriginDebitorsId: [...value].join(',')
        }
        crtOriginDebitorsId = $.param(newParamns);
        table.ajax.url(createUrlAssets()).load();
    }

    function arrayInputActive(inputsActive) {
        return inputsActive.map((_, element) => {
            return $(element).data('btnfilter');
        })
    }
}


let ctrTypesId = '';
let crtOriginDebitorsId = '';

function createUrlAssets() {
    return '/dashboard/assets?' + ctrTypesId + '&&' + crtOriginDebitorsId;
}
