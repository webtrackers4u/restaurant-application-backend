<?php
namespace App\Models;
use CodeIgniter\Model;

class PagecontentModel extends Model {
    protected $table      = 'pagecontent';
    protected $primaryKey = 'pagecontentId';

    protected $useSoftDeletes = false;

    protected $allowedFields = ["title","icon","excerpt","content","active","metaTag","metaDescription","addedBy","editedBy","addedDate","parentPage","preInclude","postInclude","seoId","externalLink","priority","heading","onHead","onBottom","openNewTab","image","showImage","langId","pageCss","metaTitle","isHome","loginRequired","template"];
    protected $useTimestamps = false;
}
