<style>
    input:read-only{
        border:none;
        boder-color: transparent;
    }
</style>

<div class="table-responsive">
    <table class="table" id="batches-table">
        <thead>
            <tr>
                <th>Batch</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($batches as $batch)
            <tr>
                <td>{!! $batch->batch !!}</td>
                <td>
                    {!! Form::open(['route' => ['batches.destroy', $batch->batch_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <!-- -----------------------------View Batch Button Start -------------------------------- -->
                        <a data-toggle="modal" data-target="#view-batch-modal" data-batch_id="{!! $batch->batch_id !!}"
                            data-batch="{!! $batch->batch !!}" data-created_at="{!! $batch->created_at !!}"
                            data-updated_at="{!! $batch->updated_at !!}"
                        class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <!-- -----------------------------View Batch Button End-------------------------------- -->
                        <a href="{!! route('batches.edit', [$batch->batch_id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<!-- //================================================VIEW MODAL==========================================// -->

<div class="modal fade" id="view-batch-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><i class="fa fa-id-badge" aria-hidden="true"><b></b></i></h4>
          	</div>
          	<div class="modal-body">
                <input type="hidden" name="batch_id" id="batch_id">
                <!-- Hidden field for the ID -->
                
                <!-- Batch Field -->
                <div class="form-group">
                    {!! Form::label('batch', 'Batch:') !!}
                    <input type="text" name="batch" id="batch" readonly>
                </div>

                <div class="form-group">
                    {!! Form::label('created_at', 'Created At:') !!}
                    <input type="text" name="created_at" id="created_at" readonly>
                </div>

                <div class="form-group">
                    {!! Form::label('updated_at', 'Updated At:') !!}
                    <input type="text" name="updated_at" id="updated_at" readonly>
                </div>


            </div>
            <div class="modal-footer">
            	<button type="button" class="btn btn-warning btn-flat" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	{!! Form::submit('Save Batch', ['class' => 'btn btn-success']) !!}
          	</div>
        </div>
    </div>
</div>

@section('scripts')

    <script>
        // {{---------Batch View-----------}}
        $('#view-batch-modal').on('show.bs.modal', function(event){
            var button = $(event.relatedTarget)
            var batch = button.data('batch')
            var created_at = button.data('created_at')
            var updated_at = button.data('updated_at')
            var batch_id = button.data('batch_id')

            var modal = $(this)

            modal.find('.modal-title').text('VIEW BATCH INFORMATION');
            modal.find('.modal-body #batch').val(batch);
            modal.find('.modal-body #created_at').val(created_at);
            modal.find('.modal-body #updated_at').val(updated_at);
            modal.find('.modal-body #batch_id').val(batch_id);
        });
    </script>

@endsection