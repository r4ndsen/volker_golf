<?php

namespace vg;

class Response
{
    private $props = array();

    public function __construct($message = '', $success = false, $disabled = false)
    {
        $this->props['message']  = $message;
        $this->props['success']  = $success;
        $this->props['disabled'] = $disabled;
    }

    public function __set($key, $value)
    {
        $this->props[$key] = $value;
    }

    public function __get($key)
    {
        return isset($this->props[$key]) ? $this->props[$key] : null;
    }

    public function __toString()
    {
        return json_encode($this->props);
    }
}
