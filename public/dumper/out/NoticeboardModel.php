<?php
namespace App\Models;
use CodeIgniter\Model;

class NoticeboardModel extends Model {
    protected $table      = 'noticeboard';
    protected $primaryKey = 'noticeboardId';

    protected $useSoftDeletes = false;

    protected $allowedFields = ["title","link","file","priority","status","addedBy","addedDate"];
    protected $useTimestamps = false;
}
