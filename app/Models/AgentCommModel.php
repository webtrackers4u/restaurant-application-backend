<?php
namespace App\Models;
use CodeIgniter\Model;

class AgentCommModel extends Model {
    protected $table      = 'agent_comm';
    protected $primaryKey = 'agent_comm_id';

    protected $useSoftDeletes = false;

    protected $allowedFields = ["product_id","customer_id","comm_percent","comm_amount"];
    protected $useTimestamps = false;
}
