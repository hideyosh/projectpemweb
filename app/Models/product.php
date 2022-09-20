<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $guarded = [ 'id' ];

    // protected $fillable = [
    //    'name',
    //    'desc',
    //    'harga',
    // ];

    public function order()
    {
        return $this->hasMany(order::class, 'product_id', 'id');
    }
}
