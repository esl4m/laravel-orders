<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public $table= 'items';
    protected $fillable = [
        'name',
        'qnt',
        'value',
        'category',
        'subcategory',
        'tags',
        'collection_id',
    ];

    /**
     * {@inheritdoc}
     */
    protected $casts = [
        'name' => 'string',
        'qnt' => 'integer',
        'value' => 'integer',
        'category' => 'string',
        'subcategory' => 'string',
        'tags' => 'array',
        'collection_id' => 'integer',
    ];
}
