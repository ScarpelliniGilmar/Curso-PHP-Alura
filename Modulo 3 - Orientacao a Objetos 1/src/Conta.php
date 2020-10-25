<?php
/**
 * extanciar uma conta :
 * $conta1 = new Conta();
 * $conta1 -> saldo = 200; // altera o saldo para 200
 **/

class Conta
{
    private $titular;
    private float $saldo;
    private static  $numeroDeContas = 0;

    /**
     * No contrutor apenas iniciar dados
     * Conta constructor.
     */
    public function __construct(Titular $titular)
    {
     $this ->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;//self acessa a classe atual
    }

    /**
     * Destruct quando essa instancia é apagada
     */
    public function __destruct()
    {
        /**
         * para exibir msg ao excluir conta
         * self::$numeroDeContas--;
         */
        self::$numeroDeContas--;
//        if (self::$numeroDeContas>2){
//            echo "Há mais de uma conta ativa";
//        }
    }

    public function sacar(float $valorASacar)
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponivel";
            return; // para a execução
        }
        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar)
    {
        if ($valorADepositar < 0) {
            echo "valor precisar ser positivo";
            return;
        }
        $this->saldo += $valorADepositar;

    }

    /**
     * @param float $valorATransferir
     * @param Conta $contaDestino
     *
     * Tirando de uma referencia e passando para outra
     */
    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo){
            echo "Saldo indisponivel";
            return;
        }
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    /**
     * @return float|int
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * @return int
     */
    public static function getNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }


    public function getNomeTitular()
    {
        return $this->titular->getNome();
    }

    public function getCPFTitular()
    {
        return $this->titular->getCpf();
    }



}