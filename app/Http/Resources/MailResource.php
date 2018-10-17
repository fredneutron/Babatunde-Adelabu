<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $request->validate([
            'name' => 'required|max:150|string',
            'subject' => 'required|max:300|string',
            'email' => 'required|max:200|string',
            'message' => 'required|max:2000|string'
        ]);
        if ($request->auth)
        {
            // mail
//            return response()->json( [
//                'message' => 'Message send'
//            ] , 200);
            return [
                'message' => 'message sent'
            ];
        }else {
//            return response()->json(null,400);
            return [
                'message' => 'Message failed'
            ];
        }
//        return parent::toArray($request);
    }
}
