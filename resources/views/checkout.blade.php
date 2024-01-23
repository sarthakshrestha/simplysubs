@extends('components.topbar')

@section('main-body')
    <div class="checkout-container">
        <div class="top-form">
            <h1>Checkout</h1>
        </div>
        {{--    action="{{ route('checkout.store') }}"--}}
        <form method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" required>
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" name="city" id="city" required>
            </div>
            <div class="form-group">
                <label for="state">State</label>
                <input type="text" name="state" id="state" required>
            </div>
            <div class="form-group">
                <label for="zip">Zip</label>
                <input type="text" name="zip" id="zip" required>
            </div>
            <div class="form-group">
                <label for="card_number">Card Number</label>
                <input type="text" name="card_number" id="card_number" required>
            </div>
            <div class="form-group">
                <label for="expiration_date">Expiration Date</label>
                <input type="date" name="expiration_date" id="expiration_date" required>
            </div>
            <div class="form-group">
                <label for="cvv">CVV</label>
                <input type="text" name="cvv" id="cvv" required>
            </div>
            <button type="submit">Place Order</button>
        </form>
    </div>
@endsection
