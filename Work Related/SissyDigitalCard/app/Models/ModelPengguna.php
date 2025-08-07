<?php
//link dianatara kita punya page kepada data dalam database 
namespace App\Models;

use CodeIgniter\Model;

class ModelPengguna extends Model
{
    protected $table      = 'pengguna';
    protected $primaryKey = 'ID';
    protected $returnType     = 'object'; //object ->; default is array [];
    protected $allowedFields=["fullname","username","password","userlevel","userpict"];
}
