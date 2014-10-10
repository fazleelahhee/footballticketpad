<?php

class Options extends BaseModel {

    public $table = 'options';
    public $fillable =['ref_id', 'ref_table', 'key', 'value'];


    public function saveOptions($options = array() ) {
        //$dataToSave = array();
        foreach($options as $key=>$val) {
            if (strpos($key, 'option_') !== FALSE) {
                //$dataToSave[$key] = $val;
                $optionsKey = str_replace('options_', '',$key);
                $options = Options::where('key', '=', $optionsKey);
                if($options) {
                    $options->value = $val;
                    $options->save();
                } else {
                    Options::fill(array(
                        'key'   => $optionsKey,
                        'value' => $val
                    ))->save();
                }

            }
        }


    }
}
