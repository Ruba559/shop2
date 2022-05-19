<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function ScopeComplaintByUserId($querry , $id)
    {
      return $querry->where('user_id' ,$id)->get();
    }

    public function ScopeComplaintByProductId($querry , $id)
    {
      return $querry->where('product_id' ,$id)->get();
    }

}
