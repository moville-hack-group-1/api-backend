<?php

namespace ApiBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class MainController
 * @Route("/")
 *
 * @author Rafael Silveira <rsilveiracc@gmail.com>
 * @package ApiBundle\Controller
 */
class MainController extends AbstractController
{
    /**
     * @Route("/", name="api_main")
     * @Method({"GET", "OPTIONS"})
     * @param Request $request
     * @return JsonResponse
     */
    public function mainAction(Request $request)
    {
        try {
            $json = "{
  \"step-1\": [
    {
      \"title\": \"Ola title 1\",
      \"text\": \"Morbi dictum id eros sit amet mattis. Aliquam quis nulla mollis, feugiat ipsum ut, euismod mauris. Sed at condimentum diam. Cras eleifend neque eu tristique porttitor. Etiam non augue ex. Praesent at ultrices mauris. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.\"},
    {\"image\": \"https://i.picsum.photos/id/99/200/300.jpg\",
      \"alt\": \"Lorem Ipsum\"
    },
    {\"audio\": \"http://kolber.github.io/audiojs/demos/mp3/juicy.mp3\"}
    ],
    \"step-2\": [
    {
      \"title\": \"Ola title 2\",
      \"text\": \"Morbi dictum id eros sit amet mattis. Aliquam quis nulla mollis, feugiat ipsum ut, euismod mauris. Sed at condimentum diam. Cras eleifend neque eu tristique porttitor. Etiam non augue ex. Praesent at ultrices mauris. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.\"},
    {\"image\": \"https://i.picsum.photos/id/99/200/300.jpg\",
      \"alt\": \"Lorem Ipsum\"
    },
    {\"audio\": \"http://kolber.github.io/audiojs/demos/mp3/juicy.mp3\"}
    ],
    \"step-3\": [
    {
      \"title\": \"Ola title 3\",
      \"text\": \"Morbi dictum id eros sit amet mattis. Aliquam quis nulla mollis, feugiat ipsum ut, euismod mauris. Sed at condimentum diam. Cras eleifend neque eu tristique porttitor. Etiam non augue ex. Praesent at ultrices mauris. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.\"
    },
    {\"image\": \"https://i.picsum.photos/id/99/200/300.jpg\",
      \"alt\": \"Lorem Ipsum\"
    },
    {\"audio\": \"http://kolber.github.io/audiojs/demos/mp3/juicy.mp3\"}
    ],
    \"step-4\": [
    {
      \"title\": \"Questionário\",
      \"text\": \"Morbi dictum id eros sit amet mattis. Aliquam quis nulla mollis, feugiat ipsum ut, euismod mauris. Sed at condimentum diam. Cras eleifend neque eu tristique porttitor. Etiam non augue ex. Praesent at ultrices mauris. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.\",
      \"answer-1\": \"resposta-1\",
      \"answer-2\": \"resposta-2\",
      \"answer-3\": \"resposta-3\",
      \"answer-4\": \"resposta-4\"
    },
    {\"image\": \"https://i.picsum.photos/id/99/200/300.jpg\",
      \"alt\": \"Lorem Ipsum\"
    },
    {\"audio\": \"http://kolber.github.io/audiojs/demos/mp3/juicy.mp3\"}
    ]
}";
            return $this->createResponse(json_decode($json), Response::HTTP_OK);

        } catch (\Exception $ex) {
            return $this->createResponse($ex, $ex->getCode());
        }
    }
}