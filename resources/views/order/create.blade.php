@extends('app')
@section('title', '- Заказ оформлен')
@section('content')
    <div class="view full-page-intro main">
        <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="wow fadeIn row">
                    <div class="col-md-12 mt-4 white-text text-center text-md-center">
                        <h1 class="display-4 fontweight-bold">Спасибо за заказ</h1>
                        <hr class="hr-light">
                        <h3 class="fontweight-bold">Скоро с вами свяжется водитель по оставленному Вами номеру телефона ({{ $order->customer_phone }})</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection