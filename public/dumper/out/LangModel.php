<?php
namespace App\Models;
use CodeIgniter\Model;

class LangModel extends Model {
    protected $table      = 'lang';
    protected $primaryKey = 'langId';

    protected $useSoftDeletes = false;

    protected $allowedFields = ["title","code","defaultLang","active","addedBy","addedDate"];
    protected $useTimestamps = false;
}
