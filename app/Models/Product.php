<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProductType;
class Product extends Model
{
    protected $fillable = ['nama', 'gambar'];

    //relasi ke product types (tipe)
    public function types()
    {
        return $this->hasMany(ProductType::class, 'product_id');
    }
}
