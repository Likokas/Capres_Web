<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
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
            'event_id' => $this->event_id,
            'user_id' => $this->user_id,
            'prestasi' => $this->prestasi,
            'bukti' => $this->bukti,
            'dosen_id' => $this->dosen_id,
            'point_id' => $this->point_id,
            'tanggal_input' => $this->tanggal_input,
            'pesan' => $this->pesan,
//            'is_approved'
        ];
    }
}
