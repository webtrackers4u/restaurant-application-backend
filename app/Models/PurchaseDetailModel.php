<?php
namespace App\Models;
use CodeIgniter\Model;

class PurchaseDetailModel extends Model {
    protected $table      = 'purchase_detail';
    protected $primaryKey = 'purchase_detail_id';

    protected $useSoftDeletes = false;

    protected $allowedFields = ["product_id","rate","unit","quentity","total_amount","is_return","return_qty","return_amount","note"];
    protected $useTimestamps = false;
}
