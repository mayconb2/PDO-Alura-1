<?php


class Conexao
{
     static function pegarConexao()
    {
        $conexao = new PDO(DB_DRIVER .':host=' . DB_HOSTNAME . ';dbname=' . DB_DATABASE, DB_USERNAME, DB_PASSWORD);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conexao;
    }
}