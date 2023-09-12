<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Schedule extends DataLayer{
    
    public function __construct()
    {
        parent::__construct("schedule", ["data", "hora", "medico", "paciente", "convenio"], "id", false);
    }
}