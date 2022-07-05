<?php
namespace App\Models;
use CodeIgniter\Model;

class ProductIssueModel extends Model {
    protected $table      = 'product_issue';
    protected $primaryKey = 'product_issue_id';

    protected $useSoftDeletes = false;

    protected $allowedFields = ["ref_no","product_id","admin_id","dated","unit","quantity","by_admin_id","brand","is_return","return_quantity","return_note","is_wastage","wastage_note","wastage_quantity","base_unit","base_total_quantity","base_unit_quantity"];
    protected $useTimestamps = false;
}
