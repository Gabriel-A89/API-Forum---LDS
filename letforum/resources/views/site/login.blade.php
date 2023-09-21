@extends('common.mdb-fullpage')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mx-auto">

                <div class="row">
                    <div class="col-6 mx-auto">
                        <h3 class="text-center">Guarulhos, {{ $dia.'/'.$mes.'/'.$ano }}</h3>
                    </div>
                </div>

                <!-- Default form login -->
                <form class="text-center border border-light p-5" action="#!">

                    <p class="h4 mb-4">Entrar</p>

                    <!-- Email -->
                    <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">

                    <!-- Password -->
                    <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Senha">

                    <div class="d-flex justify-content-around">
                        <div>
                            <!-- Remember me -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                                <label class="custom-control-label" for="defaultLoginFormRemember">Lembre-se </label>
                            </div>
                        </div>
                        <div>
                            <!-- Forgot password -->
                            <a href="">Esqueceu a senha?</a>
                        </div>
                    </div>

                    <!-- Sign in button -->
                    <button class="btn btn-info btn-block my-4" type="submit">Inscreva-se</button>

                    <!-- Register -->
                    <p>Não é membro?
                        <a href="">Registre-se</a>
                    </p>

                    <!-- Social login -->
                    <p>Ou entre com:</p>

                    <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
                    <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
                    <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
                    <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

                </form>
                <!-- Default form login -->

            </div>
        </div>
    </div>
@endsection