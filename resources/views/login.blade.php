<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Section WEB HEPL - Login</title>
    @vite(['resources/css/app.scss'])
</head>
<body>
    <x-partials.header></x-partials.header>
    <h2 class="login__title">Se connecter</h2>
    <form action="/login" method="post" class="login__form">
        @csrf
        <div class="input__container">
            <label for="email" class="label">Email</label>
            @error('email')
            <div class="error-message">{{ $message }}</div>
            @enderror
            <input type="email" id="email" name="email" class="input email" placeholder="Votre adresse email">
        </div>
        <div class="input__container">
            <label for="password" class="label">Mot de passe</label>
            @error('password')
            <div class="error-message">{{ $message }}</div>
            @enderror
            <input type="password" id="password" name="password" class="input password" placeholder="Votre Mot de passe">
        </div>
        <button type="submit">Se connecter</button>
    </form>
    <x-partials.footer></x-partials.footer>
</body>
</html>
