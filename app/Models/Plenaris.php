<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
   
class Plenaris extends Model
{
    public $table = 'plenariseloadok';
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'id', 'nev','fokozat','intezmeny','eloadascim','email','kivonat','esemenyek_id','kezdete','vege'
    ];


    public function esemenyek(){
        return $this->belongsTo(Esemenyek::class);
        
    }
}
