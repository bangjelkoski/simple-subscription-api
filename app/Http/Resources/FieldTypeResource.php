<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\HtmlString;

class FieldTypeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $subscriber = $this->resource->getSubscriber();

        return [
            'code'  => $this::code(),
            'index' => (new HtmlString($this->render($subscriber)))->toHtml(),
            'form'  => (new HtmlString($this->renderForm()))->toHtml(),
        ];
    }
}
