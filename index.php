<?php

		include 'controller/control.php';

		$main = new controller();

		if(isset($_GET['procUpdate'])){
				$main->update();
		}else if(isset($_GET['edit'])){
				$main->contentUpdate($_GET['edit']);
		}else if(isset($_GET['delete'])){
				$main->delete($_GET['delete']);
		}else if(isset($_GET['add'])){
				$main->contentAdd();
		}else if(isset($_GET['insert'])){
				$main->insert();
		}else{
				$main->index();
		}

?>
