<?php
class played{
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
		$sql = "select * from played";
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
		$sql = "DELETE FROM played WHERE artist_id='$id'";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":artist_id", $id);
		$stmt->execute();

		return false;
	}
}