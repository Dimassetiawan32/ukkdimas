<?php

namespace App;

use Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Transaksi extends Model
{
    use AutoNumberTrait;

    protected $table = 'transaksis';
    protected $guarded = [];

    public function getAutoNumberOptions()
    {
        return [
            'no_nota' => [
                'format' => 'C0?', // autonumber format. '?' will be replaced with the generated number.
                'length' => 2 // The number of digits in an autonumber
            ]
        ];
    }

    public function biaya()
    {
        return $this->belongsTo(Biaya::class);
    }

   
}
