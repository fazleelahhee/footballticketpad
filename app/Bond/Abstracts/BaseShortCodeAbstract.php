<?php namespace Bond\Abstracts;

abstract class BaseShortCodeAbstract {

    protected $params = array();
    protected $template = '';

    /**
     * @param string $template
     */
    public function setTemplate($template)
    {
        $this->template = $template;
    }

    /**
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    public function setParams($options) {
        parse_str(urldecode($options), $this->params);
    }
}