<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items';

    protected $fillable = [
        'name'
    ];

    public function itemDetail(){
        return $this->hasMany(ItemDetail::class, 'item_id', 'id');
    }
}
