<?php 
    class TarefaService{

        private $conexao;
        private $tarefa;

        public function __construct(Conexao $conexao, Tarefa $tarefa){
            $this-> conexao = $conexao->conectar();
            $this->tarefa = $tarefa;
        }

        public function inserir(){  // create
            $query = "insert into tb_tarefas(tarefa)values(:tarefa)";
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
            $stmt->execute();
        }

        public function recuperar(){    // read
            $query = "select T.id, S.status, T.tarefa 
                    from tb_tarefas as T
                    left join tb_status as S on (T.id_status = S.id)";
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function atualizar(){    // update
            $query = "update tb_tarefas set tarefa = :tarefa where id = :id";
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
            $stmt->bindValue(':id', $this->tarefa->__get('id'));
            return $stmt->execute();
        }

        public function remover(){  // delete
            $query = 'delete from tb_tarefas where id = ?';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1, $this->tarefa->__get('id'));
            return $stmt->execute();
        }

        public function marcarRealizada(){    // update
            $query = "update tb_tarefas set id_status = ? where id = ?";
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1, $this->tarefa->__get('id_status'));
            $stmt->bindValue(2, $this->tarefa->__get('id'));
            return $stmt->execute();
        }

        public function recuperarTarefasPendentes(){
            $query = "select T.id, S.status, T.tarefa 
                    from tb_tarefas as T
                    left join tb_status as S on (T.id_status = S.id)
                    where T.id_status = ?";
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1, $this->tarefa->__get('id_status'));
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
    }
?>