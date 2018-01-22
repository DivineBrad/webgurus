<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;


class Menu extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'menu_id' => $this->menu_id,
            'menu_name1' => $this->menu_name1,
            'menu_name2' => $this->menu_name2,
            'menu_name3' => $this->menu_name3,
            'menu_name4' => $this->menu_name4,
            'menu_sname1' => $this->menu_sname1,
            'menu_sname2' => $this->menu_sname2,
            'menu_sname3' => $this->menu_sname3,
            'menu_sname4' => $this->menu_sname4,
            'menu_sname5' => $this->menu_sname5,
            'menu_link' => $this->menu_link,
            'parent_id' => $this->parent_id,
        ];
    }
}
