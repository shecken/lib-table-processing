<?php declare(strict_types=1);

/* Copyright (c) 2021 - Stefan Hecken <stefan.hecken@concepts-and-training.de> - Extended GPL, see LICENSE */

namespace CaT\Libs\TableProcessing;

class Message
{
    protected string $message;

    public function __construct(string $message)
    {
        $this->message = $message;
    }

    public function getMessage() : string
    {
        return $this->message;
    }
}