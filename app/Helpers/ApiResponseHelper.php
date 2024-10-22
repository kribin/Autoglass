<?php
namespace App\Helpers;
use Symfony\Component\HttpFoundation\Response;

class ApiResponseHelper{
	public static function validationError($message, $status='0'){
		return array(
	            	'status'    => $status,
	            	'statusCode'=> Response::HTTP_BAD_REQUEST, //400
	            	'message'   => $message
				);
	}

	public static function accessDenied($message, $status='0'){
		return array(
	            	'status'    => $status,
	            	'statusCode'=> Response::HTTP_FORBIDDEN, //403
	            	'message'   => $message
				);
	}

	public static function unauthorized($message, $status='0'){
		return array(
	            	'status'    => $status,
	            	'statusCode'=> Response::HTTP_UNAUTHORIZED, //401
	            	'message'   => $message
				);
	}

	public static function forbidden($message, $status='0'){
		return array(
	            	'status'    => $status,
	            	'statusCode'=> Response::HTTP_FORBIDDEN,//403
	            	'message'   => $message
				);
	}

	public static function getData($data, $status='1'){
		$toreturn = array(
	                'status'    => $status,
	                'statusCode'=> Response::HTTP_OK,//200
	                'message'   => ['Data Found!!!'],
	                'response'      => $data
				  );
		return $toreturn;
	}

	public static function notFound($status='0'){
		return array(

	                  'status'    => $status,
	                  'statusCode'=> Response::HTTP_NOT_FOUND, //404
	                  'message'   => ['No Data Available!!!'],
	                  'count'     => '0'
	              );
	}

	public static function create($data, $message, $status='1'){
		return array(
	                'status'    => $status,
	                'statusCode'=> Response::HTTP_CREATED, //201
	                'message'   => $message,
	                'response'      => $data
	            );
	}

	public static function updateError($message, $status='0'){
		return array(

	                  'status'    => $status,
	                  'message'   => $message,
	                  'statusCode'=> Response::HTTP_FORBIDDEN,//403
	                );
	}

	public static function successMessage($message, $status='1'){
		return array(
	                  "status" => $status,
	                  'statusCode' => Response::HTTP_OK, //200
	                  'message' => $message
	                );
	}

	public static function errorMessage($message, $status='0'){
		return array(
	                  "status" => $status,
	                  'statusCode' => Response::HTTP_FORBIDDEN,//403
	                  'message' => $message
	                );
	}


	public static function loginSuccessful($data, $token, $status='1'){
		return array(
	                'status'    => $status,
	                'statusCode'=> 200,
	                'message'   => ['Login Successful!!!'],
	                'api_token'      => $token,
	                'response'      => $data
	              );
	}
	public static function versionResponse($message,$forceUpdate,$status='1'){
		return array(
	                'status'    => $status,
	                'statusCode'=> Response::HTTP_OK, //200
	                'forceUpdate' => $forceUpdate,
	                'message' => $message,

	              );
	}
}
?>
