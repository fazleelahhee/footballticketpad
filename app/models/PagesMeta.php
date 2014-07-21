<?php
class PagesMeta extends Eloquent{
    protected $table = "pages_meta";
    protected $fillable = array('page_id', 'meta_keyword', 'meta_content');


    public function setMetaKey($options) {
        $requiredElems = array('page_id', 'meta_keyword', 'meta_content');
        $pageMeta = $this->where('page_id', '=', $options['page_id'])
            ->where('meta_keyword', '=', $options['meta_keyword'])
            ->first();
        if(!$pageMeta) {
            $pageMeta = new PagesMeta();
        }
        foreach($this->fillable as $val) {
            if(!array_key_exists($val,$options )) {
                throw new Exception("Required '$val' is missing");
            } else {
                $pageMeta->attributes[$val] = $options[$val];
            }
        }
        $pageMeta->touch();
        $pageMeta->save();
    }

    public function getMetaKey($options) {
        $output = $this->where('page_id', '=', $options['page_id'])
            ->where('meta_keyword', '=', $options['meta_keyword'])
            ->first();
        if(!$output) {
            return null;
        }
        return $output;
    }


}