<?php
namespace App\Models;
use CodeIgniter\Model;

class GallerycatagoryModel extends Model {
    protected $table      = 'gallerycatagory';
    protected $primaryKey = 'galleryCatagoryId';

    protected $useSoftDeletes = false;

    protected $allowedFields = ["categoryName","active","addedBy","addedDate"];
    protected $useTimestamps = false;
}
