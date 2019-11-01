<style>
    input:read-only{
        border:none;
        boder-color: transparent;
    }
</style>
<div class="table-responsive">
    <table class="table" id="days-table">
        <thead>
            <tr>
                <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($days as $day)
            <tr>
                <td>{!! $day->name !!}</td>
                <td>
                    {!! Form::open(['route' => ['days.destroy', $day->day_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <!-- -----------------------------View Class Button Start -------------------------------- -->
                        <a data-toggle="modal" data-target="#view-day-modal" data-day_id="{!! $day->day_id !!}"
                            data-name="{!! $day->name !!}" data-created_at="{!! $day->created_at !!}"
                            data-updated_at="{!! $day->updated_at !!}"
                        class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <!-- -----------------------------View Class Button End-------------------------------- -->
                        <a href="{!! route('days.edit', [$day->day_id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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

<div class="modal fade" id="view-day-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><i class="fa fa-id-badge" aria-hidden="true"><b></b></i></h4>
          	</div>
          	<div class="modal-body">
                <input type="hidden" name="day_id" id="day_id">
                <!-- Hidden field for the ID -->
                
                <!-- Batch Field -->
                <div class="form-group">
                    {!! Form::label('class_name', 'Class Name:') !!}
                    <input type="text" name="name" id="name" readonly>
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
        // {{---------Day View-----------}}
        $('#view-day-modal').on('show.bs.modal', function(event){
            var button = $(event.relatedTarget)
            var name = button.data('name')
            var created_at = button.data('created_at')
            var updated_at = button.data('updated_at')
            var day_id = button.data('day_id')

            var modal = $(this)

            modal.find('.modal-title').text('VIEW DAY INFORMATION');
            modal.find('.modal-body #name').val(name);
            modal.find('.modal-body #created_at').val(created_at);
            modal.find('.modal-body #updated_at').val(updated_at);
            modal.find('.modal-body #day_id').val(day_id);
        });
    </script>

@endsection