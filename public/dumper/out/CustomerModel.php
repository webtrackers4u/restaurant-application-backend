<?php
namespace App\Models;
use CodeIgniter\Model;

class CustomerModel extends Model {
    protected $table      = 'customer';
    protected $primaryKey = 'customer_id';

    protected $useSoftDeletes = false;

    protected $allowedFields = ["customer_type","full_name","email","mobile_no","occupation","active_status","addedBy","addedDate"];
    protected $useTimestamps = false;
}
