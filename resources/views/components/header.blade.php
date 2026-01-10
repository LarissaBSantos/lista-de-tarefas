<div>
    <img src="{{ asset('img/icon.png') }}" alt="Icone lista de tarefas">
    @auth
        <form action="/logout" method="POST" class="form_logout">
            @csrf
            <button class="button_logout" type="submit">Sair</button>
        </form>
    @endauth
</div>