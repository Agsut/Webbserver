<?php
$webpage1 = new StdClass();
$webpage1->name = "PHP";
$webpage1->url = "http://php.net/";
$webpage1->rank = 5; 

class webpage{
    public $name;
    public $url;
    public $rank;
    {
        $this->name = $name;
        $this->url = $url;
        $this->rank = $rank;

        $php_net = new webpage("PHP", "http://php.net/", 5);
        $example = new webpage("Exempel", "http://example.com/", 3);

        echo $php_net->name;
        echo "<a href=\"{$example->url}\">{$example->name}</a>";

        public function getlink(){
            return "<a href=\"{$this->url}">{$this->name}</a>

            echo $php_net->getLink();
            echo $example->getLink();
        }
    }
}
?>