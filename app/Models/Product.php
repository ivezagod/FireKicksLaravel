<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function orders()
    {
        return $this->belongsToMany(Order::class,'carts');
    }

    public function scopeFilter($query)
    {

        $query->when(request('search'),function ($query){
            $query->where('title','like','%'. request('search') . '%')->orWhere('brand','like','%'. request('search') . '%');
        });
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function numbers(){

        return $this->belongsToMany(Number::class);
    }


}
