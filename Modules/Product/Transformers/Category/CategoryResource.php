<?php

namespace Modules\Product\Transformers\Category;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
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
            'id'=>$this->id,
<<<<<<< HEAD
            'text'=>$this->name
=======
            'name'=>$this->name
>>>>>>> refs/remotes/origin/main
        ];
    }
}
