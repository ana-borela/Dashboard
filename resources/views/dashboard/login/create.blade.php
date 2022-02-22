@extends('layouts.index')
@section('content')
<div class="modal modal-tour position-static d-block py-5" id="modalTour">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-6 shadow">
            <div class="modal-body p-5">
                <h2 class="fw-bold m-4 text-center display-6">Criar conta</h2>
                <form>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name" placeholder="Nome" required>
                        <label for="name">
                            <i class="fa-solid fa-user"></i>
                            Nome
                        </label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" placeholder="email@example.com" required>
                        <label for="email">
                            <i class="fa-solid fa-at"></i>
                            Email
                        </label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" placeholder="Senha" required>
                        <label for="password">
                            <i class="fa-solid fa-key"></i>
                            Senha
                        </label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="confirm-password" placeholder="Confirme a senha" required>
                        <label for="confirm-password">
                            <i class="fa-solid fa-unlock"></i>
                            Confirme a senha
                        </label>
                    </div>
                    <div class="px-2">
                        <input type="checkbox" name="terms" id="terms" required>
                        <label for="terms">Eu li e concordo com as 
                            <a href="#" class="link-info">
                                Políticas de Privacidade
                            </a>
                        </label>
                    </div>
                    <input type="submit" class="btn btn-lg btn-primary mt-5 w-100" value="Criar conta">
                </form>   
            </div>
        </div>
    </div>
</div>
@endsection