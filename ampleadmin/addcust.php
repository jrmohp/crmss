<?php


  include "header.php";

?>



 
<form id="taskForm" method="post" class="form-horizontal">
    <div class="form-group">
        <label class="col-xs-3 control-label">Task</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" name="task" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">Description</label>
        <div class="col-xs-5">
            <textarea class="form-control" name="description" rows="5"></textarea>
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-5 col-xs-offset-3">
            <!-- Initially, the submit button is disabled -->
            <button type="submit" class="btn btn-default" disabled="disabled">Submit</button>
        </div>
    </div>
</form>

<script>
$(document).ready(function() {
    $('#taskForm')
        .formValidation({
            framework: 'bootstrap',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                task: {
                    validators: {
                        notEmpty: {
                            message: 'The task is required'
                        }
                    }
                },
                description: {
                    validators: {
                        notEmpty: {
                            message: 'The description is required'
                        }
                    }
                }
            }
        })
        .on('success.field.fv', function(e, data) {
            if (data.fv.getInvalidFields().length > 0) {    // There is invalid field
                data.fv.disableSubmitButtons(true);
            }
        });
});
</script>
	
<?php


  include "footer.php";
?>