<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPasienKeluarMasuk extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function pasien()
    {
        return $this->hasOne(DataPasien::class,'no_rm','no_rm');
    }
}
