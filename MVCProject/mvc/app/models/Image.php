<?php
class Image extends Database {
		
	/**
	 * Gets all users from the database, but without revealing their password hash
	 */
		public function get_image ($img_id) {
			$result = $this->select_one ("img", "image_id", $img_id);
			return $result;
		}

		public function get_images () {
			$result = $this->get_all ("img");
		$sql = "SELECT * FROM img";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}



	/**
	 * Gets a single user from the database
	 */
	public function get_userimages ($username) {

		$sql = "SELECT * FROM img WHERE user = :username";
		
		$stmt = $this->conn->prepare($sql);
		$stmt->bindParam(':username', $username, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

		public function upload() {

		$user = $_SESSION['user']['username'];
		$title = filter_var ( $_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		$description = filter_var ( $_POST['image_text'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);	
		$image = $_FILES['image']['name'];
		$type = pathinfo($image, PATHINFO_EXTENSION);
		$data = file_get_contents($_FILES['image']['tmp_name']);
		$dataUri = 'data:image/' . $type . ';base64,' . base64_encode($data);

		$sql = "INSERT INTO img (image, title, description, user) VALUES (:image, :title, :description, :user);";
		
		$stmt = $this->conn->prepare($sql);
		$stmt->bindParam(':title', $title);
		$stmt->bindParam(':user', $user);
		$stmt->bindParam(':image', $dataUri);
		$stmt->bindParam(':description', $description);
		$stmt->execute();

	}


}