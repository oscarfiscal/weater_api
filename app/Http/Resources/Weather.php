<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Weather extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [  
             
            'data'=>[
                'id'=>$this->id,
                'city'=>$this->city,
                'weather'=>$this->weather,
                'temperature'=>$this->temperature,
                'humidity'=>$this->humidity,
                'start_date'=>$this->start_date,
            
       ]
               
               
               ];
    }
}
