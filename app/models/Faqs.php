<?php

use Bond\Interfaces\BaseModelInterface as BaseModelInterface;

class Faqs extends BaseModel implements BaseModelInterface {

    public $table = 'faq';
    public $fillable=['title', 'slug', 'content', 'datetime', 'is_published'];
    protected $appends = ['url'];

    public function setUrlAttribute($value) {

        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute() {

        return "faq/" . $this->attributes['id'] . "/" . $this->attributes['slug'];
    }
}
