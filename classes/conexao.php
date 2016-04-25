<?php

/* ----------------------------------------------
  Frameworks SWD
  Criado em 04/11/2011
  Autor: Vinícius Marques da Silva Ferreira
  Contato:profvmarques@gmail.com
  Projeto:sysduque  Criado em:25/09/2013
  ---------------------------------------------- */

class Acesso {
    /* +-------------------------------------------------------------------------------------------------------+|
      Este metodo que vai conecta ao banco de dados
      |+-------------------------------------------------------------------------------------------------------+ */

    public function Conexao() {
        /* LOCAL */
        //$this->cnx= mysql_connect('localhost','root','') or print (mysql_error());
        //mysql_select_db('sysduque', $this->cnx);
        /* WEB */
        $this->cnx= mysql_connect('localhost','fcaxias_sysduque','!@fcaxias_sysduque') or print (mysql_error());
        mysql_select_db('fcaxias_sysduque', $this->cnx);
    }

    public function Query($sql) {
        $this->result = mysql_query($sql) or die(mysql_error());
    }

    public function __destruct() {
        @mysqli_close($this->cnx);
    }

}

?> 