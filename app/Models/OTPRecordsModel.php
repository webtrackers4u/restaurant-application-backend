<?php
namespace App\Models;
use CodeIgniter\Model;

class OTPRecordsModel extends Model {
    protected $table      = 'OTPRecords';
    protected $primaryKey = 'OTPRecordId';

    protected $useSoftDeletes = false;

    protected $allowedFields = [
        "otp",
        "expiresAt",
        "type",
        "rbcontactId"
        ];
}
