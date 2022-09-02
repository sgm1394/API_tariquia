@extends('layouts.app')
@section('content')
<div>
    <div class="card-body">

            <a class="btn btn-secondary btn-sm float-right" href="{{route('admin.usuarios.create')}}">Crear Usuario</a>
        <div class="tab-content" id="nav-tabContent">
            {{-- ACTIVOS --}}
            {{-- <div class="tab-pane fade show active" id="nav-user-activos" role="tabpanel" aria-labelledby="nav-user-activos-tab" style="padding-top: 15px;"> --}}
                <table id="Altas" class="table table-striped table-bordered" style="width:100%">

                    <thead>
                        <tr>
                            <th>CI</th>
                            <th>NOMBRE</th>
                            <th>ROL</th>
                            <th>ESTADO</th>
                            <th>ACCIONES</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{$user->username}}</td>
                            <td>{{$user->name}} {{$user->lastname}}</td>
                            <td>{{$user->id_rol}}</td>
                            <td width='5%' align="center"> <a class="btn-success btn-xs">Activo</a></td>
                            <td width='12%' align="left">
                                    <a class="btn btn-primary btn-sm" href="{{route('admin.usuarios.edit', $user)}}">
                                        <i class="fas fa-user-edit" title="Editar"></i>
                                    </a>

                                    <a class="btn btn-info btn-sm" href="{{route('admin.usuarios.edit', $user)}}">
                                        <i class="fas fa-user-cog" title="Asignar rol"></i>
                                    </a>

                                <a style="POSITION: absolute">
                                <form action="{{route('admin.usuarios.destroy', $user)}}" method="POST" class="destroy" >
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm" title="Dar de baja" >
                                        <i class="fas fa-user-times"></i>
                                    </button>
                                </form>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
@endsection
