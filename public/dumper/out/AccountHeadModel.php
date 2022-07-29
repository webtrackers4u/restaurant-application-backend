<?php
namespace App\Models;
use CodeIgniter\Model;

class AccountHeadModel extends Model {
    protected $table      = 'account_head';
    protected $primaryKey = 'account_head_id';

    protected $useSoftDeletes = false;

    protected $allowedFields = ["parent_id","name","addedBy","addedDate"];
    protected $useTimestamps = false;
}
