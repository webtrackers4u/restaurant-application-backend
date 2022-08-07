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
            $product["thumbnail"] = $product["thumbnail"]?web_base_url($product["thumbnail"]):base_url("images/food.png");
            $product["banner"] = $product["banner"]?web_base_url($product["banner"]):base_url("images/food.png");
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
            $product["thumbnail"] = $product["thumbnail"]?web_base_url($product["thumbnail"]):base_url("images/food.png");
            $product["banner"] = $product["banner"]?web_base_url($product["banner"]):base_url("images/food.png");
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
        $product = $productModel->getProductDetails($product_id);
        $product["thumbnail"] = $product["thumbnail"]?web_base_url($product["thumbnail"]):base_url("images/food.png");
        $product["banner"] = $product["banner"]?web_base_url($product["banner"]):base_url("images/food.png");

        return $this->response->setJSON([
            "result_code"=>200,
            "message"=>"Successful",
            "data"=>$product
        ]);
    }
}
