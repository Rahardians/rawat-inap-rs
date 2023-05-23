<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPasien extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function rawat()
    {
        return $this->belongsTo(DataPasienKeluarMasuk::class,'no_rm','no_rm');
    }
}
