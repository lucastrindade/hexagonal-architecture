<?php
declare(strict_types=1);

namespace App\Order\Domain\Repository;

use App\Order\Domain\Entity\Order;

interface OrderRepository 
{
    /**
     * Returns an Order by identification
     *
     * @param integer $id
     * @return Order
     */
    public function fromId(int $id): Order;

    /**
     * Store the order
     *
     * @param Order $order
     * @return void
     */
    public function save(Order $order);
}