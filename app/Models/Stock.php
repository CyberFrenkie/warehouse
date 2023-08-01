<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = 'stock';

    public function in()
    {
        return $this->belongsTo(In::class, 'order_number', 'order_number');
    }

    public function out()
    {
        return $this->belongsTo(Out::class, 'order_number', 'order_number');
    }

    protected $fillable = [
        'order_number',
        'name_SH',
        'name_EN',
        'manufacturer',
        'model',
        'location',
        'sap_number',
        'use',
        'unit',
        'stock_count',
    ];

}
