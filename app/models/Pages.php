<?php

use Bond\Interfaces\BaseModelInterface as BaseModelInterface;

class Pages extends BaseModel implements BaseModelInterface {

    public $table = 'pages';
    protected $fillable = ['title', 'content', 'is_published', 'slug', 'meta_title', 'meta_content', 'meta_description', 'parent_id'];
    protected $appends = ['url'];

    public function setUrlAttribute($value) {

        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute() {

        return "/page/" . $this->attributes['id'];
    }
}
