<?php
namespace App\Models;
use CodeIgniter\Model;

class OtpRecordModel extends Model {
    protected $table      = 'otp_record';
    protected $primaryKey = 'otp_record_id';

    protected $useSoftDeletes = false;

    protected $allowedFields = ["code","type","expires_at","customer_id"];
    protected $useTimestamps = false;
}
