<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

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

}
