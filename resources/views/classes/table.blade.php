<style>
    input:read-only{
        border:none;
        boder-color: transparent;
    }
</style>

<div class="table-responsive">
    <table class="table" id="classes-table">
        <thead>
            <tr>
                <th>Class Name</th>
        <th>Class Code</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($classes as $classes)
            <tr>
                <td>{!! $classes->class_name !!}</td>
            <td>{!! $classes->class_code !!}</td>
                <td>
                    {!! Form::open(['route' => ['classes.destroy', $classes->class_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <!-- -----------------------------View Class Button Start -------------------------------- -->
                        <a data-toggle="modal" data-target="#view-class-modal" data-batch_id="{!! $classes->class_id !!}"
                            data-class_name="{!! $classes->class_name !!}" data-class_code="{!! $classes->class_code !!}" data-created_at="{!! $classes->created_at !!}"
                            data-updated_at="{!! $classes->updated_at !!}"
                        class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <!-- -----------------------------View Class Button End-------------------------------- -->
                        <a href="{!! route('classes.edit', [$classes->class_id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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

<div class="modal fade" id="view-class-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><i class="fa fa-id-badge" aria-hidden="true"><b></b></i></h4>
          	</div>
          	<div class="modal-body">
                <input type="hidden" name="class_id" id="class_id">
                <!-- Hidden field for the ID -->
                
                <!-- Batch Field -->
                <div class="form-group">
                    {!! Form::label('class_name', 'Class Name:') !!}
                    <input type="text" name="class_name" id="class_name" readonly>
                </div>
                
                <div class="form-group">
                    {!! Form::label('class_code', 'Class Code:') !!}
                    <input type="text" name="class_code" id="class_code" readonly>
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
          	</div>
        </div>
    </div>
</div>

@section('scripts')

    <script>
        // {{---------Class View-----------}}
        $('#view-class-modal').on('show.bs.modal', function(event){
            var button = $(event.relatedTarget)
            var class_name = button.data('class_name')
            var class_code = button.data('class_code')
            var created_at = button.data('created_at')
            var updated_at = button.data('updated_at')
            var batch_id = button.data('class_id')

            var modal = $(this)

            modal.find('.modal-title').text('VIEW CLASS INFORMATION');
            modal.find('.modal-body #class_name').val(class_name);
            modal.find('.modal-body #class_code').val(class_code);
            modal.find('.modal-body #created_at').val(created_at);
            modal.find('.modal-body #updated_at').val(updated_at);
            modal.find('.modal-body #class_id').val(class_id);
        });
    </script>

@endsection