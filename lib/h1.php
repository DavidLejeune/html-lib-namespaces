<?php

namespace DavidL\htmllib;


class H1 extends Element
{
  public function __construct($content)
  {
    parent::__construct($content);
    $this->tag = "h1";
  }
}
