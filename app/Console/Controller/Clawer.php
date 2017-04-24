<?php
/**
 * Created by Kydz - boatkyd@gmail.com
 * For: www.kydz.me
 * Date: 2017/4/23
 */

namespace App\Console\Controller;

use PHPHtmlParser\Dom;


class Clawer
{

    public function clawer()
    {
        for ($i = 1; $i <= 50; $i++) {
            $this->getPage($i);
        }
    }

    public function getPage($page)
    {
        $langs = ['gb', 'kj'];

        foreach ($langs as $lang) {
            $this->getContent($page, $lang);
        }
        echo $page . '/50 Done' . PHP_EOL;
    }

    public function getContent($page, $lang)
    {
        $content = '';
        $dom = new Dom();
        $dom->setOptions([
            'whitespaceTextNode' => false,
            'removeScripts' => true,
            'removeSty' => true,
        ]);
        $dom->loadFromUrl('https://www.wordproject.org/bibles/' . $lang . '/01/' . $page . '.htm');
        try {
            $content = $this->getDom($dom);
        } catch (\Exception $e) {
            echo 'Get page' . $page . '-' . $lang . ' Error' . PHP_EOL;
            $content = '[page]-' . $page . '-' . $lang . PHP_EOL;
        }

        $logFile = fopen(storage_path('logs/bibles/' . $lang . '.txt'), 'a+');
        //write log to file
        fwrite($logFile, $content);
        fclose($logFile);
    }

    public function getDom($dom)
    {
        $main = $dom->find('#textBody p')[0];
        $title = $dom->find('title')[0]->text;
        $body = '';
        foreach ($main as $node) {
            try {
                if ($node instanceof \PHPHtmlParser\Dom\TextNode) {
                    $body .= $node->text;
                    $body .= PHP_EOL;
                } else {
                    $body .= $node->firstChild()->text;
                }
            } catch (\PHPHtmlParser\Exceptions\ChildNotFoundException $e) {
                continue;
            }
        }
        $contentCH = $title . PHP_EOL . $body . PHP_EOL . PHP_EOL;

        return $contentCH;
    }
}