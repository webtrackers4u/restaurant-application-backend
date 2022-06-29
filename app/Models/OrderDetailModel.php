<?php
namespace App\Models;
use CodeIgniter\Model;

class OrderDetailModel extends Model {
    protected $table      = 'order_detail';
    protected $primaryKey = 'order_detail_id';

    protected $useSoftDeletes = false;

    protected $allowedFields = ["res_order_id","product_id","market_price","selling_price","discount_note","unit","quantity","no_of_pieces","amount","cgst_amount","sgst_amount","total_amount","comm_percent","comm_amount","total_comm_amount","brand","note","return_quantity"];
    protected $useTimestamps = false;
}
