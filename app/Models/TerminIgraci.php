<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TerminIgraci extends Model
{
    use HasFactory;

    protected $fillable = [
        'igrac',
        'termin',
    ];

    public function igraci()
    {
        return $this->belongsTo(User::class, 'igrac');
    }

    public function termin()
    {
        return $this->belongsTo(Termin::class, 'termin');
    }
}
