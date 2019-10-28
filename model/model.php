<?php
		require_once "config_db.php";

		class model extends config_db{

				function execute($query){
						return mysql_query($query);
				}

				function selectAll(){
						$query = "SELECT * FROM buku";
						return $this->execute($query);
				}

				function selectBook($id){
					$query = "select * from buku where id='$id'";
					return $this->execute($query);
				}

				function insertBook($isbn, $title, $author, $stock, $price){
						$query = "INSERT INTO 
									buku 
								(isbn, title, author, stock, price)
								VALUES ('$isbn', '$title', '$author', '$stock', '$price')";
						return $this->execute($query);
				}

				function updateBook($id, $isbn, $title, $author, $stock, $price){
					$query = "UPDATE buku SET 
								isbn='$isbn', 
								title='$title', 
								author='$author', 
								stock='$stock', 
								price='$price' 
							WHERE id='$id'";
					return $this->execute($query);
				}

				function delete($id){
					$query = "DELETE FROM buku WHERE id='$id'";
					return $this->execute($query);
				}

				function fetch($var){
						return mysql_fetch_array($var);
				}

	}

?>
