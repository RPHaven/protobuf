<?php

declare(strict_types=1);

namespace Rphaven\Common\Utils\Uid;

use DateTimeImmutable;
use DateTimeInterface;
use RpHaven\App\Correlation\CorrelationId;
use Symfony\Component\Uid\Ulid;

final readonly class CorrelationUlid implements CorrelationId
{
    public static function init(DateTimeInterface $dateTime = new DateTimeImmutable()): self
    {
        return self::fromString(Ulid::generate($dateTime));
    }

    public static function fromString(string $uid): self
    {
        return new self(Ulid::fromString($uid));
    }

    private function __construct(public Ulid $ulid)
    {

    }

    public function __toString(): string
    {
        return $this->toString();
    }

    public function toString(): string
    {
        return $this->ulid->toRfc4122();
    }

    public function getDateTime(): DateTimeImmutable
    {
        return $this->ulid->getDateTime();
    }
}