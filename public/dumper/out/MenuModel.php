<?php
namespace App\Models;
use CodeIgniter\Model;

class MenuModel extends Model {
    protected $table      = 'menu';
    protected $primaryKey = 'menu_id';

    protected $useSoftDeletes = false;

    protected $allowedFields = ["parent_id","name","image_link","active_status","department","view_order","addedBy","addedDate"];
    protected $useTimestamps = false;
}
