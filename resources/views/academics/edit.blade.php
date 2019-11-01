@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Academic
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($academic, ['route' => ['academics.update', $academic->academic_id], 'method' => 'patch']) !!}

                    <div class="form-group col-md-6">
                        {!! Form::label('academic_year', 'Edit Academic Year:') !!}
                        {!! Form::text('academic_year', null, ['class' => 'form-control', 'placeholder' => 'Enter Years Here']) !!}
                    </div>
                </div>
                    <div class="col-md-6">
                        {!! Form::submit('Update Academic', ['class' => 'btn btn-success pull-right']) !!}
                    </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection