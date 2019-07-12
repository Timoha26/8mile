<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function index(Order $orderModel){
        $skip = 0;
        if(isset($_GET['skip']))
        {
            $skip = $_GET['skip'];
        }
        $orders = $orderModel->getLastOrders($skip);
        return view('order.index', ['orders' => $orders]);
    }

    public function create(Order $orderModel, Request $request)
    {
        $order = $orderModel->insertOrder($request->all());
        return view('order.create', ['order'=>$order]);
    }
}
