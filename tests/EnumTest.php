<?php
namespace Kambo\Tests\Enum;

use Kambo\Enum\Enum;

// Fixture class
use Kambo\Tests\Enum\EnumFixture;

/**
 * Unit test for Enum class
 *
 * @author   Bohuslav Simek <bohuslav@simek.si>
 * @license  MIT
 * @package  Kambo\Enum
 */
class EnumTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test toArray method
     * 
     * @return void
     */
    public function testToArray()
    {
        $expected = [
            'FOO' => 'foo',
            'BAR' => 'bar',
        ];

        $this->assertEquals($expected, EnumFixture::toArray());
    }

    /**
     * Test values method
     * 
     * @return void
     */
    public function testValues()
    {
        $expected = [
            'FOO' => 'foo',
            'BAR' => 'bar',
        ];

        $this->assertEquals($expected, EnumFixture::values());
    }

    /**
     * Test inEnum method
     *
     * @return void
     */
    public function testInEnum()
    {
        $this->assertTrue(EnumFixture::inEnum('foo'));
        $this->assertFalse(EnumFixture::inEnum('baz'));
    }
}
