<?php
namespace App\Models;
use CodeIgniter\Model;

class OtpRecordModel extends Model {
    const TYPES = [
        "SIGN_IN" => 0
    ];
    protected $table      = 'otp_record';
    protected $primaryKey = 'otp_record_id';

    protected $useSoftDeletes = false;

    protected $allowedFields = [
        "code",
        "expires_at",
        "type",
        "customer_id"
    ];
}
