<?php

class Media extends Eloquent {
    public $table = 'media';
    protected $fillable = ['file_name', 'extension', 'path', 'type', 'height', 'width', 'created_at', 'updated_at'];
}