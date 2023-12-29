<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static function validate($request)
    {
        $request->validate([
            "name" => "required|max:255",
            "description" => "required",
            "price" => "required|numeric|gt:0",
            'image' => 'image',
        ]);
    }
    public static function sumPricesByQuantities($products, $productsInSession)
    {
        $total = 0;
        foreach ($products as $product){
            $total = $total + ($product->getPrice() * $productsInSession[$product->getId()]);
        }
        return $total;
    }
<<<<<<< HEAD
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
=======
    //
    public function items()
{
    return $this->hasMany(Item::class);
}
//

>>>>>>> ed36b7ed32b05d86275ddbbbc4e1ee7989c3f5d2
}
