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
            'event_id' => $this->event->nama_event,
            'user_id' => $this->user->name,
            'prestasi' => $this->prestasi,
            'bukti' => $this->bukti,
            'dosen_id' => $this->dosen->nama,
            'point_id' => $this->point->point,
            'tanggal_input' => $this->tanggal_input,
            'pesan' => $this->pesan,
//            'is_approved'
        ];
    }
}
