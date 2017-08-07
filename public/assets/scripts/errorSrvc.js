
angular.module("vavaGaming").service('error', function() {
    this.launchModal = function () {
        /** Variable Definition    */
        var MODAL_CNTR      = $('#modal-msg-prompt');
        var modal_body      = $('#msg-list-body');
        
        /** Configure the Modal Pop-up  */
        MODAL_CNTR.modal({
            keyboard: false,
        })
            /** Event before Modal Pops-up  */
            .on('show.bs.modal', function(e) {
                /** Loads the Form  */
                    var modal_height = $(document).height() + 180;
                    $('.modal-backdrop').css('min-height', modal_height+'px');
                
            })
            /** Event before Modal closes  */
            .on('hide.bs.modal', function(e) {
                /** Reset the Form and bindings   */
                //modal_body.empty();
                MODAL_CNTR.unbind();
                //$(UPD_BTN).prop('disabled', false).text('Save');
            })
            .modal('show');
    }
});