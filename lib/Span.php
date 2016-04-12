<?php

namespace DavidL\htmllib;


class Span extends Element
{
  public function __construct($content, $properties = array())
  {
    parent::__construct($content, $properties);
    $this->tag = "span";
  }
}
 ?>
