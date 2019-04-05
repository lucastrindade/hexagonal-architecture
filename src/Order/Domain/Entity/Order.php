<?php
declare(strict_types=1);

namespace App\Order\Domain\Entity;

class Order 
{
    /**
     * @var int id
     */
    protected $id;

    /**
     * Order constructor
     *
     * @param integer $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }
}