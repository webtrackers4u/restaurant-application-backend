<?php
namespace App\Models;
use CodeIgniter\Model;

class RBContactModel extends Model {
    protected $table      = 'rbcontact';
    protected $primaryKey = 'rbcontactId';

    protected $useSoftDeletes = false;

    protected $allowedFields = [
        "refCode",
        "person",
        "company",
        "phone",
        "email",
        "gstInNo",
        "rbcategoryId",
        "rblocationId",
        "contactStatus",
        "websideUrl",
        "refferBy",
        "address",
        "postCode",
        "remarks",
        "priority",
        "addedBy",
        "addedDate"
        ];
    protected $useTimestamps = false;
}
