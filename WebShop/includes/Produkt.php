<?php


class Produkt
{
    static public $produktCount = 0;
    public $produktID;
    public $name;
    private $price;
    public $image;
    private static $produkte = [];

    function __construct($name, $price, $image)
    {
        self::$produktCount++;
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->produktID = self::$produktCount;
        self::$produkte[$this->produktID] = $this;
    }

    static function __serialize($filename)
    {
        $serialized = serialize(self::$produkte);
        //Save the jason array to a text file.
        file_put_contents($filename, $serialized);
    }

    static function __unserialize($filename)
    {
        $fileContents = file_get_contents($filename);
        $fileContents = unserialize($fileContents);
        //Unserialize the JASON back into an array.
        self::$produkte = $fileContents;
    }

    public function getData()
    {
        return self::$produkte;
    }

    public function __getPrice()
    {
        return $this->price;
    }

    public function __getImage()
    {
        return $this->image;
    }
    public function __getName()
    {
        return $this->name;
    }
    public function __getProduktID()
    {
        return $this->produktID;
    }
    public static function __getProduktByID($id)
    {
        return self::$produkte[$id];
    }

}