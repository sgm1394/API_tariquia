@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Datos Usuario</h3>
                </div>
                <form method="post" action="{{route('admin.usuarios.store')}}">
                    @csrf
                    @include('admin.usuarios.form')
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
