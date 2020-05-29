<?php
namespace extas\components\plugins;

use extas\components\crawlers\Crawler;
use extas\components\plugins\install\PluginInstallSectionAny;

/**
 * Class PluginInstallCrawlers
 *
 * @stage extas.install.section
 * @package extas\components\plugins
 * @author jeyroik <jeyroik@gmail.com>
 */
class PluginInstallCrawlers extends PluginInstallSectionAny
{
    protected string $selfSection = 'crawlers';
    protected string $selfName = 'crawler';
    protected string $selfRepositoryClass = 'crawlerRepository';
    protected string $selfUID = Crawler::FIELD__NAME;
    protected string $selfItemClass = Crawler::FIELD__CLASS;
}
