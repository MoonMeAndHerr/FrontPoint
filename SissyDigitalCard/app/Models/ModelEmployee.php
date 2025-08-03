<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelEmployee extends Model
{
    protected $table      = 'employee';
    protected $primaryKey = 'ID';
    protected $returnType     = 'object'; //object ->; default is array [];
    protected $allowedFields =["fullname","username","password","userlevel","officecode"];
}