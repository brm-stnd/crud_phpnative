<?php
    class config_db{
     
        function __construct(){
            $host       =   'localhost';
            $username   =   'root';
            $password   =   '';
            $database   =   'crud_buku';

            $koneksi = mysql_connect($host, $username, $password);
			$db = mysql_select_db($database);
        }
        
    }
?>