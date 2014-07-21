<?php

use Bond\Interfaces\BaseModelInterface as BaseModelInterface;

class Pages extends BaseModel implements BaseModelInterface {

    public $table = 'pages';
    protected $fillable = ['title', 'content', 'is_published', 'slug', 'meta_title', 'meta_content', 'meta_description', 'parent_id', 'publication_date'];
    protected $appends = ['url'];

    public function setUrlAttribute($value) {

        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute() {

        return "/page/" . $this->attributes['id'];
    }

    public static function parseUri ($uri)
    {
        $uri = strtolower (trim (preg_replace ('~[^0-9a-z\/]+~i', '-', html_entity_decode (preg_replace ('~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i', '$1', htmlentities ($uri, ENT_QUOTES, 'UTF-8')), ENT_QUOTES, 'UTF-8')), '-'));
        $page = Pages::where ('slug', $uri)->first();
        if ($page instanceof Pages) {
            return $page;
        } else {
            return false;
        }
    }


    public function getPages() {
        $output = [];
        $collections = $this->where('is_published', '=', 1)->get();

        foreach($collections as $page) {
            $output[$page->id] = $page->slug;
        }
        return $output;
    }
}

