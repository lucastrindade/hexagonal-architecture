<?php
declare(strict_types=1);

namespace App\Order\Infrastructure\Http\Controller;

use xxxx;

class OrderController 
{
    /**
     * @Inject
     * @var ServiceInterface $service
     */
    private $service;

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
        return $response->withJson($this->service->doStuff());
    }
}