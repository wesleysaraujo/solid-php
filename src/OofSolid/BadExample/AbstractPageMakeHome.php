<?php

namespace WesleySAraujo\SolidPhp\OofSolid\BadExample;

abstract class AbstractPageMakeHome
{
    public string $header;

    public string $content;

    public string $footer;

    public string $page;

    abstract public function makeHome(): string;
}