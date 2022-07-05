<?php
namespace App\Models;
use CodeIgniter\Model;

class OrderStatusModel extends Model {
    protected $table      = 'order_status';
    protected $primaryKey = 'order_status_id';

    protected $useSoftDeletes = false;

    protected $allowedFields = ["customer_order_id","order_status","admin_id","dated","note"];
    protected $useTimestamps = false;
}
