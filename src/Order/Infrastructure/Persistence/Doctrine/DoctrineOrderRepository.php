<?php
declare(strict_types=1);

namespace App\Order\Infrastructure\Persistence\Doctrine;

use App\Order\Domain\Repository\OrderRepository;
use App\Order\Domain\Entity\Order;
use Doctrine\ORM\EntityManager;

class DoctrineOrderRepository implements OrderRepository
{
    /**
     * Store the order
     *
     * @param Order $order
     * @return void
     */
    public function save(Order $order)
    {
        EntityManager::persist($order);
        EntityManager::flush();
    }
}