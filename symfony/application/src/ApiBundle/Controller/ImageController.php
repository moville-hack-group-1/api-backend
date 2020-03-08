<?php

namespace ApiBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class ImageController
 * @Route("/image")
 *
 * @author Rafael Silveira <rsilveiracc@gmail.com>
 * @package ApiBundle\Controller
 */
class ImageController extends AbstractController
{
    /**
     * @Route("/", name="api_image")
     * @Method({"GET", "OPTIONS"})
     * @param Request $request
     * @return JsonResponse
     */
    public function contentAction(Request $request)
    {
        try {
            $images = [
                ['step-1' => '/images/step-1.png', 'alt' => 'Lorem Ipsum'],
                ['step-2' => '/images/step-2.png', 'alt' => 'Lorem Ipsum'],
                ['step-3' => '/images/step-3.png', 'alt' => 'Lorem Ipsum'],
                ['step-4' => '/images/step-4.png', 'alt' => 'Lorem Ipsum']
            ];

            return $this->createResponse($images, Response::HTTP_OK);

        } catch (\Exception $ex) {
            return $this->createResponse($ex, $ex->getCode());
        }
    }
}