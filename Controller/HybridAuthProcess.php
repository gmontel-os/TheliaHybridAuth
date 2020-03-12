<?php
/**
 * Created by PhpStorm.
 * User: tompradat
 * Date: 04/04/2016
 * Time: 10:53
 */

namespace TheliaHybridAuth\Controller;

use Thelia\Controller\Front\BaseFrontController;
use TheliaHybridAuth\TheliaHybridAuth;

class HybridAuthProcess extends BaseFrontController
{
    public function processAction()
    {
        TheliaHybridAuth::initHybridAuth();
    }
}