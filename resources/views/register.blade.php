<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Estudiante</title>
    @vite(['resources/css/app.css'])
</head>
<body>

<div class="register-container">
    <h2>Registro de Estudiante</h2>

    @if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!-- video de registro exitoso -->
@if (session('success'))
    <div class="success-message">
        <video class="success-video" autoplay loop  playsinline>
            <source src="/img/exito.mp4.mp4" type="video/mp4">
            Tu navegador no soporta videos.
        </video>
        <p>{{ session('success') }}</p>
    </div>
@endif
    <form action="/register" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="email">Correo:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirmar Contraseña:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>

        <div class="form-group">
            <label for="career_id">Carrera:</label>
            <select id="career_id" name="career_id" >
                <option value="1">Ingeniería de Software</option>
                <option value="2">Ingeniería de Sistemas</option>
                <option value="3">Redes y Comunicaciones</option>
                <option value="4">Ciencias de la Computación</option>
                <option value="5">Contaduría Pública</option>
                <option value="6">Inteligencia Artificial</option>
            </select>
        </div>

        <div class="form-group checkbox-group">
            <input type="checkbox" id="terms_accepted" name="terms_accepted" required>
            <label for="terms_accepted">Acepto los términos y condiciones</label>
        </div>

        <button type="submit" class="btn-submit">Registrar</button>
        
    </form>
</div>

</body>
</html>