<style>
    input:read-only{
        border:none;
        boder-color: transparent;
    }
</style>
<div class="table-responsive">
    <table class="table" id="academics-table">
        <thead>
            <tr>
                <th>Academic Year</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($academics as $academic)
            <tr>
                <td>{!! $academic->academic_year !!}</td>
                <td>
                    {!! Form::open(['route' => ['academics.destroy', $academic->academic_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <!-- -----------------------------View Class Button Start -------------------------------- -->
                        <a data-toggle="modal" data-target="#view-academic-modal" data-day_id="{!! $academic->academic_id !!}"
                            data-academic_year="{!! $academic->academic_year !!}" data-created_at="{!! $academic->created_at !!}"
                            data-updated_at="{!! $academic->updated_at !!}"
                        class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <!-- -----------------------------View Class Button End-------------------------------- -->
                        <a href="{!! route('academics.edit', [$academic->academic_id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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

<div class="modal fade" id="view-academic-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><i class="fa fa-id-badge" aria-hidden="true"><b></b></i></h4>
          	</div>
          	<div class="modal-body">
                <input type="hidden" name="academic_id" id="academic_id">
                <!-- Hidden field for the ID -->
                
                <!-- Academic Year Field -->
                <div class="form-group">
                    {!! Form::label('academic_year', 'Academic Year:') !!}
                    <input type="text" name="academic_year" id="academic_year" readonly>
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
        $('#view-academic-modal').on('show.bs.modal', function(event){
            var button = $(event.relatedTarget)
            var academic_year = button.data('academic_year')
            var created_at = button.data('created_at')
            var updated_at = button.data('updated_at')
            var academic_id = button.data('academic_id')

            var modal = $(this)

            modal.find('.modal-title').text('VIEW DAY INFORMATION');
            modal.find('.modal-body #academic_year').val(academic_year);
            modal.find('.modal-body #created_at').val(created_at);
            modal.find('.modal-body #updated_at').val(updated_at);
            modal.find('.modal-body #academic_id').val(academic_id);
        });
    </script>

@endsection
