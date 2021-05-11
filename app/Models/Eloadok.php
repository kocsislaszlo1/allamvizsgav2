<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eloadok extends Model
{
    use HasFactory;
    public $table = 'eloadok';
    public $timestamps = false;
    protected $fillable = [
        'id', 'nev','fokozat','link','intezmeny','eloadascim','email','kivonat'
    ];
    public function szekciok (){

        return $this->belongsToMany(Szekciok::class,'eloadok_szekciok','eloado_id','szekcio_id')->withPivot(['kezdete','vege']);
    }
}
