<?php

class Agenda {
    # ? Permite que o valor do objeto seja nulo
    private ?Cliente $cliente = null;
    private ?Prestador $prestador = null;
    private array $itens = [];

    public function __construct(
        private string $data = ""
    ) {}

    public function getData() {
        return $this->data;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function setPrestador($prestador) {
        $this->prestador = $prestador;
    }

    public function getPrestador() {
        return $this->prestador;
    }

    public function setItens($item) {
        if (is_array($item)) {
            foreach ($item as $i) {
                $this->itens[] = $i;
            }
        } else {
            $this->itens[] = $item;
        }
    }

    public function getItens() {
        return $this->itens;
    }
}
?>
