<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    use HasFactory;
    protected $table = "tamu";
    protected $guarded = ["id"];

    public function scopeFilter($query, array $filters){

        $query->when($filters['search'] ?? false, function ($query, $search){
            return $query->where('transaksi_id', 'like', '%'. $search . '%');
        });

    }

    public function Transaksi(){
        return $this->belongsTo(Transaksi::class);
    }
}
