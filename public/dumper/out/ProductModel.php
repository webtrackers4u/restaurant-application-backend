<?php
namespace App\Models;
use CodeIgniter\Model;

class ProductModel extends Model {
    protected $table      = 'product';
    protected $primaryKey = 'product_id';

    protected $useSoftDeletes = false;

    protected $allowedFields = ["name","search_key","cgst_prcnt","sgst_prcnt","description","unit","market_price","selling_price","discount_note","note","image_1","image_2","view_order","product_for","active_status","code","base_unit","base_unit_quantity","uique_product_id","addedBy","addedDate","modifyBy","modifyDate"];
    protected $useTimestamps = false;
}
