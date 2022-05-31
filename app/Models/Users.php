<?php
namespace App\Models;
use CodeIgniter\Model;

class Users extends Model {
    protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $useSoftDeletes = true;

    protected $allowedFields = [   'name', 'username', 'password'];
    protected $useTimestamps = true;
}
