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
            'menu_name' => $this->menu_name,
            'menu_link' => $this->menu_link,
            'parent_id' => $this->parent_id,
        ];
    }
}
