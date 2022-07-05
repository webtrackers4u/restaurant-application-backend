<?php
namespace App\Models;
use CodeIgniter\Model;

class AgentFeesModel extends Model {
    protected $table      = 'agent_fees';
    protected $primaryKey = 'agent_fees_id';

    protected $useSoftDeletes = false;

    protected $allowedFields = ["product_id","customer_id","fees_percent","fees_amount"];
    protected $useTimestamps = false;
}
