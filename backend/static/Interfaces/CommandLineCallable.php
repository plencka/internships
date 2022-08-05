<?php

declare(strict_types=1);

namespace InternshipsStatic\Interfaces;

interface CommandLineCallable
{
    public function getName(): string;

    /**
     * @return array<string>
     */
    public function getAllowedEnvironment(): array;

    public function isAllowed(): bool;

    public function getFailMessage(): string;

    public function getDescription(): string;

    public function getExtendedDescription(): string;
}