<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TodoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        return [
            'title'     => "타이틀 : " .$this->itle,
            'content'   => "내용 : " . $this->content,
            'create_at' => $this->created_at->diffForHumans()
        ];
        // return parent::toArray($request);
    }
}
