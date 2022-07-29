<?php
namespace App\Models;
use CodeIgniter\Model;

class CustomerAddressModel extends Model {
    protected $table      = 'customer_address';
    protected $primaryKey = 'customer_address_id';

    protected $useSoftDeletes = false;

    protected $allowedFields = ["customer_id","pin","address","po","ps","lattitude","lognitude","land_mark","is_default","mobile_no"];
    protected $useTimestamps = false;
}
