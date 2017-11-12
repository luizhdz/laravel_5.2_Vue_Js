<?php

namespace App\Model\Product;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';
    protected $primarykey = 'id';

    protected $fillable = ['id','user_id','name','description','price','status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
