<?php
/**
 * Created by PhpStorm.
 * User: meldon
 * Date: 19.02.18
 * Time: 11:38
 */

namespace AppBundle\Parser;


class ConnectProcessor
{
    const DEFAULT_OPTION = array(
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER => true,
        CURLOPT_FOLLOWLOCATION => false,
        CURLOPT_USERAGENT => "Mozilla/5.0 (Windows NT 5.1; rv:31.0) Gecko/20100101 Firefox/31.0",
        CURLOPT_AUTOREFERER => true,
        CURLOPT_CONNECTTIMEOUT => 3,
        CURLOPT_TIMEOUT => 5,
        CURLOPT_MAXREDIRS => 10
    );

    /**
     * @param string $html
     * @return \DOMDocument
     */
    public static function getDocument($html)
    {
        $document = new \DOMDocument();
        libxml_use_internal_errors(true);
        $document->loadHTML($html);
        return $document;
    }


    public static function getHtml($options)
    {
        $ch = null;
        $data = null;
        print \date('Y-m-d H:i:s') . ' CURL INIT' . PHP_EOL;
        while ($ch == null) {
            $ch = curl_init();
        }
        curl_setopt_array($ch, $options);
        print \date('Y-m-d H:i:s') . ' CURL EXEC' . PHP_EOL;
        $data = curl_exec($ch);
        if (!$data) {
            print \date('Y-m-d H:i:s') . ' PROBLEM CURL' . PHP_EOL;
            print curl_error($ch);
        }

        curl_close($ch);
        libxml_use_internal_errors(true);
        print \date('Y-m-d H:i:s') . ' PASS CONNECTION' . PHP_EOL;
        return $data;
    }

    public static function getCookie($result)
    {
        preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $result, $matches);

        $cookie = "";
        foreach ($matches[1] as $match) {
            $cookie .= $match . '; ';
        }
        return trim($cookie);
    }

    public static function getOptions($url)
    {
        $options = self::DEFAULT_OPTION;
        $options[CURLOPT_URL] = $url;
        return $options;
    }

    public static function findByXpath($html, $xpath)
    {
        $doc = self::getDocument($html);
        $domXpath = new \DOMXpath($doc);
        return $domXpath->query($xpath);
    }


}