@extends('app')
@section('title', '- Заказы')
@section('content')
    <div class="view full-page-intro main h-50">
        <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="wow fadeIn row">
                    <div class="col-md-12 mt-4 white-text text-center text-md-center">
                        <h1 class="display-4 fontweight-bold d-none d-lg-block">Список заказов</h1>
                        <h3 class="fontweight-bold d-lg-none">Список заказов</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        @foreach($orders['items'] as $order)
            <div class="card mb-2">
                <div class="card-body">
                    <div class="col-sm-12 col-lg-4 p-0">
                        <div class="float-left col-sm-6 col-lg-12 text-sm-left text-lg-right text-dark">
                            {{ $order->customer_name }} <span class="text-muted">{{ $order->customer_phone }}</span>
                        </div>
                        <div class="float-sm-right float-lg-left col-sm-6 col-lg-12 text-right text-muted">
                            <small>{{ \Carbon\Carbon::parse($order->created_at)->format('d.m.Y H:i:s') }}</small>
                        </div>
                    </div>
                    <div class="float-sm-left float-lg-none col-sm-12 col-lg-8 text-body">
                        {{ $order->info }}
                    </div>
                </div>
            </div>
        @endforeach
        <div class="btn-toolbar float-right mb-3" role="toolbar" aria-label="Страницы">
            <div class="btn-group" role="group" aria-label="First group">
                @if(Request::input('skip') - $orders['take'] >= 0)
                    <a href="/orders?skip={{Request::input('skip') - $orders['take']}}" class="btn btn-md"> << </a>
                @endif
                @foreach($orders['pages'] as $key=>$value)
                    <a href="/orders?skip={{$key}}"
                       class="btn btn-md d-none d-lg-block{{ Request::input('skip') == $key ? ' btn-primary' : '' }}">{{$value}}</a>
                @endforeach
                @if(Request::input('skip') + $orders['take'] <= $orders['count'])
                    <a href="/orders?skip={{Request::input('skip') + $orders['take']}}" class="btn btn-md"> >> </a>
                @endif
            </div>
        </div>
    </div>
@endsection