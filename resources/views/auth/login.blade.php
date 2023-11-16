@extends('layouts.app_principal')
@section('container')
<h1 class="text-center">Login</h1>
    <div class="container">
        <form action="{{route('LoginStore')}}" method="post">
            @csrf
            <div class="form-group">
                @if (session('mensaje'))
                    <div style="color:red">{{session('mensaje')}}</div>
                @endif

                <label for="username" class="form-label">Usuario</label>
                <input type="text" name="username" id="username" class="form-control" value="{{old('username')}}" placeholder="Crea un usuario">
                @error('username')
                    <div style="color:red">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Escribe tu contraseña">
                @error('password')
                    <div style="color:red">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group mt-2">
                <button class="btn btn-primary" type="submit">Iniciar sesión</button>
                <a href="{{route('Dashboard')}}" class="btn btn-danger">Cancelar</a>
            </div>
        </form>
    </div>
@endsection