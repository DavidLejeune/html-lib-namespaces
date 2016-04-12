<?php

namespace DavidL\htmllib;


class H2 extends Element
{
  public function __construct($content)
  {
    parent::__construct($content);
    $this->tag = "h2";
  }
}
