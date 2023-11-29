@extends('components.topbar')

@section('main-body')
    <div class="sub-main-container">
        <h1>Subscription Items <br>
            offered by
            SimplySubs</h1>
    </div>


    <div class="product-card">
        <div class="product-image"></div>
        <div class="product-details">
            <img
                src="{{url('/images/sub-images/spotify-card.png')}}"  alt="spotify card" class="product-image"/>
            <div class="product-title">Spotify - Music Subscription</div>
            <div class="product-description">Listen to music effortlessly</div>
            <button class="buy-button">Buy Now</button>
            <label>
                <select class="subscription-select">
                    <option value="1-month">1 Month Subscription</option>
                    <option value="3-months">3 Months Subscription</option>
                    <option value="6-months">6 Months Subscription</option>
                </select>
            </label>
        </div>
    </div>

@endsection
