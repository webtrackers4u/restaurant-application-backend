<?php
namespace App\Models;
use CodeIgniter\Model;

class ContactusModel extends Model {
    protected $table      = 'contactus';
    protected $primaryKey = 'contactid';

    protected $useSoftDeletes = false;

    protected $allowedFields = ["name","email","mobile","details","addedBy","addedDate","active","image","status"];
    protected $useTimestamps = false;
}
