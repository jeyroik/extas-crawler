<?php
namespace extas\interfaces\crawlers;

use extas\interfaces\IHasPath;
use extas\interfaces\IItem;
use extas\interfaces\IHasInput;
use extas\interfaces\IHasOutput;

/**
 * Interface ICrawlerDispatcher
 *
 * @package extas\interfaces\jsonrpc\crawlers
 * @author jeyroik@gmail.com
 */
interface ICrawlerDispatcher extends IItem, IHasInput, IHasOutput, IHasPath
{
    public const SUBJECT = 'extas.crawler.dispatcher';

    public const FIELD__CRAWLER = 'crawler';

    /**
     * @return ICrawler
     */
    public function getCrawler(): ICrawler;

    /**
     * @return array
     */
    public function __invoke(): array;
}
