<?php
namespace App\Models;
use CodeIgniter\Model;

class ProductCategoryPoductModel extends Model {
    protected $table      = 'product_category_poduct';
    protected $primaryKey = 'product_category_poduct_id';

    protected $useSoftDeletes = false;

    protected $allowedFields = ["product_category_id","product_id"];
    protected $useTimestamps = false;
}
