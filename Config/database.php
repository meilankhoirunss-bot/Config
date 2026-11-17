<?php
// config/database. php

$host = ' localhost ' ;
$user = ' root ' ;
$pass = ' ' ;
$db = ' penjualan ' ;

// inisialisasi koneksidegan MySQLi secara object oriented
$koneksi = new mysqli($host, $user, $pass, $db);