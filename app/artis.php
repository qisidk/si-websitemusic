<?php
class artis{
	private $db;
	public function __construct()
	{
		try{
			$this->db = new PDO("mysql:host=localhost;dbname=dbmusik", "root", "");
		} catch (PDOException $e){
			die ("Error " . $e->getMessage());
		}
	}
	public function tampil()
	{
		$sql = "select * from artist";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];
		while ($rows = $stmt->fetch()){
			$data[] = $rows;
		}
      		return $data;
	}

	public function input() {
		if(isset($_POST['submit'])){
		$id     	 = $_POST['artist_id'];
		$nama_artis  = $_POST['artist_name'];

		$sql = "INSERT INTO artist (artist_id, artist_name) VALUES (:artist_id, :artist_name)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":artist_id", $id);
		$stmt->bindParam(":artist_name", $nama_artis);
		$stmt->execute();

		return false;
	}
}
	public function delete($id)
	{
		$sql = "DELETE FROM artist WHERE artist_id='$id'";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":artist_id", $id);
		$stmt->execute();

		return false;
	}
}