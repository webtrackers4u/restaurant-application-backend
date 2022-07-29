<?php
namespace App\Models;
use CodeIgniter\Model;

class PurchaseModel extends Model {
    protected $table      = 'purchase';
    protected $primaryKey = 'purchase_id';

    protected $useSoftDeletes = false;

    protected $allowedFields = ["venddor_id","order_no","reference_no","dated","discount_amount","total_amount","department","note"];
    protected $useTimestamps = false;
}
