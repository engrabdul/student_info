<div class="modal fade" id="course-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Add New Course</b></h4>
          	</div>
          	<div class="modal-body">

                <!-- Course Name Field -->
                <div class="form-group">
                    {!! Form::label('course_name', 'Course Name:') !!}
                    {!! Form::text('course_name', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Course Code Field -->
                <div class="form-group">
                    {!! Form::label('course_code', 'Course Code:') !!}
                    {!! Form::text('course_code', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Description Field -->
                <div class="form-group">
                    {!! Form::label('description', 'Description:') !!}
                    {!! Form::textarea('description', null, ['class' => 'form-control', 'cols' => 40, 'rows' => 2]) !!}
                </div>

                <!-- Status Field -->
                <div class="form-group">
                    {!! Form::label('status', 'Status:') !!}
                    <label class="checkbox-inline">
                        {!! Form::hidden('status', 0) !!}
                        {!! Form::checkbox('status', '1', null) !!}
                    </label>
                </div>
            </div>
            <div class="modal-footer">
            	<button type="button" class="btn btn-warning btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	{!! Form::submit('Create Course', ['class' => 'btn btn-success']) !!}
          	</div>
        </div>
    </div>
</div>