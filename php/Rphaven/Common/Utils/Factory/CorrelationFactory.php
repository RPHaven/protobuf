<?php

declare(strict_types=1);

namespace Rphaven\Common\Utils\Factory;

use RpHaven\App\Correlation;
use Rphaven\Common\Utils\Factory\Uid\SymfonyUid\UlidFactory;
use Rphaven\Common\Utils\Uid\CorrelationUlid;
use Rphaven\Common\V1\Correlation as GrpcCorrelation;
use Symfony\Component\Uid\Ulid;


final readonly class CorrelationFactory
{
    public function __construct(private UlidFactory $ulidFactory, private TimestampFactory $timestampFactory)
    {

    }
    public function toGrpcCorrelation(
        Correlation $correlation
    ): GrpcCorrelation {
        return new GrpcCorrelation([
            'id' => $this->ulidFactory->toUid(Ulid::fromString($correlation->correlationId->toString())),
            'timestamp' => $this->timestampFactory->toTimestamp($correlation->dateTime),
        ]);
    }

    public function fromGrpcCorrelation(GrpcCorrelation $correlation): Correlation
    {
        return new Correlation(
            $this->timestampFactory->fromTimestamp($correlation->getTimestamp()),
            CorrelationUlid::fromString($this->ulidFactory->fromGrpc($correlation->getId())->toRfc4122()),
        );
    }
}