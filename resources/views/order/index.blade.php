@extends('app')
@section('title', '- Заказы')
@section('content')
    <div class="view full-page-intro main">
        <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="wow fadeIn row">
                    <div class="col-md-12 mt-4 white-text text-center text-md-center">
                        <h1 class="display-4 fontweight-bold">Список заказов</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach($orders as $order)
        <article>
            <h4>{{ \Carbon\Carbon::parse($order->created_at)->format('d.m.Y H:i:s') }}: {{ $order->customer_name }} ({{ $order->customer_phone }})</h4>
            <p>{{ $order->info }}</p>
        </article>
    @endforeach
@endsection