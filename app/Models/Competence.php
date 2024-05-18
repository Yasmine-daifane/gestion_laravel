<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomCompetence',
        'descriptionCompetence',
    ];

    public function employees()
    {
        return $this->belongsToMany(Employee::class);
    }
}
