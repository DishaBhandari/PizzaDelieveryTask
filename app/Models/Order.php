<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable =[
        'order_status'
    ];


    public function itemDetail(){
        return $this->belongsTo(ItemDetail::class, 'item_details_id', 'id');
    }

    public function userDetail(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
