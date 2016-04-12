<?php

namespace DavidL\htmllib;


class Td extends Element
{
  public function __construct($content)
  {
    parent::__construct($content);
    $this->tag = "Td";
  }
}
