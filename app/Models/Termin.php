<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Termin extends Model
{
    use HasFactory;

    protected $fillable = [
        'datum',
        'dvorana_id',
        'deleted',
        'pocetak',
        'kraj',
        'organizator'

    ];

    public function dvorana()
    {
        return $this->belongsTo(Dvorana::class, );
    }

    public function terminigraci()
    {
        return $this->belongsTo(TerminIgraci::class);
    }
}
