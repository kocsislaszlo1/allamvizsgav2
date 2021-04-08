<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Szekciok extends Model
{
    use HasFactory;
    public $table = 'szekciok';

    public $timestamps = false;

    protected $fillable = [
     'szekcionev','idopont','link','online','esemenyek_id'
    ];
    public function esemenyek (){
        return $this->belongsTo(Esemenyek::class);
        
    }
    public function eloado_szekciok (){

        return $this->belongsToMany(Eloadok::class);
    }
}
