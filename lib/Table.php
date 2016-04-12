<?php

namespace DavidL\htmllib;


class Table extends Element
{
  public function __construct($content)
  {
    parent::__construct($content);
    $this->tag = "table";
  }
}
 ?>
