<?php

namespace DavidL\htmllib;



// this is a comment, dag wereld

class Section extends Element
{
  public function __construct($content)
  {
    // hello
    parent::__construct($content);
    $this->tag = "section";
  }
}
