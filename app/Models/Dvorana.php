<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dvorana extends Model
{
    use HasFactory;

    protected $fillable = [
        'tip',
        'naziv',
        'max_igraci',
        'deleted',
        'tvrtka_id'
    ];

    public function tvrtka()
    {
        return $this->belongsTo(User::class);
    }

    public function termin()
    {
        return $this->hasMany(Termin::class, 'dvorana_id');
    }
}
