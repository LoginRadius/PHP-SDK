<?php
// src/Controller/LuckyController.php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class ApiController extends AbstractController
{
  public function __construct()
  {
    define('LR_API_KEY', '<API KEY>'); // Pass API Key
    define('LR_API_SECRET', '<API SECRETE>');  // Pass API Secret Key
    define('API_REQUEST_SIGNING', ''); // Pass boolean true/false for enable/disable
    define('AUTH_FLOW', '');   // Pass optional/disabled, if email verification flow optional or disabled, no need to mention if required flow
    
  }
    
}