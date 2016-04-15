<?php

namespace DavidL\htmllib;

use DavidL\htmllib\Element;

class Table extends Element
{
    public function __construct($content)
    {
        parent::__construct($content);
        $this->tag = "table";
    }
}
