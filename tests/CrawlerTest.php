<?php
namespace tests;

use Dotenv\Dotenv;
use extas\components\console\TSnuffConsole;
use extas\components\crawlers\Crawler;
use PHPUnit\Framework\TestCase;

/**
 * Class CrawlerTest
 *
 * @package tests
 * @author jeyroik <jeyroik@gmail.com>
 */
class CrawlerTest extends TestCase
{
    use TSnuffConsole;

    protected function setUp(): void
    {
        parent::setUp();
        $env = Dotenv::create(getcwd() . '/tests/');
        $env->load();
    }

    public function testDispatch()
    {
        $crawler = new Crawler([
            Crawler::FIELD__NAME => 'test',
            Crawler::FIELD__CLASS => CrawlerNothing::class
        ]);
        $result = $crawler->dispatch('', $this->getInput(), $this->getOutput());
        $this->assertEquals(['is ok'], $result);
    }
}
