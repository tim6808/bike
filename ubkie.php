
<?php
// echo  "open \n";
// // $string = file_get_contents("http://60.249.48.94/gwjs.json");
// // echo  "open \n";
//  echo  "<br>";
// // $json_a=json_decode($string,true);
// // echo  $json_a['John'][status];
// // echo  $json_a['Jennifer'][status];
// // echo  "open";

// $json_url = 'http://60.249.48.94/gwjs.json';
// $result =  curl_exec($json_url); // Getting jSON result string
// echo  $result;
// echo  "___";


$url="http://60.249.48.94/gwjs.json";
 // Get cURL resource
 // $curl = curl_init();
 // // Set some options - we are passing in a useragent too here
 // curl_setopt_array($curl, array(
 //     CURLOPT_URL => $url
 // ));
 // Send the request & save response to $resp
 //$resp = curl_exec($curl);
 // Close request to clear up some resources
 //curl_close($curl);
 //$result = json_decode($resp);
//$cart = json_decode($resp);
//$cart = json_decode(curl_exec($curl));

// echo $cart->ar."";
 //echo $cart->retVal[0]->ar."";

//http://expect7.pixnet.net/blog/post/36428081-%5B%E7%A8%8B%E5%BC%8F%5D%5Bphp%5D-%E5%A6%82%E4%BD%95%E4%BD%BF%E7%94%A8php-curl%EF%BC%8C%E5%9F%BA%E7%A4%8E%E6%95%99%E5%AD%B8%E3%80%82
// 建立CURL連線
$ch = curl_init();

// 設定擷取的URL網址
//curl_setopt($ch, CURLOPT_URL, $url);
 curl_setopt_array($ch, array(
     CURLOPT_URL => $url
 ));
//curl_setopt($ch, CURLOPT_HEADER, false);
//將curl_exec()獲取的訊息以文件流的形式返回，而不是直接輸出。
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);

// 執行
$temp=curl_exec($ch);
//$cart = json_decode($temp);
// 關閉CURL連線
curl_close($ch);
echo $temp;
// echo $cart
// echo $cart->retVal[0]->iid."";
//http://stackoverflow.com/questions/4343596/parsing-json-file-with-php
// $jsonIterator = new RecursiveIteratorIterator(
//     new RecursiveArrayIterator(json_decode($temp, TRUE)),
//     RecursiveIteratorIterator::SELF_FIRST);


// foreach ($jsonIterator as $key => $val) {
//     if(is_array($val)) {
//         echo "$key:<p>";
//     } else {
//         echo "$key => $val<br>";
//     }
// }

?>


