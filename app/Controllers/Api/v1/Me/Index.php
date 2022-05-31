<?php

namespace App\Controllers\Api\v1\Me;

use App\Controllers\BaseController;
use App\Models\Users;

class Index extends BaseController
{
    public function index()
    {
        $payload = $this->request->payload;
        $users= new Users();
        $me = $users
            ->select(["name", "username"])
            ->where("id",$payload["id"])
            ->first();
        return $this->response->setJSON($me);
    }
}
