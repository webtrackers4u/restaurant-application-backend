<?php

namespace App\Controllers\Api\v1\Me;

use App\Controllers\BaseController;
use App\Models\RBContactModel;

class Index extends BaseController
{
    public function index()
    {
        $payload = $this->request->payload;
        $users= new RBContactModel();
        $me = $users
            ->where("rbcontactId",$payload["rbcontactId"])
            ->first();
        return $this->response->setJSON([
            "status"=>200,
            "message"=>"Successful",
            "data"=>$me
        ]);
    }
}
