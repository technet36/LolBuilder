<?php
/**
 * Created by PhpStorm.
 * User: moran
 * Date: 09/02/2018
 * Time: 16:47
 */

namespace App\Entity;


class Model
{
    private $apiKey;
    private $itemsPathname;
    private $championsPathname;

    /**
     * Model constructor.
     */
    public function __construct()
    {
        $this->apiKey = "RGAPI-3df584cb-34a1-4303-8fcf-f8aad1a22f24";

        $this->championsPathname = "D:\LolBuilder\items.json";
        $this->itemsPathname= "D:\LolBuilder\champions.json";


        $items =json_decode(file_get_contents($itemsFilename));

    }


}