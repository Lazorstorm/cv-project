<?php

namespace App\Http\Controllers;

use App\Libraries\MySql;
use App\Models\EducationModel;
use App\Libraries\View;
use PDO;

class EducationController extends Controller
{
    public function index()
    {
        $educationModel = new EducationModel();
        View::render('educations/index.view', [
            'educations' => $educationModel::all(),
        ]);
    }
}
