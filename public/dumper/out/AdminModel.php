<?php
namespace App\Models;
use CodeIgniter\Model;

class AdminModel extends Model {
    protected $table      = 'admin';
    protected $primaryKey = 'adminId';

    protected $useSoftDeletes = false;

    protected $allowedFields = ["name","adminType","username","password","address","email","mobileNo","addedDate","active","addedBy","modifyBy","modifyDate","access"];
    protected $useTimestamps = false;
}
