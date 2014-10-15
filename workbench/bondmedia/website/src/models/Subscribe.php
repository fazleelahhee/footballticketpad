<?php

class Subscribe extends \Illuminate\Database\Eloquent\Model{
    public $table = 'subscribe';
    protected $fillable = ['firstname','lastname', 'email'];
}