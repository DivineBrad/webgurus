<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class IndicatorType extends Resource
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
            
            'type_id' => $this->type_id,
            'type' => $this->type,
            'inidcators' => $this->indicators,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
