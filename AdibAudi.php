<?php
include 'AdibCar.php';
class AdibAudi extends AdibCar{
    public function Color()
    {
        echo "\n Black";    
    }
    public function Seats()
    {
        echo "\n 4 Seats";
    }
	public function EngineStatus()
    {
	    parent::EngineStatus();
	}
	public function Body()
    {
	    parent::Body();
	}
}
$obj = new AdibAudi;
$obj->Color();
$obj->Seats();
$obj->EngineStatus();
$obj->Body();
?>