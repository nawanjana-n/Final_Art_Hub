<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $guarded = [];



    public function category()
    {
        return $this->belongsTo(CategoryType::class, 'category_id');
    }

    public function sellerss()
    {
        return $this->belongsTo(User::class, 'seller_id');
    }
}
