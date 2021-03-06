<?php
declare(strict_types = 1);

namespace App\Services\Notification\Notifications;

use App\Services\Notification\Notification;

class Error implements Notification
{
    private $type = 'error';

    private $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    /**
     * {@inheritdoc}
     */
    public function content()
    {
        return [
            'type' => $this->type,
            'content' => $this->content
        ];
    }
}
