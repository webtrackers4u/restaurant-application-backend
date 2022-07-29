<?php
namespace App\Models;
use CodeIgniter\Model;

class MenuProductModel extends Model {
    protected $table      = 'menu_product';
    protected $primaryKey = 'menu_product_id';

    protected $useSoftDeletes = false;

    protected $allowedFields = ["menu_id","product_id"];
    protected $useTimestamps = false;
}
