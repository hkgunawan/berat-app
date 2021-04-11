<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weight extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $appends = ['difference'];

    public function getDifferenceAttribute()
    {
        return abs($this->attributes['min'] - $this->attributes['max']);
    }
}
