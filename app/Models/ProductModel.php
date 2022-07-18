<?php
namespace App\Models;
use CodeIgniter\Model;

class ProductModel extends Model {
    protected $table      = 'product';
    protected $primaryKey = 'product_id';

    protected $useSoftDeletes = false;

    protected $allowedFields = ["name","search_key","cgst_prcnt","sgst_prcnt","description","unit","market_price","selling_price","discount_note","note","thumbnail","banner","view_order","product_for","active_status","code","base_unit","base_unit_quantity","uique_product_id","addedBy","addedDate","modifyBy","modifyDate"];
    protected $useTimestamps = false;

    public function getMenuProducts($menu_id): array
    {
        $sql = "SELECT p.product_id,
           p.name,
           p.is_veg,
           p.unit,
           p.selling_price as price,
           p.thumbnail,
           p.banner
        FROM product p  INNER JOIN menu_product mp on p.product_id=mp.product_id AND mp.menu_id=".$this->db->escape($menu_id);
        $query = $this->db->query($sql);
        return $query->getResultArray();
    }

    public function getPopularProducts($department): array
    {
        $sql = "SELECT p.product_id,
           p.name,
           p.is_veg,
           p.unit,
           p.selling_price as price,
           p.thumbnail,
           p.banner
        FROM product p
            INNER JOIN menu_product mp on mp.product_id=p.product_id
            INNER JOIN menu m on m.menu_id=mp.menu_id AND m.department=".$this->db->escape($department);
        $query = $this->db->query($sql);
        return $query->getResultArray();
    }

    public function getProductDetails($product_id){
        $sql = "SELECT p.*,    p.thumbnail,
           p.banner FROM product p WHERE p.product_id=".$this->db->escape($product_id);
        $query = $this->db->query($sql);
        return $query->getRowArray();
    }


}
