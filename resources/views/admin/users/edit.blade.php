@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Asignar un Rol</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success"><strong>{{session('info')}}</strong></div>
    @endif

    <div class="card">
        <div class="card-body">
            <p class="h5">Nombre:</p>
            {!! Form::model($user,['route'=>['admin.users.update',$user], 'method'=>'put']) !!}
            <div class="row mb-1">
                <div class="col-md-3 col-sm-12">
                    {!! Form::text('text',$user->name,['class'=>'form-control form-control-sm']) !!}
                </div>
                <div class="col-md-3 col-sm-12">
                    {!! Form::text('email',$user->email,['class'=>'form-control form-control-sm']) !!}
                </div>
            </div>
                
                
            <h2 class="h5">Listado de Roles</h2>   
            @foreach ($roles as $role)
                <div>
                    <label>
                        {!! Form::checkbox('roles[]',$role->id,null,['class'=>'mr-1']) !!}
                        {{$role->name}}
                    </label>
                </div>
            @endforeach
            {!! Form::submit('Asignar Rol',['class'=>'btn btn-sm btn-primary mt-2']) !!}
            {!! Form::close() !!}
            <a href="{{route('admin.users.index')}}" class="btn btn-sm btn-danger mt-2 float-left">Cancelar</a>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @livewireStyles
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    @livewireScripts
@stop