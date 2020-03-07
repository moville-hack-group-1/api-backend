<?php

namespace ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class AbstractController
 * @author Rafael Silveira <rsilveiracc@gmail.com>
 * @package ApiBundle\Controller
 */
abstract class AbstractController extends Controller
{
    /**
     * @param $responseContent
     * @param int $responseCode
     * @return JsonResponse
     */
    protected function createResponse($responseContent, $responseCode = null)
    {
        if ($responseContent instanceof \Exception) {
            $responseCode = !$responseCode ? 400 : $responseCode;

            return new JsonResponse(
                [
                    'data' => [
                        'message' => $responseContent->getMessage(),
                        'type' => 'error',
                        'status' => 'error',
                        'file' => $responseContent->getFile(),
                        'line' => $responseContent->getLine(),
                    ]
                ],
                $responseCode
            );
        }

        $responseCode = !$responseCode ? 200 : $responseCode;
        return new JsonResponse(
            $responseContent,
            $responseCode
        );
    }
}