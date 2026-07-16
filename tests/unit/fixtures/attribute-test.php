<?php

namespace Tests\E2E\Services\Sample;

use PHPUnit\Framework\Attributes\Depends;

class AttributeSampleTest
{
    public function testCreate(): array
    {
        return ['id' => 123];
    }

    #[Depends('testCreate')]
    public function testUpdate(array $data): array
    {
        return array_merge($data, ['updated' => true]);
    }

    #[Depends('testUpdate')]
    public function testDelete(array $data): void
    {
        // Delete logic
    }

    public function testIndependent(): void
    {
        // No dependencies
    }
}
