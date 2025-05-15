<?php

$hostname = '127.0.0.1';
$username = 'root';
$password = '';
$databasename = 'iron_man';

$limit = $_GET['limit'] == '' ? 0 : $_GET['limit'];

$query = 'SELECT * FROM members LIMIT ' . $limit;

$connect = new mysqli($hostname, $username, $password, $databasename);
$result = $connect->query($query);

while ($data = $result->fetch_assoc()) {
		echo $data['id'] . ' - ' . 
			$data['member_id'] . ' - ' .
			$data['name'] . ' - ' .
			$data['phone_number'] . ' - ' . 
			$data['created_at'] . "<br>";
}

echo "<a href='day8.html'>ж^нье╗н╢</a>";