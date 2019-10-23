<?php
/**
 * @author Fahad Hussain
 * Copyright(c) 2019.
 */
require __DIR__ . "/../../lib/simple_html_dom.php";

/**
 * Class Scrap
 */
class Scrap
{
    /**
     * @param $url
     * @return string
     */
    public function scrapUrl($url){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_REFERER, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $str = curl_exec($curl);
        curl_close($curl);
        $html = new simple_html_dom();
        $html->load($str);
        $infoDiv = $html->find('div.product-info');
        $csvOut = '';
        $csvOut .= '"S#", "Product Name", "Price"'.PHP_EOL;
        $count = 0;
        foreach ($infoDiv as $div){
            $count++;
            $csvOut .= '"'.$count.'"'.',';
            $csvOut .= '"'.trim(html_entity_decode($div->find('div.product-name a')[0]->plaintext,ENT_NOQUOTES)).'",';
            $csvOut .= '"'.trim(html_entity_decode($div->find('div.price-box span.price')[0]->plaintext,ENT_NOQUOTES)).'"'. PHP_EOL;
        }
        return $csvOut;
    }

}