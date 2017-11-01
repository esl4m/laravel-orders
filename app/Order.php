<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $with = ['items'] ;  // eager loading ..
    protected $table = 'orders';
    protected $fillable = [
        'email',
        'total_amount_net',
        'shipping_costs',
        'payment_method',
        'items',
    ];

    /**
     * {@inheritdoc}
     */
    protected $casts = [
        'email' => 'string',
        'total_amount_net' => 'string',
        'shipping_costs' => 'string',
        'payment_method' => 'string',
    ];

    /**
     * The items sold many times.
     */
    public function items()
    {
        return $this->belongsToMany('App\Item');
    }
}
