<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'gametitle', 'gameimage','description','price','genre_id','pegirating'
    ];

    public function genre(){
        return $this->belongsTo(Genre::class);
    }


}
