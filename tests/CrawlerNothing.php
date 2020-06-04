<?php
namespace tests;

use extas\components\crawlers\CrawlerDispatcher;

/**
 * Class CrawlerNothing
 *
 * @package tests
 * @author jeyroik <jeyroik@gmail.com>
 */
class CrawlerNothing extends CrawlerDispatcher
{
    /**
     * @return array|string[]
     * @throws \Exception
     */
    public function __invoke(): array
    {
        $crawler = $this->getCrawler();
        return $crawler->getName() == 'test' ? ['is ok'] : [];
    }
}
