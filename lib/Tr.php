<?php

namespace DavidL\htmllib;


class Tr extends Element
{
  public function __construct($content)
  {
    parent::__construct($content);
    $this->tag = "Tr";
  }
}
