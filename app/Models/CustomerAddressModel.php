<?php
namespace App\Models;
use CodeIgniter\Model;

class CustomerAddressModel extends Model {
    protected $table      = 'customer_address';
    protected $primaryKey = 'customer_address_id';

    protected $useSoftDeletes = false;

    protected $allowedFields = ["customer_id","address_title","pin","address","po","ps","latitude","longitude","land_mark","is_default","mobile_no"];
    protected $useTimestamps = false;
}
