<?php

namespace model;

# contoh saja pada model ini :
class modeling
{
    protected $table = "";
    protected $db;
    public function __construct($db)
    {
        $this->db = $db;
    }
}