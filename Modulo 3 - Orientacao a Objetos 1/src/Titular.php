<?php

class Titular{

    private CPF $cpf;
    private string $nome;

    /**
     * Titular constructor.
     * @param CPF $cpf
     * @param string $nome
     */
    public function __construct(CPF $cpf, string $nome)
    {
    $this->cpf = $cpf;
    $this->validaNomeTitular($nome);
    $this->nome = $nome;
    }


    /**
     * @return string
     */
    public function getCpf(): string
    {
        return $this->cpf->getCpf();
    }

    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @param string $nomeTitular
     * Método privado para não ser acessado fora da classe
     */
    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5){
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}

