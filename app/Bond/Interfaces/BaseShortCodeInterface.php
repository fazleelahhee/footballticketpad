<?php namespace Bond\Interfaces;

interface BaseShortCodeInterface {
    public function __construct();
    public function setParams($params);
    public function render();
}