<?php
declare(strict_types=1);

namespace App\Order\Infrastructure\Persistence\Doctrine;

use App\Order\Domain\Repository\OrderRepository;
use App\Order\Domain\Entity\Order;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;

class DoctrineOrderRepository extends EntityRepository implements OrderRepository
{
    /**
     * Returns an Order by identification
     *
     * @param integer $id
     * @return Order
     */
    public function fromId(int $id): Order
    {
        $order = $this->find($id);
        if (empty($order)) {
            throw new \InvalidArgumentException('Invalid order id');
        }

        return $order;
    }

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