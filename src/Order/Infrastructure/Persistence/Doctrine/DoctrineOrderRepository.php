<?php
declare(strict_types=1);

namespace App\Order\Infrastructure\Persistence\Doctrine;

use App\Order\Domain\Repository\OrderRepository;
use App\Order\Domain\Entity\Order;
use App\Order\Domain\ValueObject\OrderId;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;

class DoctrineOrderRepository extends EntityRepository implements OrderRepository
{
    /**
     * Return the next identity for a new Order
     *
     * @return OrderId
     */
    public function nextIdentity(): OrderId
    {
        return new OrderId(Uuid::uuid4()->toString());
    }

    /**
     * Returns an Order by identification
     *
     * @param OrderId $id
     * @return Order
     */
    public function fromId(OrderId $id): Order
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