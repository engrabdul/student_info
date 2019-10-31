<div class="modal fade" id="role-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Roles</b></h4>
          	</div>
          	<div class="modal-body">
            <!-- Fields -->
              <div class="form-group">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
                <!-- <div class="form-group">
                  	<label for="total" class="col-sm-3 control-label">Total</label>

                  	<div class="col-sm-9">
                      <input type="number" class="form-control" name="total" id="total" required>
                  	</div>
                </div> -->
			  </div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	{!! Form::submit('Create Role', ['class' => 'btn btn-success']) !!}
          	</div>
        </div>
    </div>
</div>