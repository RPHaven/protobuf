<?php

declare(strict_types=1);

namespace Rphaven\Common\Utils\Factory\Uid;

use Rphaven\Common\Utils\Factory\Uid\Exception\ChainFactoryMustHaveAtLeastOneFactory;
use Rphaven\Common\Utils\Factory\Uid\SymfonyUid\UlidFactory;
use Rphaven\Common\Utils\Factory\Uid\SymfonyUid\UuidFactory;
use Rphaven\Common\V1\Uid;
use Symfony\Component\Uid\AbstractUid;

final readonly class SymfonyChainFactory implements SymfonyUid
{

    private array $symfonyUidFactories;

    public static function init(): self
    {
        return new self(
            new UuidFactory(),
            new UlidFactory(),
        );
    }

    public function __construct(SymfonyUid ...$symfonyUidFactories)
    {
        if (empty($symfonyUidFactories)) {
            throw new ChainFactoryMustHaveAtLeastOneFactory();
        }
        $this->symfonyUidFactories = $symfonyUidFactories;
    }

    #[\Override] public function fromGrpc(Uid $uid): AbstractUid
    {
        foreach ($this->symfonyUidFactories as $factory) {
            if ($factory->supportsUid($uid)) {
                return $factory->fromGrpc($uid);
            }
        }
    }

    #[\Override] public function toUid(AbstractUid $uid): Uid
    {
        foreach ($this->symfonyUidFactories as $factory) {
            if ($factory->supportsAbstractUid($uid)) {
                return $factory->toUid($uid);
            }
        }
    }

    public function supportsUid(Uid $uid): bool
    {
        foreach ($this->symfonyUidFactories as $factory) {
            if ($factory->supportsUid($uid)) {
                return true;
            }
        }

        return false;
    }

    public function supportsAbstractUid(AbstractUid $uid): bool
    {
        foreach ($this->symfonyUidFactories as $factory) {
            if ($factory->supportsAbstractUid($uid)) {
                return true;
            }
        }

        return false;
    }
}