<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Cache(smaxage=100, public=true)
 */
class TestController
{
    /**
     * @Route("/")
     */
    public function testAction()
    {
        return new Response('');
    }
}
