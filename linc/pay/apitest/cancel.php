<?php

$xml = base64_decode($_POST['xmlmsg']);
$xml = simplexml_load_string($xml);
$json = json_encode($xml);
$array = json_decode($json,TRUE);

file_put_contents('logs.txt', "\n$json", FILE_APPEND);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Equity Payment API Test</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <div class="fixed inset-0 flex items-center justify-center">
    <div class="w-5/6 lg:w-1/3 bg-white shadow py-20 text-center">
    <h1 class="font-bold text-red-500">Cancelled</h1>
    <span class="w-16 h-16 inline-flex items-center justify-center rounded-full bg-red-500 text-white">
    <i class="fa fa-times"></i>
    </span>
    <div class="text-left border p-3 rounded m-5 break-words"><?= $json ?></div>
    </div>
  </div>
</body>
</html>