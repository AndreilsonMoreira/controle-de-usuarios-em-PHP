<?php
class buscarDados
{
   public function buscardados($dadoBusca){
    include_once('model/dados.php');
       $Dados = new dados();
        $dadoBusca = trim($dadoBusca);
        if (empty($dadoBusca)) {
            $Entrada = $Dados->retornarDados("", "");
            return ($Entrada);
        } else {
            $Entrada = $Dados->retornarDados("name", $dadoBusca);
            if (empty($Entrada)) {
                $Entrada = $Dados->retornarDados("alphanumeric", $dadoBusca);
                return($Entrada);
            } else {
                return ($Entrada);
            }
        }
        
    }
};
