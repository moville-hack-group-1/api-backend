<?php

namespace ApiBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class ContentController
 * @Route("/audio")
 *
 * @author Rafael Silveira <rsilveiracc@gmail.com>
 * @package ApiBundle\Controller
 */
class AudioController extends AbstractController
{
    /**
     * @Route("/", name="api_audio")
     * @Method({"GET", "OPTIONS"})
     * @param Request $request
     * @return JsonResponse
     */
    public function contentAction(Request $request)
    {
        try {
            $audios = [
                'step-1' => '/audio/step1-juicy.mp3',
                'step-2' => '/audio/step2-juicy.mp3',
                'step-3' => '/audio/step3-juicy.mp3',
                'step-4' => '/audio/step4-juicy.mp3',
            ];

            return $this->createResponse($audios, Response::HTTP_OK);

        } catch (\Exception $ex) {
            return $this->createResponse($ex, $ex->getCode());
        }
    }
}