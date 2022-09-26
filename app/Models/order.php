<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    protected $guarded = [ 'id'];

    public function user() {
        return $this->belongsTo(user::class);
    }

    public function product() {
        return $this->belongsTo(product::class);
    }

    public function transaksi() {
        return $this->hasOne(transaksi::class, 'order_id', 'id');
    }
}
