<?php

namespace DavidL\htmllib;

use DavidL\htmllib\Element;

class Button extends Element
{
  public function __construct($content, $properties = array())
  {
    parent::__construct($content, $properties);
    $this->tag = "button";
  }
}
