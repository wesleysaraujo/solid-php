<?php

namespace WesleySAraujo\SolidPhp\LofSolid\BadExample;

class PageMakeHtml extends PageTemplateMake
{
    public function __construct(string $content, string $pageName)
    {
        parent::__construct($content, $pageName);
    }
}