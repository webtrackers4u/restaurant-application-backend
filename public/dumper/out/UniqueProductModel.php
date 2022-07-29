<?php
namespace App\Models;
use CodeIgniter\Model;

class UniqueProductModel extends Model {
    protected $table      = 'unique_product';
    protected $primaryKey = 'unique_product_id';

    protected $useSoftDeletes = false;

    protected $allowedFields = ["name","search_key","image_link","view_order"];
    protected $useTimestamps = false;
}
