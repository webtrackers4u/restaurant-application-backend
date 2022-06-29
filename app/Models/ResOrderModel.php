<?php
namespace App\Models;
use CodeIgniter\Model;

class ResOrderModel extends Model {
    protected $table      = 'res_order';
    protected $primaryKey = 'res_order_id';

    protected $useSoftDeletes = false;

    protected $allowedFields = ["customer_id","order_no","reference_no","customer_type","order_type","table_no","room_no","customer_address_id","dated","note","discount_percent","discount_amount","discount_note","order_total","comm_total","order_status","order_status_by","order_status_date","created_by"];
    protected $useTimestamps = false;
}
