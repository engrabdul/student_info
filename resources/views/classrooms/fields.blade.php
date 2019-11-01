<div class="modal fade" id="add-classroom-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right" role="document">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><i class="fa fa-sun-o" aria-hidden="true"><b> Add New Day</b></i></h4>
          	</div>
          	<div class="modal-body">
            
                <!-- Classroom Name Field -->
                <div class="input-group">
                    <span class="input-group-addon">Classroom Name</span>
                    {!! Form::text('classroom_name', null, ['class' => 'form-control']) !!}
                </div>
                <br>
                <!-- Classroom Code Field -->
                <div class="input-group">
                    <span class="input-group-addon">Classroom Code</span>
                    {!! Form::text('classroom_code', null, ['class' => 'form-control']) !!}
                </div>
                <br>
                <!-- Classroom Description Field -->
                <div class="input-group">
                    <span class="input-group-addon">Classroom Description</span>
                    {!! Form::text('classroom_description', null, ['class' => 'form-control', 'rows' => 2, 'cols' => 40]) !!}
                </div>
                <br>
                <!-- Classroom Status Field -->
                <div class="input-group">
                    <span class="input-group-addon">Status</span>&nbsp;
                        {!! Form::hidden('classroom_status', 0) !!}
                        {!! Form::checkbox('classroom_status', '1', null) !!} Active
                </div>
            </div>
            <!-- Submit Field -->
            <div class="modal-footer">
            	<button type="button" class="btn btn-warning btn-flat" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	{!! Form::submit('Save Classroom', ['class' => 'btn btn-primary']) !!}
          	</div>
        </div>
    </div>
</div>