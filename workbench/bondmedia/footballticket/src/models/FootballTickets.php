<?php

use Bond\Interfaces\BaseModelInterface as BaseModelInterface;

class FootballTickets extends BaseModel implements BaseModelInterface {

    public $table = 'football_ticket';
    public $fillable=['title', 'slug', 'content', 'is_published', 'type', 'feature_image', 'venue_image'];
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

    public static function getDataForOptions($type) {
        $results = DB::table('football_ticket')->select('id', 'title')->where('type', '=', $type)->get();
        $output = array(''=>'Select');
        foreach($results as $r) {
            $output[$r->id] = $r->title;
        }
        return $output;
    }



}

