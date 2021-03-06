<?php
declare(strict_types = 1);

namespace App\DataTransferObjects\Admin\Pages;

use App\Entity\Page as Entity;

class Page implements \JsonSerializable
{
    /**
     * @var Entity
     */
    private $page;

    public function __construct(Entity $page)
    {
        $this->page = $page;
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize(): array
    {
        return [
            'id' => $this->page->getId(),
            'title' => $this->page->getTitle(),
            'link' => str_limit($this->page->getUrl(), 30, '...'),
            'url' => $this->page->getUrl()
        ];
    }
}
