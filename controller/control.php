<?php

		require_once "model/model.php";
		require_once "helpers/func_helper.php";

		class controller{

				public $model;

				function __construct(){
						$this->model = new model();
				}

				function index(){
						$book_data = $this->model->selectAll();
						$content = 'main';
						require_once "view/template.php";
				}

				function contentAdd(){
						require_once "view/add.php";
				}

				function insert(){
						$isbn 	= $_POST['isbn'];
						$title 	= $_POST['title'];
						$author = $_POST['author'];
						$stock 	= $_POST['stock'];
						$price 	= $_POST['price'];

						$insert = $this->model->insertBook($isbn, $title, $author, $stock, $price);
						header("location:index.php");
				}

				function contentUpdate($id){
						$id_decr 	= encryptor('decrypt', $id);
						$data 		= $this->model->selectBook($id_decr);
						$row 		= $this->model->fetch($data);
						require_once "view/update.php";
				}

				function update(){
						$id 	= encryptor('decrypt', $_POST['id']);
						$isbn 	= $_POST['isbn'];
						$title 	= $_POST['title'];
						$author = $_POST['author'];
						$stock 	= $_POST['stock'];
						$price 	= $_POST['price'];

						$update = $this->model->updateBook($id, $isbn, $title, $author, $stock, $price);
						header("location:index.php");
				}

				function delete($id){
						$id_decr = encryptor('decrypt', $id);
						$delete = $this->model->delete($id_decr);
						header("location:index.php");
				}

	}


?>
