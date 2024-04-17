
class ComponentPhone {
    constructor(id, options) {
        this.element = $(id);
        this.options = options;
        this.btnAdd = $(this.element).find('[data-btnadd]');
        this.modal = $(this.element).find('[data-modal]');
        this.btnSaveModal = $(this.element).find('[data-save]');
        this.keys = JSON.parse($(this.element).find('[data-keys]').val());
        this.form = $(this.element).find('[name="form-phone"]');
        this.dataShow = $(this.element).find('[data-show]');
        this.init();
    }

    init() {
        this.addButtonHandler();
        this.saveButtonHandler();

        if (this?.options?.onLoad && typeof this?.options?.onLoad === 'function') {
            this?.options?.onLoad(this);
        }
    }


    addButtonHandler() {
        this.btnAdd.on('click', () => {
            this.modal.modal('show');
        })
    }

    saveButtonHandler() {
        this.btnSaveModal.on('click', (event) => {
            this?.options?.onpressSaveBtnModal(this, event.currentTarget);
        });
    }
}

export default ComponentPhone;