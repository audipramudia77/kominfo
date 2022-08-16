<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kwitansi extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function pejabat()
    {
        return $this->belongsTo(pejabat::class);
    }

    public function belanja()
    {
        return $this->belongsTo(belanja::class);
    }

    public function subkegiatan()
    {
        return $this->belongsTo(subkegiatan::class);
    }
}
