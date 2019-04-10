<?php
declare(strict_types=1);

namespace App\Order\Domain\Entity;

use App\Order\Domain\ValueObject\OrderId;

class Order 
{
    /**
     * @var OrderId id
     */
    protected $id;

    /**
     * @var float $value
     */
    protected $value;

    /**
     * Order constructor
     *
     * @param OrderId $id
     * @param float $value
     */
    public function __construct(OrderId $id, float $value)
    {
        $this->id = $id;
        $this->value = $value;
    }

    /**
     * Getter for ID
     *
     * @return OrderId
     */
    public function getId(): OrderId
    {
        return $this->id;
    }

    /**
     * Getter for value
     *
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * Setter for value
     *
     * @param float $value
     * @return Order
     */
    public function setValue(float $value): Order
    {
        $this->value = $value;
        return $this;
    }

    // some actions
}