<?php

class Conexao {

	private $host = 'sql103.epizy.com';
	private $dbname = 'epiz_27723167_devweb2021';
	private $user = 'epiz_27723167';
	private $pass = 'H7QluGAULzgTmdP';

	public function conectar() {
		try {

			$conexao = new PDO(
				"mysql:host=$this->host;dbname=$this->dbname",
				"$this->user",
				"$this->pass"				
			);

			return $conexao;


		} catch (PDOException $e) {
			echo '<p>'.$e->getMessege().'</p>';
		}
	}
}

?>