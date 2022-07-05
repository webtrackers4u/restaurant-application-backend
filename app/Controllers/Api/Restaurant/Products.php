<?php

namespace App\Controllers\Api\Restaurant;

use App\Controllers\Api\ApiBaseController;
use App\Models\ProductModel;

class Products extends ApiBaseController
{

    public function products()
    {
        $productModel = new ProductModel();
        //search params
        $menu_id_s = $this->request->getGet("menu_id");
        $products = $productModel->getMenuProducts($menu_id_s);
        $products = array_map(function ($product){
            $product["thumbnail"] = $product["image_1"];
            $product["banner"] = $product["image_2"];
            unset($product["image_1"]);
            unset($product["image_2"]);
            return $product;
        }, $products);
        return $this->response->setJSON([
            "result_code"=>200,
            "message"=>"Successful",
            "data"=> $products
        ]);
    }

    public function popularProducts()
    {
        $productModel = new ProductModel();
        //search params
        $products = $productModel->getPopularProducts("restaurant");
        $products = array_map(function ($product){
            $product["thumbnail"] = $product["image_1"];
            $product["banner"] = $product["image_2"];
            unset($product["image_1"]);
            unset($product["image_2"]);
            return $product;
        }, $products);
        return $this->response->setJSON([
            "result_code"=>200,
            "message"=>"Successful",
            "data"=> $products
        ]);
    }

    public function productDetails($product_id){
        $productModel = new ProductModel();
        //search params
        $products = $productModel->getProductDetails($product_id);
        return $this->response->setJSON([
            "result_code"=>200,
            "message"=>"Successful",
            "data"=>[

            ]
        ]);
    }
}
