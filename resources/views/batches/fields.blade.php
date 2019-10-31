<div class="modal fade" id="add-batch-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><i class="fa fa-id-badge" aria-hidden="true"><b> Add New Batch</b></i></h4>
          	</div>
          	<div class="modal-body">
                <!-- Batch Field -->
                <div class="input-group col-md-12">
                    <span class="input-group-addon">Batch Year</span>
                    {{--{!! Form::label('batch', 'Batch:') !!}--}}
                    {!! Form::number('batch', null, ['class' => 'form-control']) !!}
                </div>

            <!-- Submit Field -->
            </div>
            <div class="modal-footer">
            	<button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	{!! Form::submit('Save Batch', ['class' => 'btn btn-success']) !!}
          	</div>
        </div>
    </div>
</div>