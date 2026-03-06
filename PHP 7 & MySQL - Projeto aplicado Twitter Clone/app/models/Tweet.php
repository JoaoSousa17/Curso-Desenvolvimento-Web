<?php

    namespace App\Models;

    use MF\Model\Model;

    class Tweet extends Model{
        private $id;
        private $id_usuario;
        private $tweet;
        private $data;

        public function __get($attr){
            return $this->$attr;
        }

        public function __set($attr, $valor){
            $this->$attr = $valor;
        }

        public function salvar(){
            $query = "insert into tweets(id_usuario, tweet) values(:id, :tweet)";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':id', $this->__get('id_usuario'));
            $stmt->bindValue(':tweet', $this->__get('tweet'));
            $stmt->execute();

            return $this;
        }


        public function getAll(){
            $query = " select T.id, T.id_usuario, T.tweet, DATE_FORMAT(T.data, '%d/%m/%Y %H:%i') as data, U.nome from tweets as T left join tb_usuarios as U on (T.id_usuario = U.id) where id_usuario = :id_usuario or T.id_usuario in (select id_usuario_seguindo from usuarios_seguidores where id_usuario = :id_usuario) order by T.data DESC";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':id_usuario', $this->__get('id_usuario'));
            $stmt->execute();

            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }

        public function getPorPagina($limit, $offset){
            $query = "select T.id, T.id_usuario, T.tweet, DATE_FORMAT(T.data, '%d/%m/%Y %H:%i') as data, U.nome from tweets as T left join tb_usuarios as U on (T.id_usuario = U.id) where id_usuario = :id_usuario or T.id_usuario in (select id_usuario_seguindo from usuarios_seguidores where id_usuario = :id_usuario) order by T.data DESC limit $limit offset $offset";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':id_usuario', $this->__get('id_usuario'));
            $stmt->execute();

            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }

        
        public function getTotalRegistos(){
            $query = "select count(*) as total from tweets as T left join tb_usuarios as U on (T.id_usuario = U.id) where id_usuario = :id_usuario or T.id_usuario in (select id_usuario_seguindo from usuarios_seguidores where id_usuario = :id_usuario)";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':id_usuario', $this->__get('id_usuario'));
            $stmt->execute();

            return $stmt->fetch(\PDO::FETCH_ASSOC);
        }
    }

?>