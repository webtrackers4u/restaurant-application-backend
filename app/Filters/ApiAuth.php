<?php
namespace App\Filters;

use App\Libraries\JWTHelper;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\Response;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class ApiAuth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $request = service('request');
        // Do something here
        $token = $request->getHeaderLine("Authorization");
        $response = service('response');
        try {
            $payload = (array)JWTHelper::decode($token);
            $request->payload = $payload;
        } catch (\Exception $exception){
            $response->setStatusCode(401)->setJSON([
                "restult_code" => 401,
                "message"=> "Invalid Token Supplied"
            ]);
            return $response;
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {

    }
}
?>
