<?php

namespace WesleySAraujo\SolidPhp\OofSolid\BadExample;

use WesleySAraujo\SolidPhp\SofSolid\GoodClassSite;

class SitePages extends AbstractPageMakeHome
{
    private GoodClassSite $site;

    private string $form;

    public function __construct(GoodClassSite $site)
    {
        $this->site = $site;

    }

    public function makeHome(): string
    {
        $this->header = "<header>$this->site->getTitle()</header>";
        $this->content = "<main><p>$this->site->getDescription()</p></main>";
        $this->footer = "<footer>$this->site->getPathLogo()</footer>";

        return "<!DOCTYPE html>
                <html lang='pt-br'>
                <head>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
                    <title>$this->site->getTitle()</title>
                </head>
                <body>
                    $this->header
                    $this->content
                    $this->footer
                </body>
                </html>";
    }

    public function makeContact(): string
    {
        $this->header = "<header>$this->site->getTitle()</header>";
        $this->content = "<p>$this->site->getDescription()</p>";
        $this->form = "<form action='$this->site->getPathLogo()' method='post'>
                        <input type='text' name='name' placeholder='Nome'>
                        <input type='email' name='email' placeholder='E-mail'>
                        <input type='text' name='subject' placeholder='Assunto'>
                        <textarea name='message' placeholder='Mensagem'></textarea>
                        <button type='submit'>Enviar</button>
                    </form>";
        $this->footer = "<footer>$this->site->getPathLogo()</footer>";

        return "<!DOCTYPE html>
                <html lang='pt-br'>
                <head>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
                    <title>$this->site->getTitle()</title>
                </head>
                <body>
                    $this->header
                    $this->content
                    $this->form
                    $this->footer
                </body>
                </html>";
    }
}
