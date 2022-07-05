<?php

namespace App\Controllers\Api\Restaurant;

use App\Controllers\Api\ApiBaseController;
use App\Models\MenuModel;
use App\Models\ProductModel;

class Product extends ApiBaseController
{

    public function index()
    {
        $productModel = new ProductModel();
        //search params
        $menu_id_s = $this->request->getGet("menu_id");
        $products = $productModel->getMenuProducts($menu_id_s);
        return $this->response->setJSON([
            "result_code"=>200,
            "message"=>"Successful",
            "data"=> $products
        ]);
    }
}
