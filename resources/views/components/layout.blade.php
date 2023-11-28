<!-- topbar.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&family=Urbanist:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&family=Lexend+Deca&family=Urbanist:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    <title>SimplySubs</title>
</head>
<body>
<div class="navigation">
    <nav id="main-navbar">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="/subs">Subscriptions</a></li>
            <li><a href="/about">About SimplySubs</a></li>
            <li class="signin-nav"><a href="/sign-in">Sign in</a></li>
            <li class="cart-nav"><a href="/cart">Cart</a></li>
            <li class="register-nav"><a href="/register">Register</a></li>
        </ul>
    </nav>
</div>
@yield('main-body')

</body>
</html>
