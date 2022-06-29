<?php
namespace App\Models;
use CodeIgniter\Model;

class ProductModel extends Model {
    protected $table      = 'product';
    protected $primaryKey = 'product_id';

    protected $useSoftDeletes = false;

    protected $allowedFields = ["name","search_key","cgst_prcnt","sgst_prcnt","description","unit","market_price","selling_price","discount_note","no_of_pieces","image_1","image_2","department_list","product_type","active_status","addedBy","addedDate","modifyBy","modifyDate"];
    protected $useTimestamps = false;
}
