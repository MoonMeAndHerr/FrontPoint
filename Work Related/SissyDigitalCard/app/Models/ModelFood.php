<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelFood extends Model
{
    protected $table      = 'food';
    protected $primaryKey = 'ID';
    protected $returnType     = 'object'; //object ->; default is array [];
}
?>