<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Out extends Model
{
    protected $table = 'out';

    public function in()
    {
        return $this->belongsTo(In::class, 'order_number', 'order_number');
    }

    public function stock()
    {
        return $this->belongsTo(Stock::class, 'order_number', 'order_number');
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
