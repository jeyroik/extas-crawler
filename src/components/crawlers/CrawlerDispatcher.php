<?php
namespace extas\components\crawlers;

use extas\components\Item;
use extas\components\THasInput;
use extas\components\THasOutput;
use extas\components\THasPath;
use extas\interfaces\crawlers\ICrawler;
use extas\interfaces\crawlers\ICrawlerDispatcher;

/**
 * Class CrawlerDispatcher
 *
 * @package extas\components\crawlers
 * @author jeyroik@gmail.com
 */
abstract class CrawlerDispatcher extends Item implements ICrawlerDispatcher
{
    use THasInput;
    use THasOutput;
    use THasPath;

    /**
     * @return ICrawler
     * @throws \Exception
     */
    public function getCrawler(): ICrawler
    {
        $crawler = $this->config[static::FIELD__CRAWLER] ?? null;

        if (!$crawler) {
            throw new \Exception('Missed crawler');
        }

        return $crawler;
    }

    /**
     * @return string
     */
    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
