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
        'szekcionev', 'idopont', 'link', 'online', 'esemenyek_id'
    ];
    public function esemenyek()
    {
        return $this->belongsTo(Esemenyek::class);
    }
    public function eloadok()
    {

        return $this->belongsToMany(Eloadok::class, 'eloadok_szekciok', 'szekcio_id', 'eloado_id')->withPivot(['kezdete', 'vege']);
    }
    public function moderatorok()
    {
        return $this->hasMany(Moderatorok::class);
    }
}
