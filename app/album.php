<?php
class album{
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
		$sql = "select * from album";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];
		while ($rows = $stmt->fetch()){
			$data[] = $rows;
		}
      		return $data;
	}

	public function delete($id)
	{
		$sql = "DELETE FROM album WHERE album_id='$id'";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":album_id", $id);
		$stmt->execute();

		return false;
	}
}