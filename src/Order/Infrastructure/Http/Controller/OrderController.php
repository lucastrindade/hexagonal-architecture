<?php
declare(strict_types=1);

namespace App\Order\Infrastructure\Http\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use App\Order\Application\Service\OrderService;
use App\Order\Domain\Repository\OrderRepository;

class OrderController 
{
    /**
     * @Inject
     * @var OrderService $service
     */
    private $service;

    /**
     * @Inject
     * @var OrderRepository $repository
     */
    private $repository;

    /**
     * Find an Order
     *
     * @param Request $request
     * @param Response $response
     * @param integer $id
     * @return Response
     */
    public function show(ServerRequestInterface $request, ResponseInterface $response, int $id)
    {
        return $response->withJson($this->repository->fromId($id));
    }

    /**
     * Store a new order
     *
     * @param Request $request
     * @param Response $response
     * @return Response
     */
    public function save(ServerRequestInterface $request, ResponseInterface $response)
    {
        $data = $request->getParsedBody();
        return $response->withJson($this->service->createNewOrder((float)$data['value']));
    }
}