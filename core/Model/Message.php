<?php
namespace core\Model;

class Message
{
    public string $name;
    public string $content;

    public function __construct(string $name, string $content)
    {
        $this->name = $name;
        $this->content = $content;
    }
}