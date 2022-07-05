<?php
namespace App\Models;
use CodeIgniter\Model;

class MenuModel extends Model {

    protected $table      = 'menu';
    protected $primaryKey = 'menu_id';

    protected $useSoftDeletes = false;

    protected $allowedFields = ["parent_id","name","image_link","active_status","department","view_order","addedBy","addedDate"];
    protected $useTimestamps = false;

    public function getMenu($parent_id = 0){
        return $this->select([
            "name", "image_link", "menu_id",
            "exists(select 1 from menu submenu where submenu.parent_id = menu.menu_id) has_submenu"
        ])->where("parent_id", $parent_id)->findAll();
    }
}
