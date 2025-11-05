<?php

# Cliente vem pra agenda, e agenda não vai pra cliente

class Agenda {
    public function __construct(
        protected string $data = "",
        #Esses que não tem private ou protected na frente são parametros vindo de OUTRO (nesse caso itens)
        string $horario,
        string $status,
        $cliente = null,
        $serviço = null,
        $agenda = null,
        $prestador = null
        ) {
            $this->itens[] = new Itens($horario, $status, $servico, $agenda, $prestador); 
        }

        public function getData() {
            return $this->data;
        }

        public function getItens() {
            return $this->itens();
        }

        public function setData($data) {
            $this->data = $data;
        }

        public function setItens($horario, $status, $servico, $agenda, $prestador) {
            $this->itens[] = new Itens($horario, $status, $servico, $agenda, $prestador);
        }
}

?>