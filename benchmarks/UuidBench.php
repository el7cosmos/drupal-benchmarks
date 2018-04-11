<?php

namespace Benchmarks;

use Drupal\Component\Uuid\Pecl;
use Drupal\Component\Uuid\Php;
use PhpBench\Benchmark\Metadata\Annotations\Groups;
use PhpBench\Benchmark\Metadata\Annotations\Iterations;
use PhpBench\Benchmark\Metadata\Annotations\Revs;
use Ramsey\Uuid\Uuid;

/**
 * Class UuidBench
 *
 * @Groups("Uuid")
 * @Revs(1000)
 * @Iterations(5)
 *
 * @package Benchmarks
 */
class UuidBench
{

    /**
     * @return string
     */
    public function benchPecl(): string
    {
        $uuid = new Pecl();
        return $uuid->generate();
    }

    /**
     * @return string
     *
     * @see \Drupal\Component\Uuid\Php
     */
    public function benchDrupal(): string
    {
        $uuid = new Php();
        return $uuid->generate();
    }

    /**
     * @return string
     *
     * @see \Ramsey\Uuid\Uuid
     */
    public function benchRamsey(): string
    {
        $uuid = Uuid::uuid4();
        return $uuid->toString();
    }
}
