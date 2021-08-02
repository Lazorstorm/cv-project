<?php

namespace App\Models;

use App\Libraries\MySql;
use PDO;

class JobModel extends Model
{
    // Name of the table
    protected $model = "jobs";

    // Max number of records when fetching all records from table
    protected $limit;

    // Non writable fields
    protected $guarded = [
        'id'
    ];

    public function __construct()
    {
        parent::__construct($this->model);
    }

    public static function userJobs($user_id)
    {
        if ((int)$user_id === 0) {
            return false;
        }

        $sql = "SELECT * FROM " . self::$model . " WHERE user_id=" . $user_id . " AND deleted IS NULL";

        return MySql::query($sql)->fetchAll(PDO::FETCH_CLASS);
    }
}
