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
            "result_code"=>200,
            "message"=>"Successful",
            "data"=>$me
        ]);
    }

    public function update()
    {
        $payload = $this->request->payload;
        $customer= new CustomerModel();

        $data = [
            "full_name" => $this->request->getVar("full_name"),
            "occupation" => $this->request->getVar("occupation"),
        ];

        $address_res = $customer->update($payload["customer_id"], $data);
        if(!$address_res){
            return $this->response->setStatusCode(400)->setJSON([
                "result_code"=>400,
                "message"=>"Something went wrong",
            ]);
        }
        return $this->response->setJSON([
            "result_code"=>200,
            "message"=>"Successful"
        ]);
    }
}
