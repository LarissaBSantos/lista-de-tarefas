<!DOCTYPE html>
<html>
    <head>
        @include('components.head')
    </head>
    <body>
        <header>
            <nav>
                <a href="/login">Login</a>
                <a href="/register">Criar Conta</a>
            </nav>
        </header>
        <main>
            <p>Seja bem vindo ao melhor gerenciador de tarefas de todos os tempos!</p>
        </main>
        <footer>
            @include('components.footer')
        </footer>
    </body>
</html>