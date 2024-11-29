<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.meta')
    @yield('title')
    <title>Famille Yougbare</title>
    @yield('style')
    @include('partials.style')
</head>

<body class="d-flex justify-content-center align-items-center">
    <div class="container-xl px-4">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <!-- Basic login form-->
                <div class="card shadow-lg border-0 rounded-lg mt-4">
                    <div class="card-header d-flex justify-content-center">
                        <div>
                            <h3 class="fw-light"><strong>AUTHENTIFICATION</strong></h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-center mb-3">
                            <img class="img-fluid" src="{{ asset('images/istockphoto.jpg') }}" alt="logo" style="width: 100%">
                        </div>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <input class="form-control" name="login" type="text" placeholder="Entrer votre nom d'utilisateur" />
                            </div>
                            <div class="mb-3">
                                <input class="form-control" name="password" type="password" placeholder="Entrer votre mot de passe" />
                            </div>
                            <p>N'etes-vous pas encore un membre ? <a href="{{ route('register') }}" class="text-primary" style="font-style: italic;">devenez un memebre</a> </p>
                            <div class="mt-5 mb-0">
                                <button class="btn btn-primary" type="submit">Se connecter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.script')
</body>

</html>
