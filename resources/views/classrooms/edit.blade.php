@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            <i class="fa fa-home"> Class Room</i>
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($classroom, ['route' => ['classrooms.update', $classroom->classroom_id], 'method' => 'patch']) !!}

                        <!-- Classroom Name Field -->
                        <div class="form-group col-md-6">
                            {!! Form::label('classroom_name', 'Classroom Name:') !!}
                            {!! Form::text('classroom_name', null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Classroom Code Field -->
                        <div class="form-group col-md-6">
                            {!! Form::label('classroom_code', 'Classroom Code:') !!}
                            {!! Form::text('classroom_code', null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Classroom Description Field -->
                        <div class="form-group col-md-6">
                            {!! Form::label('classroom_description', 'Classroom Description:') !!}
                            {!! Form::text('classroom_description', null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Classroom Status Field -->
                        <div class="form-group col-md-6">
                            {!! Form::label('classroom_status', 'Classroom Status:') !!}
                            <label class="checkbox-inline">
                                {!! Form::hidden('classroom_status', 0) !!}
                                {!! Form::checkbox('classroom_status', '1', null) !!}
                            </label>
                        </div>
                </div>
                        <!-- Submit Field -->
                        <div class="form-group">
                            {!! Form::submit('Update Classroom', ['class' => 'btn btn-primary pull-right']) !!}
                        </div>

                   {!! Form::close() !!}
               
           </div>
       </div>
   </div>
@endsection