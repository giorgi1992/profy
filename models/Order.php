<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Order extends Model
{
    public $user_id;
    public $tasker_id;
    public $status;
    public $service_type;
    public $date;
    public $time;
    public $created_at;
    public $price;
    public $started_at;
    public $review;
    public $rating;

    public function rules()
    {
    	return [
    		[['service_type', 'date', 'time', 'review'], 'required']
    	];
    }

    public function order()
    {
    	$order = new Orders;
    	$order->user_id = Yii::$app->user->identity->id;
	    $order->tasker_id = 2;
	    $order->status = 1;
	    $order->service_type = $this->service_type;
	    $order->date = $this->date;
	    $order->time = $this->time;
	    $order->created_at = date('Y-m-d h:i:s');
	    $order->price = 0;
	    $order->started_at = date('Y-m-d h:i:s');
	    $order->review = $this->review;
	    $order->rating = 0;
	    
	    return $order->save();
    }
}
