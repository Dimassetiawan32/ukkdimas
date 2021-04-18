<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biaya extends Model
{
    protected $table = 'biayas';
    protected $guarded = [];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
