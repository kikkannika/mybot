<?php
$access_token = 'B7Z57lWCfb+VQJRs7MNrZ8KEqF/jB+PRrSRlaBq1IHsEWO/XBTVWfcRVwhvsfRZ7YKcVHJaOz3HqQW2HGDIW0tIsnHN64Pqij+McjAYgIqn4X5BV+qVo+U0hDAiwa+JaZeDmR+fscJpMYZWJaTIlKgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>