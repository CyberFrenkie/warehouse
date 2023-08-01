<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class In extends Model
{
    protected $table = 'in';

    public function out()
    {
        return $this->hasOne(Out::class, 'order_number', 'order_number');
    }

    public function stock()
    {
        return $this->hasOne(Stock::class, 'order_number', 'order_number');
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
