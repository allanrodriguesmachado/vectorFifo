<?php

namespace App\Support;

class Message
{
    private string $text;
    private string $type;

    public function getType(): string
    {
        return $this->type;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function error(string $message): Message
    {
        $this->type = 'error';
        $this->text = $message;
        return $this;
    }

    public function success(string $message): Message
    {
        $this->type = 'success';
        $this->text = $message;
        return $this;
    }

    public function warning(string $message): Message
    {
        $this->type = 'warning';
        $this->text = $message;
        return $this;
    }


    public function render(): string
    {
        return "<div class='message {$this->getType()}'>{$this->getText()}</div>";
    }
}
