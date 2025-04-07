<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductPermission extends Model
{
    use HasFactory, SoftDeletes;
    public $timestamps = false;
    protected $fillable = [
        'id',
        'product_id',
        'industry_product_id',
        'view',
        'inserted_by',
        'inserted_at',
        'modified_by',
        'modified_at',
        'deleted_by',
        'deleted_at',
    ];

    protected $dates = [
        'inserted_at',
        'modified_at',
        'deleted_at',
    ];

    // Relationships with Product models
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    // Relationships with IndustryProducts model
    public function industryProduct()
    {
        return $this->belongsTo(IndustryProducts::class, 'industry_product_id');
    }
}
