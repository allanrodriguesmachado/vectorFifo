<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link rel="stylesheet" href="{{url(mix('backend/assets/css/reset.css'))}}"/>
    <link rel="stylesheet" href="{{url(mix('backend/assets/css/boot.css'))}}"/>
    <link rel="stylesheet" href="{{url(mix('backend/assets/css/login.css'))}}"/>
    <link rel="icon" type="image/png" href="{{url(mix('backend/assets/images/ign.svg'))}}"/>
    <title>Allan - WebDev</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>

<div class="ajax_response"></div>

<div class="dash_login">
    <div class="dash_login_left">
        <article class="dash_login_left_box">
            <header class="dash_login_box_headline">
                <div class="dash_login_box_headline_logo icon-notext">
                    <img src="{{url(asset('backend/assets/images/icon.svg'))}}" alt="">
                </div>
                <h1>Login</h1>
            </header>

            <form name="login" action="{{route('admin.login.do')}}" method="POST" autocomplete="off">
                <label>
                    <span class="field icon-envelope">E-mail:</span>
                    <input type="email" name="email" placeholder="Informe seu e-mail"/>
                </label>

                <label>
                    <span class="field icon-unlock-alt">Senha:</span>
                    <input type="password" name="password" placeholder="Informe sua senha"/>
                </label>

                <button class="gradient gradient-green radius icon-sign-in">Entrar</button>
            </form>

            <footer>
                {{--                <p>Desenvolvido por <a href="#"><b>Allan</b>.</a>R</p>--}}
                <p class="text-bold">Desenvolvido por <a href="#">Allan<b class="text-green">.</b></a>R</p>
                <p class="text-bold">&copy; <?= date("Y"); ?> - Todos os Direitos Reservados</p>
            </footer>
        </article>
    </div>

    <div class="dash_login_right"></div>
</div>

<script src="{{url(mix('backend/assets/js/jquery.js'))}}"></script>
<script src="{{url(mix('backend/assets/js/login.js'))}}"></script>

</body>
</html>
