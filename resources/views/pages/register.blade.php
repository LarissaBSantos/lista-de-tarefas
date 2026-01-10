@extends('layouts.default')
@section('content')
    <main class="main_form">
        <h1>Criar Conta</h1>
        <h6>Olá, bem-vindo!</h6>

        @include('components.error_form')

        <form action="/register" method="POST" class="form_auth">
            @csrf
            <div class="div_form">
                <label for="nome">Nome*:</label>
                <input type="text" id="nome" name="nome">
            </div>
            <div class="div_form">
                <label for="email">Email*:</label>
                <input type="text" id="email" name="email">
            </div>
            <div class="div_form">
                <label for="senha">Senha*:</label>
                <input type="text" id="senha" name="senha">
            </div>
            <div class="div_form">
                <label for="senha_confirmation">Repetir senha*:</label>
                <input type="text" id="senha_confirmation" name="senha_confirmation">
            </div>
            <input type="submit" value="Enviar">
        </form>
    </main>
@endsection