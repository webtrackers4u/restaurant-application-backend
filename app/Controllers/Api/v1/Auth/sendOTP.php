<?php

namespace App\Controllers\Api\v1\Auth;
use  App\Controllers\BaseController;
use App\Libraries\JWTHelper;
use App\Models\OTPRecordsModel;
use App\Models\RBContactModel;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Moment\Moment;
use Moment\MomentException;
use Psr\Log\LoggerInterface;
use function Sodium\add;

class sendOTP extends BaseController
{
    private $rbContactModel;
    private $OTPRecordsModel;
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger); // TODO: Change the autogenerated stub

    }

    public function index()
    {

        $this->rbContactModel = new RBContactModel();
        $this->OTPRecordsModel = new OTPRecordsModel();

        $phone = $this->request->getPost("phone");


        $checkUser = $this->rbContactModel->where('phone', $phone)->first();


        if (!$checkUser) return $this->response->setStatusCode(401)->setJSON([
            "status"=>401,
            "message"=>"Username or password is invalid"
        ]);
        $otp = 422748;
        $expiresAt = (new Moment())->addHours(1)->format("Y-m-d H:i:s");

        $newOTP = $this->OTPRecordsModel->insert([
            "otp"=>$otp,
            "expiresAt"=>$expiresAt,
            "type"=>0,
            "rbcontactId"=>$checkUser["rbcontactId"]
        ]);


        $data = [
            "status"=>200,
            "message"=>"OTP sending successful",
            "data"=>[
                "otp"=>$otp,
            ]
        ];
        return $this->response->setJSON($data);
    }
}
