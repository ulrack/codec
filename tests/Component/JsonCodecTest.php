<?php
/**
 * Copyright (C) Jyxon, Inc. All rights reserved.
 * See LICENSE for license details.
 */
namespace Ulrack\Codec\Tests\Component;

use PHPUnit\Framework\TestCase;
use Ulrack\Codec\Component\JsonCodec;
use Ulrack\Codec\Exception\EncodingException;
use Ulrack\Codec\Exception\DecodingException;

/**
 * @coversDefaultClass \Ulrack\Codec\Component\JsonCodec
 */
class JsonCodecTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::encode
     * @covers ::__construct
     */
    public function testEncode(): void
    {
        $subject = new JsonCodec(1);

        $this->assertEquals(
            '{"foo":"bar"}',
            $subject->encode(['foo' => 'bar'])
        );

        $this->expectException(EncodingException::class);

        $subject->encode(['foo' => ['bar' => 'baz']]);
    }

    /**
     * @return void
     *
     * @covers ::decode
     * @covers ::__construct
     */
    public function testDecode(): void
    {
        $subject = new JsonCodec(2, 0, 0, true);
        $this->assertEquals(
            ['foo' => 'bar'],
            $subject->decode('{"foo":"bar"}')
        );

        $this->expectException(DecodingException::class);

        $subject->decode('{"foo":{"bar":"baz"}');
    }
}
