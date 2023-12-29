<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
<<<<<<< HEAD
    public static function vaildate($request)
    {
$request->vaildate([
    "total"=>"required|numeric",
    "user_id"=>"required|exists:user_id",
]);
    }
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
=======
    public static function validate($request)
    {
        $request->validate([
            "total"=>"required|numeric",
            "user_id"=>"required|exists:users,id",
        ]);
    }
    public function items()
{
    return $this->hasMany(Item::class);
}
>>>>>>> ed36b7ed32b05d86275ddbbbc4e1ee7989c3f5d2
}
