<?php
/**
 * If you make a change to a Service.php file, the PhpunitTestEngine included in Phorge will look for
 * a ServiceTest.php file to execute with phpunit.
 */

namespace Example\PhorgeProjectTests;
use Example\PhorgeProject\Service;
use PHPUnit\Framework\TestCase;

/**
 * @covers PhorgeProject
 * @covers PhorgeProjectTest
 */
final class ServiceTest extends TestCase {

    /**
     * Test the returnsTrue method
     * @return void
     */
    public function testReturnsTrue(): void {
        $service = new Service();
        $this->assertSame(true, $service->returnsTrue(), "Check returnsTrue () returns true");
    }

}
