<?php

namespace App\Controllers\Api\Me;

use App\Controllers\Api\ApiBaseController;
use App\Models\CustomerModel;

class Index extends ApiBaseController
{
    public function index()
    {
        $payload = $this->request->payload;
        $users= new CustomerModel();
        $me = $users
            ->where("customer_id",$payload["customer_id"])
            ->first();
        return $this->response->setJSON([
            "status"=>200,
            "message"=>"Successful",
            "data"=>$me
        ]);
    }
}
