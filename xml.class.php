<?php
//Classe XML 

class Xml{
    private $xml;
    private $tab = 1;
    
    public function __construct($version = '1.0',$encode ='UTF-8')
    {
        $this->xml.="<?xml version = '$version' encoding = '$encoding'?>\n";
    }

    private function AddTab()
    {
        for($i = 1; $i <=$this->tab; $i++)
        {
            $this->xml .="\t";
        }
    }

    public function OpenTag($name){

    
        $this->AddTab();
        $this->xml .="<$name>\n";
        $this->tab++;
    }

    public function CloseTag($name){

    
        $this->AddTab();
        $this->xml .="</$name>\n";
        $this->tab--;
    }

    public function AddTag($name, $value)
    {
        $this->xml.="<$name>$value<\name>\n";

    }

    public function setValue($value)
    {
        $this->xml .= "$value\n";
    }

    public function __tostring(){
        return $this->xml;
    }
}

?>