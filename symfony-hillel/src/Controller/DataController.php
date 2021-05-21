<?php

namespace App\Controller;

use App\Repository\DataRepo;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DataController extends AbstractController
{
    /**
     * @Route("/data/get", name="data")
     */

    public function getJsonData(DataRepo $dataRepo): JsonResponse
    {
        return new JsonResponse([$dataRepo->data()]);
    }

}
