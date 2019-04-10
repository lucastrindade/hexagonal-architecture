<?php
declare(strict_types=1);

namespace App\Order\Domain\ValueObject;

final class OrderId
{
    /**
     * @var string id
     */
    protected $id;

    /**
     * OrderId constructor
     *
     * @param string $id
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }

    /**
     * Returns the id
     *
     * @return string
     */
    public function id(): string
    {
        return $this->id;
    }

    /**
     * Compare two ids
     *
     * @param OrderId $id
     * @return boolean
     */
    public function equals(OrderId $id): bool
    {
        return $this->id() == $id->id();
    }
}