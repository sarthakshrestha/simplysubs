@extends('components.topbar')
@section('banner')
    <div class="header">
        <h1>SimplySubs<img class="main-logo" src="images/Logo.png" alt="logo"></h1>
        <h2>Your gateway for subscriptions simplified.</h2>
    </div>
    <div class="subscription-container">
        <img src="images/netflix-icon.png" alt="Netflix Icon">
        <p>Netflix</p>
    </div>

    <div class="subscription-container">
        <img src="images/hulu-icon.png" alt="Hulu Icon">
        <p>Hulu</p>
    </div>

    <div class="subscription-container">
        <img src="images/apple-music-icon.png" alt="Apple Music Icon">
        <p>Apple Music</p>
    </div>
@endsection
