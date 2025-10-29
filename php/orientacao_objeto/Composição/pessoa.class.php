<?php 
    class Pessoa
    {
        //Um dos metodos de implementar, feito fora para a pessoa não poder criar o array de celular e já criar os objetos prontos
        //Esse engano geraria uma associação simples e não uma composição e é diferente do desejado para tal aplicação.
        //|
        //V
        private array $celular = array();
        
        public function __construct (
            private string $nome = "",
            
            //Pode criar mas funciona sem
            //|
            //V
            # private array $celular = array(),
            
            //Os parametros abaixo não podem ser criados como private porque se não eles fariam parte de pessoa, mas são de celular.
            //|
            //V
            int $ddd = 0,
            string $numero = "")
        {
            $this->celular[] = new Celular($ddd, $numero);
        }

        public function getNome() {
            return $this->nome;
        }
//Pode fortemente tipar (com int e string nesse exemplo), ou atribuir valor direto caso deseje.
        public function setCelular(int $ddd, string $numero) {
            $this->celular[] = new Celular($ddd, $numero);
        }


    }

?>