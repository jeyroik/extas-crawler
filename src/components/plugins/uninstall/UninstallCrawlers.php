<?php
namespace extas\components\plugins\uninstall;

use extas\components\crawlers\Crawler;

/**
 * Class UninstallCrawlers
 *
 * @stage extas.install.section
 * @package extas\components\plugins\uninstall
 * @author jeyroik <jeyroik@gmail.com>
 */
class UninstallCrawlers extends UninstallSection
{
    protected string $selfSection = 'crawlers';
    protected string $selfName = 'crawler';
    protected string $selfRepositoryClass = 'crawlerRepository';
    protected string $selfUID = Crawler::FIELD__NAME;
    protected string $selfItemClass = Crawler::class;
}
