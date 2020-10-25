<?php

class CPF{
    
    private string $cpf;

    public function __construct(string $cpf)
    {
        $this->validarCPF($cpf);
    }

    
    /**
     * @return string
     */
    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function validarCPF(string $cpf)
    {
        if (strlen($cpf)<11){
            echo "CPF invalido";
            exit();
        }
        $this->cpf = $cpf;
   }

}