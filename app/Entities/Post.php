<?php

namespace App\Entities;

use Bolero\Framework\Dbal\Entity;
use DateTimeImmutable;

class Post extends Entity
{
    public function __construct(
        private ?int                       $id,
        public readonly string             $title,
        public readonly string             $body,
        public readonly DateTimeImmutable $createdAt,
    )
    {
    }

    public static function create(
        ?string $title,
        ?string $body
    ): Post
    {

        return new self(null, $title, $body, new DateTimeImmutable());
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

}
