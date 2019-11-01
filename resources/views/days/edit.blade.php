@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
        <i class="fa fa-sun-o" aria-hidden="true">Day</i>
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($day, ['route' => ['days.update', $day->day_id], 'method' => 'patch']) !!}

                    <div class="form-group col-md-6">
                        {!! Form::label('name', 'Edit Day Name:') !!}
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter Day Here']) !!}
                    </div>
                </div>
                    <div class="col-md-6">
                        {!! Form::submit('Update Day', ['class' => 'btn btn-success pull-right']) !!}
                    </div>

                   {!! Form::close() !!}

           </div>
       </div>
   </div>
@endsection