<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class User extends DataLayer
{
    /**
     * User constructor.
     */
    public function __construct()
    {
        /**
         * DataLayer constructor.
        */
    parent::__construct("users", ["nome", "email", "senha", "rg", "cpf", "crm", "cep", "logradouro", "numero", "complemento", "bairro", "cidade", "estado", "tipo", "convenio", "conv_numero"], "id", true);
    }

}