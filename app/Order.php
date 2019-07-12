<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = ['customer_name', 'customer_phone', 'info'];

    public function getLastOrders($skip = 0)
    {
        $orders = Order::latest('created_at')->skip($skip)->take(10)->get();
        return $orders;
    }

    public function insertOrder($data)
    {

        try {
            $newOrder = new Order();
            $newOrder->fill(array('customer_name' => $data['customer_name'], 'customer_phone' => $data['customer_phone'], 'info' => $data['info'] ));
            $newOrder->save();
        } catch (\Exception $ex) {
            dump($ex);
        }

        return $newOrder;
    }
}
