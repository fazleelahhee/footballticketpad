<?php

use Bond\Interfaces\BaseModelInterface as BaseModelInterface;

class FootBallEvent extends BaseModel implements BaseModelInterface {

    public $table = 'events';
    //public $fillable=['title', 'slug', 'content', 'datetime', 'is_published'];
    protected $appends = ['url'];

    public function setUrlAttribute($value) {

        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute() {

        return "events/" . $this->attributes['id'] . "/" . $this->attributes['slug'];
    }
}
