<?php
namespace App\Models;
use CodeIgniter\Model;

class ImageuploaderModel extends Model {
    protected $table      = 'imageuploader';
    protected $primaryKey = 'imageId';

    protected $useSoftDeletes = false;

    protected $allowedFields = ["title","image","addedDate"];
    protected $useTimestamps = false;
}
