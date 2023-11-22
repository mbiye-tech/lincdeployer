<?php
// include script with functions
include 'plugin_Ecom.php';


if ($_SERVER['REQUEST_METHOD'] === 'GET') { ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Equity Payment API Test</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <form action="" method="post" class="w-5/6 lg:w-1/3 mx-auto my-12 py-12 px-8 shadow rounded-md">
    <img src="https://platform.linc.cd/assets/images/logoIcon/logo.png" class="block mx-auto h-16" />
    <label class="block w-full mb-2">Montant (USD)
      <input type="number" name="amount" required min="1" class="w-full px-5 py-1 border border-gray-300 rounded focus:ring block mt-1" step="0.01">
    </label>
    <label class="block w-full mb-2">Email
      <input type="email" name="email" required  class="w-full px-5 py-1 border border-gray-300 rounded focus:ring block mt-1">
    </label>
    <label class="block w-full mb-2">Téléphone
      <input type="tel" name="phone" required  class="w-full px-5 py-1 border border-gray-300 rounded focus:ring block mt-1">
    </label>
    <label class="block w-full mb-2">Adresse
      <textarea name="address" required  class="w-full px-5 py-1 border border-gray-300 rounded focus:ring block mt-1" rows="3"></textarea>
    </label>
    <button type="submit" class="w-full block py-3 text-center bg-indigo-500 text-white cursor-pointer rounded mt-5 hover:bg-indigo-600">Payer</button>
  </form>
</body>
</html>
<?php }else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     // getting response with given parameters
    $response = createOrder('CreateOrder',  //Operation
    						'EN',  //Language
    						'TEST_ECOM449',  //MerchantID
    						floatval($_POST['amount'])*100,  //Amount, two last digits are decimalsAmount, two last digits are decimals
    						'840',  //Currency code 978-Eur, 840-USD, 936-GHC, 976-CDF
    						'Your order description',  //Description
    						'https://platform.linc.cd/apitest/approve.php', //ApproveURL
    						'https://platform.linc.cd/apitest/cancel.php',  //CancelURL
    						'https://platform.linc.cd/apitest/decline.php',  //DeclineURL
    						'Purchase',  //OrderType
    						$_POST['email'], //order email
    						$_POST['phone'], //order phone number if any
    						'156', //order shipping country code
    						'Kinshasa', //order shipping city if any
    						'32', //order delivery period in days if any
    						'E643C1426056', //merchant external ID for the order if any
    						'Kinshasa', //order shipping state if any
    						'000000', //order zip code
    						$_POST['address']); // order shipping address
}




						
?>