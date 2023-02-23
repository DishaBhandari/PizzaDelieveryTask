<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemDetail extends Model
{
    use HasFactory;

    protected $table = 'item_details';

    protected $fillable = [
        'item_id',
        'price',
        'size',
    ];

    public function itemName(){
        return $this->belongsTo(Item::class, 'item_id', 'id');
    }
}
