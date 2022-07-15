<?php
    /**
     * <b>documentation</b>
     * @author Cristian Dias
     */

    class Pessoa{

        public $nome;
        public $dataNascimento;
        public $CPF;
        public $RG; 

        /** 
         * funçao setar nome 
         * @param String
         */
        public function setNome($nome){
            $this->nome = $nome;
        }

        /** 
         * funçao pegar nome 
         * @return String
         */
        public function getNome(){
            return $this->nome;
        }

        /** 
         * funçao setar data de nascimento 
         * @param String
         */
        public function setDataNascimento($dataNascimento){
            $this->dataNascimento = $dataNascimento;
        }

        /** 
         * funçao pegar data de nascimento 
         * @return String
         */
        public function getDataNascimento(){
            return $this->dataNascimento;
        }

        /** 
         * funçao setar cpf 
         * @param String
         */
        public function setCPF($CPF){
            $this->CPF = $CPF;
        }

        /** 
         * funçao pegar cpf 
         * @return String
         */
        public function getCPF(){
            return $this->CPF;
        }

        /** 
         * funçao setar rg 
         * @param String
         */
        public function setRG($RG){
            $this->RG = $RG;
        }

        /** 
         * funçao pegar rg 
         * @return String
         */
        public function getRG(){
            return $this->RG;
        }
    }

    $pessoa = new Pessoa();
    $pessoa->setNome("Pedro");
    $pessoa->setDataNascimento("12/05/2001");
    $pessoa->setCPF("154.685.235-24");
    $pessoa->setRG("145978365");

    class Engenheiro extends Pessoa{

        public $CREA;

        /** 
         * funçao setar crea 
         * @param String
         */
        public function setCrea($CREA){
            $this->CREA = $CREA;
        }

        /** 
         * funçao pegar crea
         * @return String
         */
        public function getCrea(){
            return $this->CREA;
        }
    }

    $engenheiro = new Engenheiro();
    $engenheiro->setNome("Henrique");
    $engenheiro->setDataNascimento("12/10/1998");
    $engenheiro->setCPF("285.442.180-20");
    $engenheiro->setRG("185694752");
    $engenheiro->setCrea("Engenheiro Mecânico");

    class Medico extends Pessoa{
        
        public $CRM;

        /** 
         * funçao setar crm 
         * @param String
         */
        public function setCrm($CRM){
            $this->CRM = $CRM;
        }

        /** 
         * funçao pegar crm 
         * @return String
         */
        public function getCrm(){
            return $this->CRM;
        }
    }

    $medico = new Medico();
    $medico->setNome("Paulo");
    $medico->setDataNascimento("25/09/1993");
    $medico->setCPF("923.456.143-53");
    $medico->setRG("165897456");
    $medico->setCRM("465872139");

    echo "Pessoa";
    echo "<br>";
    echo "Nome: " .$pessoa->getNome();
    echo "<br>";
    echo "Data de Nascimento: " .$pessoa->getDataNascimento();
    echo "<br>";
    echo "CPF: " .$pessoa->getCPF();
    echo "<br>";
    echo "RG: " .$pessoa->getRG();
    echo "<br>";

    echo "<br>";
    echo "Engenheiro";
    echo "<br>";
    echo "Nome: " .$engenheiro->getNome();
    echo "<br>";
    echo "Data de Nascimento: " .$engenheiro->getDataNascimento();
    echo "<br>";
    echo "CPF: " .$engenheiro->getCPF();
    echo "<br>";
    echo "RG: " .$engenheiro->getRG();
    echo "<br>";
    echo "CREA: " .$engenheiro->getCrea();
    echo "<br>";

    echo "<br>";
    echo "Médico";
    echo "<br>";
    echo "Nome: " .$medico->getNome();
    echo "<br>";
    echo "Data de Nascimento: " .$medico->getDataNascimento();
    echo "<br>";
    echo "CPF: " .$medico->getCPF();
    echo "<br>";
    echo "RG: " .$medico->getRG();
    echo "<br>";
    echo "CRM: " .$medico->getCrm();
    echo "<br>";
    ?>