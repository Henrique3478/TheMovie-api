<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Movies extends JsonResource
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
            'id'                => $this->id,
            'backdrop_path'     => $this->backdrop_path,
            'adult'             => $this->adult,
            'genres'            => $this->genres,
            'homepage'          => $this->homepage,
            'original_language' => $this->original_language,
            'original_title'    => $this->original_title,
            'overview'          => $this->overview,
            'popularity'        => $this->popularity,
            'poster_path'       => $this->poster_path,
            'release_date'      => $this->release_date,
            'runtime'           => $this->runtime,
            'spoken_languages'  => $this->spoken_languages,
            'status'            => $this->status,
            'tagline'           => $this->tagline,
            'title'             => $this->title,
            'video'             => $this->video,
            'vote_average'      => $this->vote_average,
            'vote_count'        => $this->vote_count,
        ];
    }
}
