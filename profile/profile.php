<?php
$data = file_get_contents('data.json');
$data = json_decode($data, true);
echo $data['username'];
