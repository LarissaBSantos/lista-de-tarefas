@extends('layouts.default')

@section('content')
    <main class="main_form">
        <h1>Login</h1>
        <h6>Oi, bem-vindo de volta!</h6>

        @include('components.error_form')

        <form action="/login" method="POST" class="form_auth">
            @csrf
            <div class="div_form">
                <label for="email">Email*:</label>
                <input type="text" id="email" name="email">
            </div>
            <div class="div_form">
                <label for="senha">Senha*:</label>
                <input type="text" id="senha" name="senha">
            </div>
            <input type="submit" value="Enviar">
        </form>
    </main>
@endsection