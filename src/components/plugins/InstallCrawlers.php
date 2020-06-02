<?php
namespace extas\components\plugins;

use extas\components\crawlers\Crawler;
use extas\components\plugins\init\InitSection;

/**
 * Class PluginInstallCrawlers
 *
 * @stage extas.install.section
 * @package extas\components\plugins
 * @author jeyroik <jeyroik@gmail.com>
 */
class InstallCrawlers extends InitSection
{
    protected string $selfSection = 'crawlers';
    protected string $selfName = 'crawler';
    protected string $selfRepositoryClass = 'crawlerRepository';
    protected string $selfUID = Crawler::FIELD__NAME;
    protected string $selfItemClass = Crawler::class;
}
