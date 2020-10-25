<?php

namespace Alura\Banco\Modelo;

trait AcessoPropriedades
{

    public function __get(string $nomeAtributo) //Método magico
    {
        // ucfirst - Deixa a primeira letra maiuscula
        $metodo = 'Recupera' . ucfirst($nomeAtributo);

        return $this->$metodo();
    }

    public function __set($nomeAtributo, $valor) :void
    {
        $this->$nomeAtributo = $valor;
    }
}