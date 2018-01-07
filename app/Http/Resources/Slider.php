<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;


class Slider extends Resource
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
            'slider_id' => $this->slider_id,
            'slider_name' => $this->slider_name,
            'slider_header' => $this->slider_header,
            'description' => $this->description,
        ];
    }
}
