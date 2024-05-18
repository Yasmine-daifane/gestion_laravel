<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['nomProjet',
    'dateDebut',
    'dateFin',
    'MontantProjet',
    'client_id',
    'statusProject',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function employees()
    {
        return $this->belongsToMany(Employee::class)->withPivot('start_date', 'end_date', 'role')->withTimestamps();
    }

}
