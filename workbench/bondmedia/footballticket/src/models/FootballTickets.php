<?php

use Bond\Interfaces\BaseModelInterface as BaseModelInterface;

class FootballTickets extends BaseModel implements BaseModelInterface {

    public $slug_prefix = 'club';
    public $table = 'football_ticket';
    public $fillable=['title', 'slug', 'content', 'datetime', 'is_published'];
    protected $appends = ['url'];

    public function __construct() {
        $type = Input::get('action_type');
        if(!empty($type)) {
            $this->slug_prefix =  $type;
        }
        parent::__construct();
    }

    public function setUrlAttribute($value) {

        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute() {
        return "{$this->slug_prefix}/{$this->attributes['slug']}";
    }


}

