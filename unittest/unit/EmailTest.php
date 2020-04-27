<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require 'Email.php';

final class EmailTest extends TestCase
{
    public function testCanBeCreatedFromValidEmailAddress(): void
    {
        $this->assertInstanceOf(
            Email::class,
            Email::fromString('Steven@gmail.com')
        );
    }

    public function testCannotBeCreatedFromInvalidEmailAddress(): void
    {
        $this->expectException(InvalidArgumentException::class);

        Email::fromString('invalid');
    }

    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'Steven@gmail.com',
            Email::fromString('Steven@gmail.com')
        );
    }
}