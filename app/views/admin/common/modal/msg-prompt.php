<div class="modal" id="modal-msg-prompt" role="dialog" >
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h1> System Messages </h1>
            </div>
            
            <div class="modal-body" id = 'msg-list-body'>
                
                <div ng-if = '0 < master.errors.length'>
                    <span> The following errors have been found: </span>
                    <hr/>
                    
                    <div ng-repeat = 'error_items in master.errors track by $index' ng-if = '0 < error_items.msgs.length'>
                        Item {{ error_items.idx }}:
                        <div ng-repeat = 'error in error_items.msgs track by $index' style = 'color: red; font-size: 11px;'>
                            {{ error }}
                        </div>
                        <hr/>
                    </div>
                </div>
                
                <div ng-if = '0 >= master.errors.length'>
                    <span> Operation Completed Successfully </span>
                </div>
                
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close </button>
                <!-- <button type="submit" class="btn btn-large btn-primary pop-upd-btn"> {{ trans('messages.save') }} </button> -->
            </div>
                
        </div>
    </div>
</div>