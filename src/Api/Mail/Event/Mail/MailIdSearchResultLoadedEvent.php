<?php declare(strict_types=1);

namespace Shopware\Api\Mail\Event\Mail;

use Shopware\Api\Entity\Search\IdSearchResult;
use Shopware\Context\Struct\TranslationContext;
use Shopware\Framework\Event\NestedEvent;

class MailIdSearchResultLoadedEvent extends NestedEvent
{
    public const NAME = 'mail.id.search.result.loaded';

    /**
     * @var IdSearchResult
     */
    protected $result;

    public function __construct(IdSearchResult $result)
    {
        $this->result = $result;
    }

    public function getName(): string
    {
        return self::NAME;
    }

    public function getContext(): TranslationContext
    {
        return $this->result->getContext();
    }

    public function getResult(): IdSearchResult
    {
        return $this->result;
    }
}