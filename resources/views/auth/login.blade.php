@extends('layouts.app')

@section('content')
    
    

    <div class="wrapper">
        <h1 class="fadeIn first">Inicio de Sesión</h1>
        <br>
        <br>
        <div class="login-form fadeIn first" id="formContent">
    
            <div class="fadeIn first">
                <br>
                <h4>Datos de acceso</h4>
                <br>
            </div>
    
            <!-- Login Form -->
            
            <form method="POST" action="/login">
              @csrf
              <input type="text" id="email" class="fadeIn second" name="email" placeholder="Correo electrónico" required>
              <input type="password" id="password" class="fadeIn third" name="password" placeholder="Contraseña" required>
    
              @error('message')
                <div class="alert alert-danger" role="alert">
                  Error. Verifica los datos.
                </div>
              @enderror
    
              <br><br>
              <input type="submit" class="btn btn-success" value="Acceder">
            </form>
    </div>

@endsection