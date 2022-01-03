<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $guarded =[];

    protected $table = 'pembayarans';

        public function pesanans()
    {
        return $this->hasMany('App\Pembayaran');
    }
}
