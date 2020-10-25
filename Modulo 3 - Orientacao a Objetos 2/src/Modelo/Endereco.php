<?php

namespace Alura\Banco\Modelo;

/**
 * Class Endereco
 * @package Alura\Banco\Modelo
 *
 * @property string $bairro
 * @property string $rua
 * @property string $numero
 * @property string $cidade
 */
final class Endereco
{
    use AcessoPropriedades;
    private $cidade;
    private $bairro;
    private $rua;
    private $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function recuperaCidade(): string
    {
        return $this->cidade;
    }

    public function recuperaBairro(): string
    {
        return $this->bairro;
    }

    public function recuperaRua(): string
    {
        return $this->rua;
    }

    public function recuperaNumero(): string
    {
        return $this->numero;
    }

    /**
     * @param string $cidade
     */
    public function setCidade(string $cidade): void
    {
        $this->cidade = $cidade;
    }

    /**
     * @param string $bairro
     */
    public function setBairro(string $bairro): void
    {
        $this->bairro = $bairro;
    }

    /**
     * @param string $rua
     */
    public function setRua(string $rua): void
    {
        $this->rua = $rua;
    }

    /**
     * @param string $numero
     */
    public function setNumero(string $numero): void
    {
        $this->numero = $numero;
    }

    public function __toString(): string
    {
        return "$this->rua, $this->numero, $this->bairro, $this->cidade";
    }

}
