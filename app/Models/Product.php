<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory,SoftDeletes;

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function manufacturer(){
        return $this->belongsTo(manufacturer::class,'manufacturer_id','id');
    }


    public function subcategory(){
       return view (subcategory::class,'subcategory_id','id');

    }
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
