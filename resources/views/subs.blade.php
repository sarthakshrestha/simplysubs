@extends('components.topbar')

@section('main-body')
    <div class="sub-main-container">
        <h1>Subscription Items <br>
            offered by
            SimplySubs</h1>
    </div>

    <div class="sub-container">
        @foreach($subscriptions as $subscription)
            <div class="product-card-horizontal">
                <div class="product-details">
                    <div class="image-container">
                        @if($subscription->image)
                            {{-- Use asset with storage path for images --}}
                            <img src="{{ asset('storage/' . $subscription->image) }}" alt="{{ $subscription->title }}" class="product-image">
                        @else
                            <img src="{{ asset('public/images/sub-images/image-error.jpg') }}" alt="Error Image" class="product-image"/>
                        @endif
                    </div>
                    <div class="product-title">{{ $subscription->title }}</div>
                    <div class="product-description">{{ $subscription->description }}</div>
                    <div class="product-price">{{$subscription->price}}</div>
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
        @endforeach
    </div>


    <div class="sub-container">

        <div class="product-card-horizontal">
            <div class="product-details">
                <div class="image-container">
                    <img src="{{url('/images/sub-images/spotify-card.png')}}" alt="spotify card" class="product-image"/>
                </div>
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

        <div class="product-card-horizontal">

            <div class="product-details">
                <div class="image-container">
                    <img src="{{url('/images/sub-images/spotify-card.png')}}" alt="spotify card" class="product-image"/>
                </div>
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
    </div>

@endsection

@section('footer')
    <footer>
        <div class="row">
            <div class="column">
                <p>Admin Login</p>
                <div class="sub-row">
                    <p>Row 1 under Admin Login</p>
                </div>
                <div class="sub-row">
                    <p>Row 2 under Admin Login</p>
                </div>
            </div>
            <div class="column">
                <p>Contact Us</p>
                <div class="sub-row">
                    <p>Row 1 under FAQ</p>
                </div>
                <div class="sub-row">
                    <p>Row 2 under FAQ</p>
                </div>
            </div>
            <div class="column">
                <p>FAQ</p>
                <div class="sub-row">
                    <p>Row 1 under FAQ</p>
                </div>
                <div class="sub-row">
                    <p>Row 2 under FAQ</p>
                </div>
            </div>
        </div>
        <div class="lower-row">
            <p>Powered by Laravel - SimpleSubs</p>
        </div>
    </footer>
@endsection
