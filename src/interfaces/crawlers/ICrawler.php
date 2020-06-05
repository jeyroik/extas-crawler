<?php
namespace extas\interfaces\crawlers;

use extas\interfaces\IDispatcherWrapper;
use extas\interfaces\IHasTags;
use extas\interfaces\IItem;
use extas\interfaces\samples\parameters\IHasSampleParameters;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Interface ICrawler
 *
 * @package extas\interfaces\jsonrpc\crawlers
 * @author jeyroik@gmail.com
 */
interface ICrawler extends IItem, IDispatcherWrapper, IHasSampleParameters, IHasTags
{
    public const SUBJECT = 'extas.crawler';

    /**
     * @param string $path
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return array
     */
    public function dispatch(string $path, InputInterface $input, OutputInterface $output): array;
}
