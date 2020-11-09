<?php
// Istanzio una classe
class SelectPrint
{
	// Disabilito la variabile $conn all’accesso globale ad altri oggetti e funzioni
	protected $conn;
		//"Metodo Magico" per personalizzare e favorire i parametri di una classe 
		public function __construct()
		{
			$this->DbConnect();
		}
		// Connessione Database
		protected function DbConnect()
		{
			include "db_config.php";
			
			$this->conn = mysqli_connect($host,$user,$password) OR die("Impossibile connettersi al database");
			mysqli_select_db($this->conn,$db) OR die("Impossibile selezionare il database $db");
			
			return TRUE;
		}
		// // Funzione Mostra = COUNTRY
		public function ShowProvince()
		{
			// Seleziono la tabella e la ordino
			$sql = "SELECT * FROM province ORDER BY province.nome_provincia ASC";
			// Avvio il collegamento
			$res = mysqli_query($this->conn, $sql);
			$province = '<option value="0">Scegli...</option>';
			
				while($row = mysqli_fetch_array($res))
				{
					$province .= '<option value="' . $row['nome_provincia'] . '">' . utf8_encode($row['nome_provincia']) . '</option>';
				}
				
			return $province;
		}
		// Funzione Mostra = SECTOR JOB
		public function ShowJobSector()
		{
			$sql = "SELECT * FROM settore_lavoro ORDER BY settore_lavoro.job_sector ASC";
			$res = mysqli_query($this->conn, $sql);
			$jobsector = '<option id="0">Scegli...</option>';
			
				while($row = mysqli_fetch_array($res))
				{
					$jobsector .= '<option id="' . $row['id_job_sector'] . '" value="' . $row['job_sector'] . '">' . utf8_encode($row['job_sector']) . '</option>';
				}
				
			return $jobsector;
		}
		// Funzione Mostra = JOB
		public function ShowJob()
		{
			$sql = "SELECT * FROM posizione_lavoro WHERE id_job_sector=$_GET[id_job_sector] ORDER BY posizione_lavoro.job ASC";
			$res = mysqli_query($this->conn, $sql);
			$job = '<option id="id_job">Scegli...</option>';
			
				while($row = mysqli_fetch_array($res))
				{
					$job .= '<option id="' . $row['id_job'] . '" value="' . $row['job'] . '">' . utf8_encode($row['job']) . '</option>';
				}
				
			return $job;
		}
		// Funzione Mostra = AGE
		public function ShowAge()
		{
			$sql = "SELECT * FROM users ORDER BY users.age ASC";
			$res = mysqli_query($this->conn,$sql);
			$age = '<option value="0">Scegli...</option>';
			
				while($row = mysqli_fetch_array($res))
				{
					$age .= '<option value="' . $row['age'] .'">' . utf8_encode($row['age']) . '</option>';
				}
				
			return $age;
		}
		// Funzione Mostra = PRINT & SEARCH
		public function PrintSearch()
		{	
			// Bypasso errore se è indefinto
			if (isset($_POST['name'], $_POST['age'], $_POST['nome_provincia'], $_POST['job_sector'], $_POST['job'])) {
				# code...
				$name_users = ($_POST['name']);
				$age = ($_POST['age']);
				$name_provincia = ($_POST['nome_provincia']);
				$name_settore = ($_POST['job_sector']);
				$name_job = ($_POST['job']);
				
	
				$sql = "SELECT * FROM users, province, settore_lavoro, posizione_lavoro WHERE lower(name) LIKE '%$name_users%' AND age LIKE '%$age%' AND lower(nome_provincia) LIKE '%$name_provincia%' AND lower(job_sector) LIKE '%$name_settore%' AND lower(job) LIKE '%$name_job%' ORDER BY users.name ASC LIMIT 10 ";
				$res = mysqli_query($this->conn, $sql);
				while ($row = mysqli_fetch_array($res)) {
					// var_dump($row);
					echo '<div class="mt-3 border-top border-bottom">' 
					. '<div id=" '. $row['id_users'] .' ">' . utf8_encode($row['name']) . '</div>' 
					. '<div id=" '. $row['id_users'] .' ">' . utf8_encode($row['age']) . '</div>' .
					'<div id=" '. $row['id_users'] .' ">' . utf8_encode($row['nome_provincia']) . '</div>' .
					'<div id=" '. $row['id_users'] .' ">' . utf8_encode($row['job_sector']) . '</div>' .
					'<div id=" '. $row['id_users'] .' ">' . utf8_encode($row['job']) . '</div>' . 
					'</div>';
				}
			}
		}
}

?>