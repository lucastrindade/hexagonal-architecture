<?php
declare(strict_types=1);

namespace App\Order\Domain\Repository;

use App\Order\Domain\Entity\Order;

interface OrderRepository 
{
    /**
     * Store the order
     *
     * @param Order $order
     * @return void
     */
    public function save(Order $order);
}