<?php

namespace App\Http\Controllers;

use App\Libraries\MySql;
use App\Models\HobbyModel;
use App\Libraries\View;
use PDO;

class HobbyController extends Controller
{
    public function index()
    {
        $hobbyModel = new HobbyModel();
        View::render('hobbies/index.view', [
            'hobbies' => $hobbyModel::all(),
        ]);
    }
}
