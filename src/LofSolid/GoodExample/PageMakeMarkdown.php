<?php

namespace WesleySAraujo\SolidPhp\LofSolid\GoodExample;

class PageMakeMarkdown extends PageTemplateMake
{
    public function __construct($pageTitle, $pageContent)
    {
        parent::__construct($pageTitle, $pageContent);
    }

    public function make(): void
    {
        $this->page = "## {$this->pageTitle}\n\n{$this->pageContent}";
    }
}