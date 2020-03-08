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
            $audios = [
                'step-1' => 'https://picsum.photos/200/300',
                'step-2' => 'https://picsum.photos/200/300',
                'step-3' => 'https://picsum.photos/200/300',
                'step-4' => 'https://picsum.photos/200/300',
            ];

            return $this->createResponse($audios, Response::HTTP_OK);

        } catch (\Exception $ex) {
            return $this->createResponse($ex, $ex->getCode());
        }
    }
}