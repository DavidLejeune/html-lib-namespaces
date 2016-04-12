<?php

namespace DavidL\htmllib;


class Th extends Element
{
  public function __construct($content)
  {
    parent::__construct($content);
    $this->tag = "th";
  }
}
 ?>
