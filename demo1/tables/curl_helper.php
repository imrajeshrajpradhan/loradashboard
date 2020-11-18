<?php
// This class has all the necessary code for making API calls thru curl library

class CurlHelper {

// This method will perform an action/method thru HTTP/API calls
// Parameter description:
// Method= POST, PUT, GET etc
// Data= array("param" => "value") ==> index.php?param=value
public static function perform_http_request($method, $url, $data = false)
{
    $curl = curl_init();

    switch ($method)
    {
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);

            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
			    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Accept:application/json' , 'Content-Length: ' . strlen($data)));
				curl_setopt($curl, CURLOPT_HTTPHEADER, array('Accept:application/json' , 'Authorization: ' . 'jcf9NF5Tnwn4TyMPq8rNOWBNvUcX6DoBfshsOVuZIw4rLYB9Jesq3Y9JLxiYnqcW'));
				break;
        case "PUT":
            curl_setopt($curl, CURLOPT_PUT, 1);
            break;
        default:
			curl_setopt($curl, CURLOPT_HTTPHEADER, array('Accept:application/json' , 'Authorization: ' . $_SESSION["jwt_token"]));
            if ($data)
                $url = sprintf("%s?%s", $url, http_build_query($data));
			    
    }

    // Optional Authentication:
    //curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    //curl_setopt($curl, CURLOPT_USERPWD, "alekosadmin:alekosadmin");

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);

	curl_setopt ($curl, CURLOPT_CAINFO, dirname(__FILE__)."\LoraServer.crt");
//	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);

    $result = curl_exec($curl);
    print_r($result);
if (curl_errno($curl)) {

   // this would be your first hint that something went wrong
   die('Couldn\'t send request: ' . curl_error($curl));
} else {	   
	   $resultStatus = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    if ($resultStatus == 200) {
        // everything went better than expected
    } else {
        // the request did not complete as expected. common errors are 4xx
        // (not found, bad request, etc.) and 5xx (usually concerning
        // errors/exceptions in the remote script execution)
		$_SESSION['msg']="Invalid parameters";
		//header("location:index.php");
		// die('Request failed: HTTP status code: ' . $resultStatus);
    }
}
    curl_close($curl);
    return $result;
}
public static function perform_http_request_2($method, $url, $data = false)
{
    $curl = curl_init();

    switch ($method)
    {
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);

            if ($data)

                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                /*curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Accept:application/json' , 'Content-Length: ' . strlen($data)));*/
                curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/vnd.onem2m-res+json;ty=4','X-M2M-Origin:C44F19F27-49502213','X-M2M-RI:7583019','Accept:application/vnd.onem2m-res+json','Authorization:Basic QzQ0RjE5RjI3LTQ5NTAyMjEzOnRlc3RAMTIz'));
                break;
        case "PUT":
            curl_setopt($curl, CURLOPT_PUT, 1);
            break;
        default:
            curl_setopt($curl, CURLOPT_HTTPHEADER, array('Accept:application/json' , 'Authorization: ' . $_SESSION["jwt_token"]));
            if ($data)
                $url = sprintf("%s?%s", $url, http_build_query($data));
                
    }

    // Optional Authentication:
      curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type:application/vnd.onem2m-res+json;ty=4',
        'X-M2M-Origin:C44F19F27-49502213',
        'X-M2M-RI:7583019',
        'Accept:application/vnd.onem2m-res+json',
        'Authorization:Basic QzQ0RjE5RjI3LTQ5NTAyMjEzOnRlc3RAMTIz'));
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($curl, CURLOPT_USERPWD, "C44F19F27-49502213:test@123");
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

//    curl_setopt ($curl, CURLOPT_CAINFO, dirname(__FILE__)."\LoraServer.crt");
//    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);

    $result = curl_exec($curl);
    //print_r($result);
if (curl_errno($curl)) {

   // this would be your first hint that something went wrong
   die('Couldn\'t send request: ' . curl_error($curl));
} else {       
       $resultStatus = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    if ($resultStatus == 200) {
        // everything went better than expected
    } else {
        // the request did not complete as expected. common errors are 4xx
        // (not found, bad request, etc.) and 5xx (usually concerning
        // errors/exceptions in the remote script execution)
        $_SESSION['msg']="Invalid parameters";
        //header("location:index.php");
        // die('Request failed: HTTP status code: ' . $resultStatus);
    }
}
    curl_close($curl);
    return $result;
}
public static function perform_http_request_3($post_data)
{

   /* $post_data = '{
       "deviceName": "Pit",
       "devEUI": "111",
       "data": "Pit Data",
       "fCnt": "222",
       "devAddr": "333",
       "time": "today"
    }';*/

    $data = json_encode(json_decode($post_data, true));
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://node-test.testbase.info/ethereum/add-data");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array( 'Content-Type: application/json',
                                                'authorization: jcf9NF5Tnwn4TyMPq8rNOWBNvUcX6DoBfshsOVuZIw4rLYB9Jesq3Y9JLxiYnqcW'));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $response = curl_exec($ch);
    print_r($response);exit;
    $decode_response = json_decode($response);
    curl_close($ch);

}



}
?>