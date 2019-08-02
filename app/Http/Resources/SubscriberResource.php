<?php

namespace App\Http\Resources;

use App\Enums\SubscriberState;
use Illuminate\Http\Resources\Json\JsonResource;

class SubscriberResource extends JsonResource
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
            'id'     => $this->id,
            'email'  => $this->getFieldValue('email'),
            'name'   => $this->getFieldValue('name'),
            'image'  => $this->getFieldValue('image'),
            'state'  => SubscriberState::translate($this->getFieldValue('state')),
            'fields' => FieldResource::collection($this->fields),
        ];
    }
}
