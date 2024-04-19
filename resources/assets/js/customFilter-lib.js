class CustomFilter {
    constructor(id, options) {
        this.element = $(id);
        this.options = options;
        this.filters = $(id).data('filters');
        this.keys = options.keys;
        // this.modal = $(this.element).find('[data-modal]');
        // this.btnSaveModal = $(this.element).find('[data-save]');
        // this.keys = JSON.parse($(this.element).find('[data-keys]').val());
        // this.form = $(this.element).find('[name="form-phone"]');
        // this.dataShow = $(this.element).find('[data-show]');
        this.init();
    }

    init() {
        this.createListBtn()

        if (this?.options?.onLoad && typeof this?.options?.onLoad === 'function') {
            this?.options?.onLoad(this);
        }

        //add functions
        this.initFunctions();
    }

    initFunctions() {
        this.onClick();
    }

    createListBtn() {
        const inputs = this.filters.map((obj) => {
            return this.createBtn(obj);
        })
        const finalComponent = `<div class="card-header d-flex" style="flex-wrap: wrap;">
                                    ${inputs.join('')}
                                </div>`
        this.element.html(finalComponent);
    }

    createBtn(obj) {
        // active-btn
        return `<a href="javascript:void(0);" class="btn btn-outline-primary rounded-pill btn-sm me-2 mb-2 mb-md-0" data-btnFilter="${obj[this.keys.value]}">${obj[this.keys.title]}</a>`;
    }

    onClick() {
        const btns = $(this.element).find('[data-btnFilter]');
        btns.on('click', (event) => {
            this.addAndRemoveClass(event.currentTarget, 'active-btn');
            
            //retur todos os selecionados
            const inputsActive = this.element.find('.active-btn');
            this?.options?.onClick(this, event.currentTarget, inputsActive);
        });
    }


    addAndRemoveClass(selector, className) {
        if ($(selector).hasClass(className)) {
            $(selector).removeClass(className);
        } else {
            $(selector).addClass(className);
        }
    }


    // addButtonHandler() {
    //     this.btnAdd.on('click', () => {
    //         this.modal.modal('show');
    //     })
    // }

    // saveButtonHandler() {
    //     this.btnSaveModal.on('click', (event) => {
    //         this?.options?.onpressSaveBtnModal(this, event.currentTarget);
    //     });
    // }
}

export default CustomFilter;