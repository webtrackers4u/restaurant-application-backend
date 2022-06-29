<?php
namespace App\Models;
use CodeIgniter\Model;

class ProductCategoryModel extends Model {
    protected $table      = 'product_category';
    protected $primaryKey = 'product_category_id';

    protected $useSoftDeletes = false;

    protected $allowedFields = ["parent_id","cat_name","image_link","active_status","view_order"];
    protected $useTimestamps = false;
}
