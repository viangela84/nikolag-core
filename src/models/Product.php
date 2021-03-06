<?php

namespace Nikolag\Core\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * Transient attributes
     * 
     * @var int
     */
    public $quantity;
    
	/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "nikolag_products";

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'name', 'price', 'variation_name', 'note', 'reference_id'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'price' => 'float'
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
        'reference_id'
    ];
}