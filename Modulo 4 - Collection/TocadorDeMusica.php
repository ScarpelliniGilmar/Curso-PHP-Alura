<?php

/**
 * Class TocadorDeMusica
 * Utilizando SplDoublyLinkedList
 */
class TocadorDeMusica{

    private $musicas;

    public function __construct()
    {
        $this->musicas = new SplDoublyLinkedList();
        $this->historico = new SplStack();
        $this->filaDeDownloads = new SplQueue();
        $this->musicas->rewind();
        $this->ranking = new Ranking();
    }


    /**
     * @param SplFixedArray $musicas
     * Rewind - volta o ponteiro para o comeco
     * Valid - vai iterar até a ultima posicao existente
     * Next - Pula para a proxima posição
     * Current - Retorna a musica atual
     * Push - Adiciona no final da lista o string da musica
     */
    public function adicionarMusicas(SplFixedArray $musicas)
    {
        for ($musicas->rewind(); $musicas->valid();$musicas->next()){
            $this->musicas->push($musicas->current());
        }
        $this->musicas->rewind();
    }

    public function tocarMusica() {

        if($this->musicas->count() === 0) {
            echo "Erro, nenhuma música no Tocador";
        } else {
            $this->historico->push($this->musicas->current());
            $this->musicas->current()->tocar();
        }

    }

    public function adicionarMusica($musica)
    {
        $this->musicas->push($musica);
    }

    public function avancarMusica()
    {
        $this->musicas->next();

        if (!$this->musicas->valid()){
            $this->musicas->rewind();
        }
    }

    public function voltarMusica()
    {
        $this->musicas->prev();

        if (!$this->musicas->valid()){
            $this->musicas->rewind();
        }
    }

    public function exibirMusicas()
    {
        for ($this->musicas->rewind(); $this->musicas->valid(); $this->musicas->next()){
            echo "Musica: ".  $this->musicas->current() . "<br>";
        }
    }

    public function exibirQuantidadeDeMusicar()
    {
        echo "Exitem " . $this->musicas->count(). " músicas no tocador";
    }

    public function adicionarMusicaNoComeco($musica)
    {
        $this->musicas->unshift($musica); // unshift adiciona no comeco da lista
    }

    public function removerMusicaDoComeco()
    {
        $this->musicas->shift(); // shift remove do comeco da lista
    }

    public function removerMusicaDoFinal()
    {
        $this->musicas->pop(); //pop remove do final
    }

    public function tocarUltimaMusicaTocada()
    {
        echo "Tocando do historico" . $this->historico->pop(). "<br>";
    }

    public function baixarMusicas()
    {
        if ($this->musicas->count() > 0){
            for ($this->musicas->rewind(); $this->musicas->valid();$this->musicas->next()){
                $this->filaDeDownloads->push($this->musicas->current());
            }

            for ($this->filaDeDownloads->rewind(); $this->filaDeDownloads->valid();$this->filaDeDownloads->next()) {
                echo "Baixando: " . $this->filaDeDownloads->current() . "...<br>";
            }
        }else{
            echo "Nenhuma música encontrada.";
        }

        }

    function exibeRanking() {
        foreach($this->musicas as $musica) {
            $this->ranking->insert($musica);
        }

        foreach($this->ranking as $musica) {
            echo $musica->getNome() . ' - ' . $musica->getVezesTocada() . "<br>";
        }
    }

}