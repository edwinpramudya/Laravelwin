<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class ProductType extends Model
{
    //
    protected $fillable = ['product_id', 'nama', 'gambar','pdf'];

    //relasi balik
    public function product()
    {
        return $this->belongsTo(product::class, 'product_id');
    }
}
