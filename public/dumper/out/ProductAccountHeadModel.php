<?php
namespace App\Models;
use CodeIgniter\Model;

class ProductAccountHeadModel extends Model {
    protected $table      = 'product_account_head';
    protected $primaryKey = 'product_account_head_id';

    protected $useSoftDeletes = false;

    protected $allowedFields = ["account_head_id","product_id","department"];
    protected $useTimestamps = false;
}
