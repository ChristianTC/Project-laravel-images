<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;

use Illuminate\Database\Eloquent\Model;

class Camara extends Model
{
    use Sluggable;
    
    protected $fillable = [
        'title', 'location', 'height','angle','user_id','url'
    ];
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate' => true
            ]
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function getGetExcerptAttribute()
    {
        return substr($this->location,0,140);
    }

}
