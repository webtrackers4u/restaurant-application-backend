<?php
namespace App\Models;
use CodeIgniter\Model;

class PhotogalleryModel extends Model {
    protected $table      = 'photogallery';
    protected $primaryKey = 'photoGalleryId';

    protected $useSoftDeletes = false;

    protected $allowedFields = ["galleryCatagoryId","name","title","addedBy","addedDate","status"];
    protected $useTimestamps = false;
}
