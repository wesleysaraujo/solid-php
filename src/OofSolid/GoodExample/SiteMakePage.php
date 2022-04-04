<?php

namespace WesleySAraujo\SolidPhp\OofSolid\GoodExample;

class SiteMakePage extends AbastractSiteMakePage
{
    public function __construct($pageName, $pageContent)
    {
        parent::__construct($pageName, $pageContent);

        $this->makePage();
    }
}