<?php

namespace App\Controllers\Api\Me;

use App\Controllers\Api\ApiBaseController;
use App\Models\CustomerAddressModel;

class Address extends ApiBaseController
{
    public function index()
    {
        $payload = $this->request->payload;
        $customer_address= new CustomerAddressModel();
        $addresses = $customer_address
            ->where("customer_id",$payload["customer_id"])
            ->findAll();
        return $this->response->setJSON([
            "result_code"=>200,
            "message"=>"Successful",
            "data"=>$addresses
        ]);
    }

    public function getAddress($customer_address_id)
    {
        $payload = $this->request->payload;
        $customer_address= new CustomerAddressModel();
        $address = $customer_address
            ->where("customer_address_id",$customer_address_id)
            ->first();
        return $this->response->setJSON([
            "result_code"=>200,
            "message"=>"Successful",
            "data"=>$address
        ]);
    }

    public function addAddress()
    {
        $payload = $this->request->payload;
        $customer_address= new CustomerAddressModel();

        $data = [
            "customer_id"=>$payload["customer_id"],
            "address_title" => $this->request->getVar("address_title"),
            "pin" => $this->request->getVar("pin"),
            "address" => $this->request->getVar("address"),
            "po" => $this->request->getVar("po"),
            "ps" => $this->request->getVar("ps"),
            "latitude" => $this->request->getVar("latitude"),
            "longitude" => $this->request->getVar("longitude"),
            "land_mark" => $this->request->getVar("land_mark"),
            "is_default" => $this->request->getVar("is_default"),
            "mobile_no" => $this->request->getVar("mobile_no")
        ];

        $address_res = $customer_address->insert($data);
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

    public function updateAddress($customer_address_id)
    {
        $payload = $this->request->payload;
        $customer_address= new CustomerAddressModel();

        $data = [
            "address_title" => $this->request->getVar("address_title"),
            "pin" => $this->request->getVar("pin"),
            "address" => $this->request->getVar("address"),
            "po" => $this->request->getVar("po"),
            "ps" => $this->request->getVar("ps"),
            "latitude" => $this->request->getVar("latitude"),
            "longitude" => $this->request->getVar("longitude"),
            "land_mark" => $this->request->getVar("land_mark"),
            "is_default" => $this->request->getVar("is_default"),
            "mobile_no" => $this->request->getVar("mobile_no")
        ];

        $address_res = $customer_address
        ->where("customer_address_id",$customer_address_id)
        ->where("customer_id",$payload["customer_id"])
        ->update($customer_address_id, $data);
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
