<?php

namespace App\Http\Controllers;

use App\Libraries\MySql;
use App\Models\SkillModel;
use App\Libraries\View;
use PDO;

class SkillController extends Controller
{
    public function index()
    {
        $skillModel = new SkillModel();
        View::render('skills/index.view', [
            'skills' => $skillModel::all(),
        ]);
    }
}
