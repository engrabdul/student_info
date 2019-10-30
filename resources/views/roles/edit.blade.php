@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Update User Role
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($role, ['route' => ['roles.update', $role->role_id], 'method' => 'patch']) !!}

                   <!-- Fields -->
                    <div class="form-group col-md-6">
                        {!! Form::label('name', 'Name:') !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                    <div>
                        {!! Form::submit('Update Role', ['class' => 'btn btn-success']) !!}
                    </div>

                        {{-- <!-- @include('roles.fields') Since I am using modal and both insert and edit are using the same include field -->--}}

                   {!! Form::close() !!}
               
           </div>
       </div>
   </div>
@endsection