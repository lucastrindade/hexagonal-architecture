<?php
declare(strict_types=1);

namespace App\Order\Infrastructure\Http\Controller;

use App\Order\Application\Service\OrderService;

class OrderController 
{
    /**
     * @Inject
     * @var OrderService $service
     */
    private $service;

    /**
     * Find an Order
     *
     * @param Request $request
     * @param Response $response
     * @param integer $id
     * @return Response
     */
    public function show(Request $request, Response $response, int $id)
    {

    }

    /**
     * Store a new order
     *
     * @param Request $request
     * @param Response $response
     * @return Response
     */
    public function save(Request $request, Response $response)
    {
        $data = $request->getParsedBody();
        return $response->withJson($this->service->createNewOrder((float)$data['value']));
    }
}