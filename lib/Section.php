<?php

namespace DavidL\htmllib;

use DavidL\htmllib\Element;

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
