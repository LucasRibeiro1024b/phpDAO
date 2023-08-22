<?php 

namespace PhpDAO\model;

class Contato {
    private $id;
    private $nome;
    private $email;
    private $endereco;
    private $dataNascimento;

	/**
	 * @return mixed
	 */
	public function getNome() {
		return $this->nome;
	}
	
	/**
	 * @param mixed $nome 
	 * @return self
	 */
	public function setNome($nome): self {
		$this->nome = $nome;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * @param mixed $id 
	 * @return self
	 */
	public function setId($id): self {
		$this->id = $id;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEmail() {
		return $this->email;
	}
	
	/**
	 * @param mixed $email 
	 * @return self
	 */
	public function setEmail($email): self {
		$this->email = $email;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEndereco() {
		return $this->endereco;
	}
	
	/**
	 * @param mixed $endereco 
	 * @return self
	 */
	public function setEndereco($endereco): self {
		$this->endereco = $endereco;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getDataNascimento() {
		return $this->dataNascimento;
	}
	
	/**
	 * @param mixed $dataNascimento 
	 * @return self
	 */
	public function setDataNascimento($dataNascimento): self {
		$this->dataNascimento = $dataNascimento;
		return $this;
	}
}
