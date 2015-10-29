<?php 
// require "../vendor/autoload.php";
// $client = new Google_Client();
// $client->setApplicationName("My Application");
// $client->setDeveloperKey("AIzaSyB-PRlR1snLpMFeDkvNHmH8UoW4-pv_7Jw");
$key = "AIzaSyClzC3syB5Ig4vpjgsvkHF2mEU9kTpi4C4";

$url = "https://www.googleapis.com/language/translate/v2?key=$key&source=en&target=vi&q=Hello";
echo $url;
echo "<hr>";
echo curl_get($url);
	function curl_get($url){
		$cookie = tmpfile();
		$userAgent = 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31' ;
		//$userAgent = 'Mozilla/5.0 (Windows NT 5.1; rv:31.0) Gecko/20100101 Firefox/31.0';
		$ch = curl_init($url);
		$options = array(
			CURLOPT_CONNECTTIMEOUT => 20 ,
			CURLOPT_USERAGENT => $userAgent,
			CURLOPT_AUTOREFERER => true,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_COOKIEFILE => $cookie,
			CURLOPT_COOKIEJAR => $cookie ,
			CURLOPT_SSL_VERIFYPEER => 0 ,
			CURLOPT_SSL_VERIFYHOST => 0
			);
		curl_setopt_array($ch, $options);
		$kl = curl_exec($ch);
		if($kl==false){
			$kl = file_get_contents($url);
		}
		$kl=preg_replace('/<script\b[^>]*>(.*?)<\/script>/i', "", $kl);
		$kl = preg_replace('#<script[^>]*>.*?</script>#is', '', $kl);
		$kl=preg_replace('/<ins\b[^>]*>(.*?)<\/ins>/i', "", $kl);
		curl_close($ch);
		return $kl;
	}
?>