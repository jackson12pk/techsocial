<?php

#[ORM\Entity]
#[ORM\Table(name: 'orders')]
class Order
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int|null $id = null;
    
    #[ORM\Column(type: 'integer')]
    private int $user_id;

    #[ORM\Column(type: 'string')]
    private string $description;
    
    #[ORM\Column(type: 'integer')]
    private int $quantity;

    #[ORM\Column(type: 'decimal')]
    private float $price;
    
    #[ORM\Column(type: 'string')]
    private string $created_at;

    #[ORM\Column(type: 'string')]
    private string $updated_at;
    
}