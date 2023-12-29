<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    public static function validate($request)
    {
        $request->validate([
<<<<<<< HEAD
"price"=>"required|numeric|gt:0",
"quantity"=>"required|numeric|gt:0",
"product_id"=>"required|exists|ptoducts|id",
"order_id"=>"required|exists|orders|id",
        ]);
    }
    public function items()
    {
        return $this->hasMany(Item::class);
    }
}

=======
            "price"=>"required|numeric|gt:0",
            "quantity"=>"required|numeric|gt:0",
            "product_id"=>"required|exists:products,id",
            "order_id"=>"required|exists:orders,id",
        ]);
    }
}
>>>>>>> ed36b7ed32b05d86275ddbbbc4e1ee7989c3f5d2
