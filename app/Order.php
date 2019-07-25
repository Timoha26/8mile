<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = ['customer_name', 'customer_phone', 'info'];

    public function getLastOrders($skip = 0)
    {
        $take = env('ORDERS_PAGES_TAKE', 10);
        $query = Order::query();
        $count = $query->count();
        $items = $query->orderBy('created_at', 'desc')->skip($skip)->take($take)->get();

        return [ 'items' => $items, 'count'=>$count, 'pages'=>$this->createPages($count, $take), 'take'=>$take ];
    }

    public function insertOrder($data)
    {
        $customer_name = !empty($data['customer_name']) ? $data['customer_name'] : null;
        $customer_phone = !empty($data['customer_phone']) ? $data['customer_phone'] : null;
        $info = !empty($data['info']) ? $data['info'] : null;

        try {
            $newOrder = new Order();
            $newOrder->fill(array('customer_name' => $customer_name, 'customer_phone' => $customer_phone, 'info' => $info ));
            $newOrder->save();

            $notify = new OrderNotification($data);
            $notify->toTelegram();
        } catch (\Exception $ex) {
            dump($ex);
        }

        return $newOrder;
    }

    private function createPages($count, $take){
        $pages = [ 0 => 1 ];
        for ($i = 1; $i <= $count; $i++){
            $last_key = array_key_last($pages);
            $last_val = $pages[$last_key];
            if($i == $last_key + $take){
                $pages[$i] = ++$last_val;
            }
        }
        return $pages;
    }
}
