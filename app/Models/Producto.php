<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'quantity',
        'status',
        'seller_id',
    ];

    public function seller()
    {
        return $this->belongsTo(User::class, 'seller_id');
    }

}
