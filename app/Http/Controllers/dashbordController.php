<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Client;
use App\Models\Project;
use App\Models\Competence;
class dashbordController extends Controller
{
    public function index(){

        $employeeCount = Employee::count();
        $employeSalaire=Employee::sum('salaireEmploye');
        $countOnHold = Project::where('statusProject', 'On Hold')->count();
        $countSuccess = Project::where('statusProject', 'Success')->count();
        $ProjectCount = $countOnHold + $countSuccess;
        $clientCount = Client::count();
        $employeesByCompetence = Competence::withCount('employees')->get();
        $labels = $employeesByCompetence->pluck('nomCompetence');
        $data = $employeesByCompetence->pluck('employees_count');

        $responseData = [
            'employeeCount' => $employeeCount,
            'employeSalaire' => $employeSalaire,
            'ProjectCount' => $ProjectCount,
            'clientCount' => $clientCount,
            'labels' => $labels,
            'data' => $data,
        ];


    return view('dashboard', compact(
        'employeeCount',
        'employeSalaire',
        'ProjectCount',
        'clientCount',
        'labels',
        'data'
    ));
    }
}
