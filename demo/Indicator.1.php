<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;


class Indicator extends Resource
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
            'indicator_id' => $this->indicator_id,
            'indicator' => $this->indicator,
            'type_id' => $this->type_id,
            'type' => $this->type->type,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
