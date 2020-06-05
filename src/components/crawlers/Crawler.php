<?php
namespace extas\components\crawlers;

use extas\components\Item;
use extas\components\samples\parameters\THasSampleParameters;
use extas\components\TDispatcherWrapper;
use extas\components\THasTags;
use extas\interfaces\crawlers\ICrawler;
use extas\interfaces\crawlers\ICrawlerDispatcher;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class Crawler
 *
 * @package extas\components\crawlers
 * @author jeyroik@gmail.com
 */
class Crawler extends Item implements ICrawler
{
    use TDispatcherWrapper;
    use THasSampleParameters;
    use THasTags;

    /**
     * @param string $path
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return array
     */
    public function dispatch(string $path, InputInterface $input, OutputInterface $output): array
    {
        /**
         * @var ICrawlerDispatcher $dispatcher
         */
        $dispatcher = $this->buildClassWithParameters([
            ICrawlerDispatcher::FIELD__INPUT => $input,
            ICrawlerDispatcher::FIELD__OUTPUT => $output,
            ICrawlerDispatcher::FIELD__PATH => $path,
            ICrawlerDispatcher::FIELD__CRAWLER => $this
        ]);

        return $dispatcher();
    }

    /**
     * @return string
     */
    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
