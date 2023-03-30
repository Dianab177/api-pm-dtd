<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruiter extends Model
{
    use HasFactory;
    public function event(){
        return $this->belongsTo(Event::class);
    }

    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function province(){
        return $this->belongsTo(province::class);
    }

    public function language()
        {
        return $this->belongsToMany(Language::class, 'recruiters_languages');
    }

    public function coder()
        {
        return $this->belongsToMany(Coder::class, 'matches');
    }
}
