<?php

namespace DavidL\htmllib;


class Header extends Element
{
  public function __construct($content)
  {
    parent::__construct($content);
    $this->tag = "header";
  }
}
