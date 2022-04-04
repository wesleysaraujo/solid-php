<?php

namespace WesleySAraujo\SolidPhp\OofSolid\GoodExample;

class SiteMakePage extends AbstractSiteMakePage
{
    public function __construct($pageName, $pageContent)
    {
        parent::__construct($pageName, $pageContent);

        $this->makePage();
    }
}