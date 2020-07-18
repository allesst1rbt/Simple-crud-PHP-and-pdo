<?php
class UserService{
    private $conexao;
	private $user;

	public function __construct(Conexao $conexao, User $user) {
		$this->conexao = $conexao->conectar();
        $this->user = $user;
    }
    public function cadastro() { //create
        $query = '
        insert into users(Nome, Email, Objetivo, Descricao, Telefone)values(?,?,?,?,?)
        ';
		$stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1, $this->user->__get('nome'));
        $stmt->bindValue(2, $this->user->__get('email'));
        $stmt->bindValue(3, $this->user->__get('objetivo'));
        $stmt->bindValue(4, $this->user->__get('descricao'));
        $stmt->bindValue(5, $this->user->__get('telefone'));
		$stmt->execute();
    }
    public function recuperar() { //read
        $query = '
            select
                u.Nome, u.Email, u.Objetivo, u.Descricao, u.Telefone
            from
                users as u
         ';
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

  

    public function remover() { //delete
        $query = '
            delete from 
                users 
            where 
                Email = :email
        ';
        $stmt=$this->conexao->prepare($query);
        $stmt->bindValue(':email', $this->user->__get('email'));
        $stmt->execute();
    }
        
}


?>
