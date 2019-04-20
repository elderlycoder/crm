<?php
$opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
$connect = new PDO ('mysql:host=localhost; dbname=crm; charset: utf8', 'root',  '', $opt);

