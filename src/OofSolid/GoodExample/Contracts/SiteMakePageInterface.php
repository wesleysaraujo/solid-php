<?php

namespace WesleySAraujo\SolidPhp\OofSolid\GoodExample\Contracts;

interface SiteMakePageInterface
{
    public function makePage(): void;

    public function makeHeader(string $title): string;

    public function makeFooter(): string;

    public function makeContent(string $content): string;
}
