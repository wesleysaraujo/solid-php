<?php

namespace WesleySAraujo\SolidPhp\LofSolid\BadExample;

class PageMakeMarkdown extends PageTemplateMake
{
    public function __construct(string $content, string $pageName)
    {
        parent::__construct($content, $pageName);
    }

    public function makeMarkdown(): string
    {
        return "## {$this->pageName}\n\n{$this->content}";
    }
}