<?php

namespace controller;

use model\modeling;

# hanya contoh untuk controller :
class model
{
    protected $konfig;
    public function __construct($konfig)
    {
        $this->konfig = new modeling($konfig);
    }
}