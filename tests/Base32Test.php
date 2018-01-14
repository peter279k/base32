<?php

namespace Odan\Test;

use Odan\Encoding\Base32;
use PHPUnit\Framework\TestCase;

/**
 * Base32Test
 *
 * @coversDefaultClass \Odan\Encoding\Base32
 */
class Base32Test extends TestCase
{

    /**
     * Test.
     *
     * @covers ::encode
     */
    public function testEncode()
    {
        $base32 = new Base32();
        $enc = $base32->encode(null);
        $this->assertEquals('', $enc);

        $enc = $base32->encode('');
        $this->assertEquals('', $enc);

        $enc = $base32->encode(0);
        $this->assertEquals('', $enc);

        $enc = $base32->encode('abc 1234');
        $this->assertEquals('MFRGGIBRGIZTI===', $enc);

        $enc = $base32->encode('abc 1234', false);
        $this->assertEquals('MFRGGIBRGIZTI', $enc);

        $enc = $base32->encode('123456789101112131415');
        $this->assertEquals('GEZDGNBVGY3TQOJRGAYTCMJSGEZTCNBRGU======', $enc);

        $enc = $base32->encode('12345678910111213');
        $this->assertEquals('GEZDGNBVGY3TQOJRGAYTCMJSGEZQ====', $enc);

        $enc = $base32->encode('12345678910111213141516171819');
        $this->assertEquals('GEZDGNBVGY3TQOJRGAYTCMJSGEZTCNBRGUYTMMJXGE4DCOI=', $enc);

        $enc = $base32->encode("\0€ÿ", false);
        $this->assertEquals('ADRIFLGDX4', $enc);
    }

    /**
     * Test.
     *
     * @covers ::decode
     */
    public function testDecode()
    {
        $base32 = new Base32();
        $dec = $base32->decode(null);
        $this->assertFalse($dec);

        $dec = $base32->decode('MFRGGIBRGIZTI====');
        $this->assertEquals('abc 1234', $dec);

        $dec = $base32->decode('MFRGGIBRGIZTI');
        $this->assertEquals('abc 1234', $dec);

        $dec = $base32->decode('ADRIFLGDX4');
        $this->assertEquals("\0€ÿ", $dec);

        $dec = $base32->decode('mfrggibrgizti');
        $this->assertEquals("abc 1234", $dec);
    }

    /**
     * Test.
     *
     * @covers ::decode
     */
    public function testDecodeWithInvalidEncodedString()
    {
        $base32 = new Base32();
        $dec = $base32->decode('XXXXXXX=======');
        $this->assertFalse($dec);

        $dec = $base32->decode('======');
        $this->assertFalse($dec);
    }
}
