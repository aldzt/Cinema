<?php


class Movie
{
    private $name='';
    private $description='';
    private $time=0;
    private $date='';
    
    public function __construct($name,$description,$time,$date) 
    {
        $this->name=$name;
        $this->description=$description;
        $this->time=$time;
        $this->date=$date;        
    }
    
    public function affiche()
    {
        echo "Name : $this->name, description : $this->description, Time : $this->time, Date : $this->date";    
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function getName($name)
    {
        $this->name=$name;
    }
       
        
    
    
}

$movie=new Movie('saw', 'gore', 198, '01-06-2015');
$movie->affiche();