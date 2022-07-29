<?php
namespace App\Models;
use CodeIgniter\Model;

class PagecontentmetaModel extends Model {
    protected $table      = 'pagecontentmeta';
    protected $primaryKey = '';

    protected $useSoftDeletes = false;

    protected $allowedFields = ["pagecontentId","name","value","dated"];
    protected $useTimestamps = false;
}
