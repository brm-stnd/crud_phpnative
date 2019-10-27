<?php

		class model{

				function __construct(){
						$koneksi = mysql_connect("localhost", "root", "");
						$db = mysql_select_db("crud_buku");
				}

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
