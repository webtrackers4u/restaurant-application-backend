<?php
namespace App\Models;
use CodeIgniter\Model;

class OrderDetailModel extends Model {
    protected $table      = 'order_detail';
    protected $primaryKey = 'order_detail_id';

    protected $useSoftDeletes = false;

    protected $allowedFields = ["customer_order_id","product_id","market_price","selling_price","discount_note","unit","quantity","no_of_pieces","rate","cgst_amount","sgst_amount","total_amount","agent_fees_percent","agent_fees_amount","total_agent_fees_amount","brand","note","return_quantity","return_amount","base_unit","base_total_quantity","base_unit_quantity","by_admin_id"];
    protected $useTimestamps = false;
}
