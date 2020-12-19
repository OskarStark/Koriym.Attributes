<?php

declare(strict_types=1);

namespace Koriym\Attributes;

use Koriym\Attributes\Annotation\Cacheable;
use Koriym\Attributes\Annotation\FooClass;
use Koriym\Attributes\Annotation\HttpCache;
use Koriym\Attributes\Annotation\Inject;
use Koriym\Attributes\Annotation\Loggable;
use Koriym\Attributes\Annotation\Named;
use Koriym\Attributes\Annotation\Transactional;

#[FooClass]
#[Cacheable]
/**
 * @Cacheable
 * @FooClass
 */
class FakeDual
{
    /**
     * @Inject
     * @FooClass
     */
    #[Inject]
    #[FooClass]
    public string $prop;

    /**
     * @Inject
     */
    #[Inject]
    public function setKey(string $authKey): void // named binding
    {
    }

    /**
     * @Transactional
     * @Loggable
     * @HttpCache(isPrivate=true, maxAge=50)
     */
    #[Transactional]
    #[Loggable]
    #[HttpCache(isPrivate: true, maxAge: 50)]
    public function subscribe(string $id): void  // intercepted
    {
    }
}
