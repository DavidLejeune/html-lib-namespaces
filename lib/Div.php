<?php

namespace DavidL\htmllib;


class Div extends Element
{
  public function __construct($content)
  {
    parent::__construct($content);
    $this->tag = "div";
  }
}
