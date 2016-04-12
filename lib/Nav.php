<?php

namespace DavidL\htmllib;


class Nav extends Element
{
  public function __construct($content)
  {
    parent::__construct($content);
    $this->tag = "nav";
  }
}
