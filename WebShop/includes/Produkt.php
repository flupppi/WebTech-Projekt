<?php


class Produkt
{
    static public $produktCount = 0;
    public $produktID;
    public  $name;
    private $price;
    public  $image=[];
    private static $produkte=[];

    function __construct($name,$price,$image)
    {
        self::$produktCount++;
        $this->name=$name;
        $this->price=$price;
        $this->image=$image;
        $this->produktID=self::$produktCount;
        self::$produkte[$this->produktID]=$this;
    }

    function __serialize()
    {
        $serialized = serialize(self::$produkte);
        //Save the serialized array to a text file.
        file_put_contents('../data/products.txt', $serialized);
    }
    function __unserialize(array $data)
    {   $fileContents = file_get_contents('../data/users.txt');
        //Unserialize the string back into an array.
        self::$produkte = unserialize($fileContents);
    }


    public function getData(): array
    {
            return self::$produkte;
    }
}