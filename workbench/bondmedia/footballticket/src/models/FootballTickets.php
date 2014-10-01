<?php

use Bond\Interfaces\BaseModelInterface as BaseModelInterface;

class FootballTickets extends BaseModel implements BaseModelInterface {

    public $table = 'football_ticket';
    public $fillable=['title', 'slug', 'content', 'is_published', 'type'];
    protected $appends = ['url'];

    public function __construct() {
        parent::__construct();
    }

    public function setUrlAttribute($value) {

        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute() {
        return "{$this->slug_prefix}/{$this->attributes['slug']}";
    }


}

