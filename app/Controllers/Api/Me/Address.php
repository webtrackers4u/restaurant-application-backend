<?php

namespace App\Controllers\Api\Me;

use App\Controllers\Api\ApiBaseController;
use App\Models\CustomerModel;

class Address extends ApiBaseController
{
    public function index()
    {
        $payload = $this->request->payload;
        $users= new CustomerModel();
        $me = $users
            ->where("customer_id",$payload["customer_id"])
            ->first();
        return $this->response->setJSON([
            "result_code"=>200,
            "message"=>"Successful",
            "data"=>$me
        ]);
    }
}
