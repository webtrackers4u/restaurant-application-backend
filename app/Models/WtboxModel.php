<?php
namespace App\Models;
use CodeIgniter\Model;

class WtboxModel extends Model {
    protected $table      = 'wtbox';
    protected $primaryKey = 'wtboxId';

    protected $useSoftDeletes = false;

    protected $allowedFields = ["title","accessKey","langId","css","container","htmlTemplate","content","data","tinymce","addedBy","addedDate","active","block","block_values"];
    protected $useTimestamps = false;
}
