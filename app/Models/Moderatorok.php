<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moderatorok extends Model
{
    use HasFactory;
    public $table = 'moderatorok';
    public $timestamps = false;
     protected $fillable = [
          'id','felhasznalo_id','szektor_id'
     ];
    public function users (){
        return $this->hasMany(User::class);
        
    }
    public function szekciok (){
        return $this->hasOne(Szekciok::class);
        
    }
}
