<?php

namespace App\Controllers\Api\v1\Auth;
use  App\Controllers\BaseController;
use App\Libraries\JWTHelper;
use App\Models\OTPRecordsModel;
use App\Models\RBContactModel;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Moment\Moment;
use Psr\Log\LoggerInterface;

class SignUp extends BaseController
{
    private $rbContactModel, $OTPRecordsModel;
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger); // TODO: Change the autogenerated stub

    }

    public function index()
    {
        $this->rbContactModel = new RBContactModel();
        $this->OTPRecordsModel = new OTPRecordsModel();


        $phone = $this->request->getPost("phone");
        $name = $this->request->getPost("name");

        $checkUser = $this->rbContactModel->where('phone', $phone)->first();



        if ($checkUser) return $this->response->setStatusCode(401)->setJSON([
            "status"=>401,
            "message"=>"User Already exist please login"
        ]);

        $user = $this->rbContactModel->insert([
            "person" => $name,
            "phone" => $phone,
        ]);


        $otp = 422748;
        $expiresAt = (new Moment())->addHours(1)->format("Y-m-d H:i:s");

        $newOTP = $this->OTPRecordsModel->insert([
            "otp"=>$otp,
            "expiresAt"=>$expiresAt,
            "type"=>0,
            "rbcontactId"=>$user["rbcontactId"]
        ]);

        $data = [
            "status"=>200,
            "message"=>"Registration successful",
        ];
        return $this->response->setJSON($data);
    }
}