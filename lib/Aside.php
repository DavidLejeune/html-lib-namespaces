<?php
namespace DavidL\htmllib;


class Aside extends Element
{
  public function __construct($content)
  {
    parent::__construct($content);
    $this->tag = "aside";
  }
}
