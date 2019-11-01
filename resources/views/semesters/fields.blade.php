<div class="modal fade" id="add-semester-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right" role="document">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><i class="fa fa-gear" aria-hidden="true"><b> Add New Semester</b></i></h4>
          	</div>
          	<div class="modal-body">
                <!-- Semester Name Field -->
                <div class="form-group">
                    {!! Form::label('semester_name', 'Semester Name:') !!}
                    {!! Form::text('semester_name', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Semester Code Field -->
                <div class="form-group">
                    {!! Form::label('semester_code', 'Semester Code:') !!}
                    {!! Form::text('semester_code', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Semester Duration Field -->
                <div class="form-group">
                    {!! Form::label('semester_duration', 'Semester Duration:') !!}
                    {!! Form::text('semester_duration', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Semester Description Field -->
                <div class="form-group">
                    {!! Form::label('semester_description', 'Semester Description:') !!}
                    {!! Form::textarea('semester_description', null, ['class' => 'form-control', 'cols' => 40, 'rows' => 2]) !!}
                </div>
            </div>
            <!-- Submit Field -->
            <div class="modal-footer">
            	<button type="button" class="btn btn-warning btn-flat" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	{!! Form::submit('Save Semester', ['class' => 'btn btn-success']) !!}
          	</div>
        </div>
    </div>
</div>