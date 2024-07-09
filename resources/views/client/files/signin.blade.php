@extends('client.master')

@section('title')
    SignIn
@endsection

@section('content')

    <div class="container">

        <div class="mt-4 mb-3 text-center">
            <h1 class="fw-bold text-center">Connectez vous</h1>
        </div>

        <div class="text-center mb-5">
            <img src="images/logo.jpeg" class="rounded" alt="###">
            <h1>SPE ENERGY</h1>
        </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <form action="#" method="post" class="form-group">
                            <div class="mb-4">
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control inp" id="floatingInput" placeholder="Numero de telephone">
                                    <label for="floatingInput">Numero</label>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control inp" id="floatingInput" placeholder="Mot de passe">
                                    <label for="floatingInput">Mot de passe</label>
                                </div>
                            </div>
                            <div class="text-center mb-3">
                                <div class="d-grid gap-1">
                                    <input type="button" value="Connexion" class="btn btn-dark rounded-4">                                  </div>                    
                                  <div class="form-text text-end" id="basic-addon4">Mot de passe oublie ?</div>
                            </div>
            
                        </form>
                    </div>
                </div>
            </div>
        
    </div>
@endsection

    