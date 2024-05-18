<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;


class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomClient',
        'emailClient',
        'teleClient',
        'adresseClient',
    ];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
