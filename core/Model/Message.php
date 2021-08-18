<?php
namespace core\Model;

class Message
{
    public string $name;
    public string $date;
    public string $content;

    public function __construct(string $name, string $date, string $content)
    {
        $this->name = $name;
        $this->date = $date;
        $this->content = $content;
    }
}