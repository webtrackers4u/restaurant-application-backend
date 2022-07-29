<?php
namespace App\Models;
use CodeIgniter\Model;

class SettingsModel extends Model {
    protected $table      = 'settings';
    protected $primaryKey = 'settingsId';

    protected $useSoftDeletes = false;

    protected $allowedFields = ["keyword","value","system","addedBy","addedDate"];
    protected $useTimestamps = false;
}
