<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = "produk";
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'berat' => 'decimal:2'
    ];
    function seller(){
        return $this->belongsTo(User::class, 'id_user' );
    }
    function getHargaStringAttribute(){
        return "Rp.".number_format($this->attributes['harga']);
    }
   
}