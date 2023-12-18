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
                <label for="address">Address</label>
                <input type="text" name="address" id="address" required>
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" name="city" id="city" required>
            </div>

            <button type="submit" class="order-btn">Place Order</button>
        </form>
    </div>
@endsection
