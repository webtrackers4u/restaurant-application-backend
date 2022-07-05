<?php

namespace App\Controllers\Api\Restaurant;

use App\Controllers\Api\ApiBaseController;
use App\Models\MenuModel;

class Menu extends ApiBaseController
{

    public function index()
    {
        $menuModel = new MenuModel();
        $payload = $this->request->payload;

        //search params
        $parent_id_s = $this->request->getGet("parent_id") ?? 0;


        $menu = $menuModel->getMenu($parent_id_s);
        $menu = array_map(function($menuItem){
            $menuItem["image_link"] = web_base_url($menuItem["image_link"]);
            return $menuItem;
        }, $menu);
        return $this->response->setJSON([
            "result_code"=>200,
            "message"=>"Successful",
            "data"=> $menu
        ]);
    }
}
