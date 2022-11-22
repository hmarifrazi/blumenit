<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'name',
        'sku',
        'model_no',
        'product_title',
       
        'short_description',
        'long_description',
        'price',
        'discount',
        'vat_status',
        'warranty',
        'product_condition',
        'max_qty',
    ];

}
 // 'manufacturer',
        // 'category',
        // 'subcategory',
