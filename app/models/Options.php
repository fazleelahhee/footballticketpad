<?php

class Options extends BaseModel {
    public $table = 'options';
    public $fillable = ['option', 'value'];
    public $timestamps = false;
}
