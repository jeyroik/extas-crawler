<?php
namespace extas\components\plugins\init;

use extas\components\crawlers\Crawler;

/**
 * Class InitCrawlers
 *
 * @stage extas.install.section
 * @package extas\components\plugins\init
 * @author jeyroik <jeyroik@gmail.com>
 */
class InitCrawlers extends InitSection
{
    protected string $selfSection = 'crawlers';
    protected string $selfName = 'crawler';
    protected string $selfRepositoryClass = 'crawlerRepository';
    protected string $selfUID = Crawler::FIELD__NAME;
    protected string $selfItemClass = Crawler::class;
}
