<?php
declare(strict_types=1);

namespace App\Order\Application\Service;

use Ramsey\Uuid\Uuid;

class OrderService
{
    /**
     * Order Repository
     *
     * @var OrderRepository $orderRepository
     */
    private $orderRepository;

    /**
     * OrderService constructor
     *
     * @param OrderRepository $orderRepository
     */
    public function __construct(OrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    /**
     * Create an new Order
     * Does some integration
     *
     * @param float $value
     * @return void
     */
    public function createNewOrder(float $value)
    {
        $userId = $this->orderRepository->nextIdentity();
        $order = new Order($userId, $value);
        $this->orderRepository->save($order);

        // fake logger
        \Logger::save('create order');
    }
}