<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;
    protected $table = "kamar";
    protected $guarded = ["id"];

    public function scopeFilter($query, array $filter){

        $query->when($filter['search'] ?? false, function ($query, $search){
            return $query->where('nomor', 'like', '%' . $search . '%');
        });
    }

    public function Transaksi(){
        return $this->hasMany(Transaksi::class);
    }
    public function Tipe(){
        return $this->belongsTo(Tipe::class);
    }
}
