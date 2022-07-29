<?php
namespace App\Models;
use CodeIgniter\Model;

class PurchaseDetailModel extends Model {
    protected $table      = 'purchase_detail';
    protected $primaryKey = 'purchase_detail_id';

    protected $useSoftDeletes = false;

    protected $allowedFields = ["product_id","rate","unit","quantity","total_amount","is_return","return_quantity","return_amount","note","base_unit","base_total_quantity","base_unit_quantity"];
    protected $useTimestamps = false;
}
