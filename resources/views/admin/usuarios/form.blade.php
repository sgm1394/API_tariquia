<div class="card-body">
    <div class="form-group">
        <label for="username">Usuario</label>
        <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}" required autocomplete="username">
    </div>
    <div class="form-group">
        <label for="rol">Rol</label>
        <input type="text" class="form-control" id="rol" name="rol" value="{{ old('rol') }}" required autocomplete="rol">
    </div>
    <div class="form-group">
        <label for="carrera">Carrera</label>
        <input type="text" class="form-control" id="carrera" name="carrera" value="{{ old('carrera') }}" required autocomplete="carrera">
    </div>
    <div class="form-group">
        <label for="materia">Materia</label>
        <input type="text" class="form-control" id="materia" name="materia" value="{{ old('materia') }}" required autocomplete="materia">
    </div>
    <div class="form-group">
        <label for="email">Correo</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
    </div>
    <div class="form-group">
        <label for="password">Clave</label>
        <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}" required>
    </div>
    {{-- <div class="form-group">
        <label for="exampleInputFile">Selecionar foto de perfil</label>
        <div class="input-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="avatar" name="avatar" value="{{ old('password') }}">
                <label class="custom-file-label" for="exampleInputFile">Escoger imagen</label>
            </div>
        </div>
    </div> --}}
    {{-- <div class="row mb-3">
        <label for="avatar" class="col-md-4 col-form-label text-md-end">{{__('Seleccionar avatar')}}</label>

        <div class="col-md-6">
            <input type="file" name="avatar" id="avatarFile">
        </div>
    </div> --}}

</div>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Datos Personales</h3>
    </div>
</div>
    <div class="card-body">
        <div class="form-group">
            <label for="ci">Cedula de Indentidad (CI)</label>
            <input type="text" class="form-control" id="ci" name="ci" placeholder="Ingrese su CI" value="{{ old('ci') }}" required>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre(s)</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese su nombre(s)" value="{{ old('name') }}" required>
        </div>
        <div class="form-group">
            <label for="apellidos">Apellido(s)</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingrese su apellido(s)" value="{{ old('apellidos') }}" required>
        </div>
        <div class="form-group">
            <label for="f_n">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="f_n" name="f_n" value="{{ old('f_n') }}" required>
        </div>
        <div class="form-group">
            <label for="genero">Genero</label>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" type="radio" id="customRadio1" name="genero" value='M' {{ old('genero') == "M" ? 'checked' : ''}}>
                <label for="customRadio1" class="custom-control-label">Masculino</label>
            </div>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" type="radio" id="customRadio2" name="genero" value='F' {{ old('genero') == "F" ? 'checked' : ''}} >
                <label for="customRadio2" class="custom-control-label">Femenino</label>
            </div>
        </div>
        {{-- <div class="form-group">
            <label for="telfono">Telefono/Celular</label>
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese su numero telefonico" value="{{ old('telefono') }}" required>
        </div> --}}




    </div>
<div class="card-footer">
    <button type="submit" class="btn btn-primary">Guardar</button>
</div>
