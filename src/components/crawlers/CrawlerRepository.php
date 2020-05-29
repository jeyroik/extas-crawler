<?php
namespace extas\components\crawlers;

use extas\components\repositories\Repository;
use extas\interfaces\crawlers\ICrawlerRepository;

/**
 * Class CrawlerRepository
 *
 * @package extas\components\crawlers
 * @author jeyroik@gmail.com
 */
class CrawlerRepository extends Repository implements ICrawlerRepository
{
    protected string $name = 'crawlers';
    protected string $scope = 'extas';
    protected string $pk = Crawler::FIELD__NAME;
    protected string $itemClass = Crawler::class;
}
