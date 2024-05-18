<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'nomEmploye',
        'prenomEmploye',
        'dateNaissance',
        'salaireEmploye',
        'emailEmploye',
        'password',
        'adresseEmploye',
        'sexe',
        'teleEmploye',
        'descriptionEmploye',
    ];
    public function projects()
    {
        return $this->belongsToMany(Project::class)->withPivot('start_date', 'end_date', 'role')->withTimestamps();

    }

    public function competences()
    {
        return $this->belongsToMany(Competence::class);
    }
}
