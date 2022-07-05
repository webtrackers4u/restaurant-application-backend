<?php
namespace App\Models;
use CodeIgniter\Model;

class RbcontactModel extends Model {
    protected $table      = 'rbcontact';
    protected $primaryKey = 'rbcontactId';

    protected $useSoftDeletes = false;

    protected $allowedFields = ["refCode","person","company","phone","email","rbcategoryId","rblocationId","contactStatus","websiteUrl","refferBy","address","postcode","remarks","priority","addedBy","addedDate"];
    protected $useTimestamps = false;
}
