@extends('layouts.index')
@section('content')
<div class="modal modal-tour position-static d-block py-5" id="modalTour">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-6 shadow">
            <div class="modal-body p-5">
                <h2 class="fw-bold m-4 text-center display-6">Login</h2>
                <form>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" placeholder="email@example.com" required>
                        <label for="email">
                            <i class="fa-solid fa-at"></i>
                            Email
                        </label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="password" placeholder="Password" required>
                        <label for="password">
                            <i class="fa-solid fa-key"></i>
                            Senha
                        </label>
                    </div>
                    <input type="submit" class="btn btn-lg btn-primary mt-5 w-100" value="Entrar">
                </form>
                <div class="p-3" style="display: flex; justify-content: space-between">
                    <a href="/redefinir-senha" class="link-info">Esqueçeu a senha?</a>
                    <a href="/criar-conta" class="link-info">Criar conta</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection