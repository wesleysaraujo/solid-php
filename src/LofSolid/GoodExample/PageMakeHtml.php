<?php

namespace WesleySAraujo\SolidPhp\LofSolid\GoodExample;

class PageMakeHtml extends PageTemplateMake
{
    public function __construct($pageTitle, $pageContent)
    {
        parent::__construct($pageTitle, $pageContent);
    }

    public function make(): void
    {
        $this->page= "<html>
                        <head>
                            <title>{$this->pageTitle}</title>
                        </head>
                        <body>{$this->pageContent}</body>
                       </html>";
    }
}