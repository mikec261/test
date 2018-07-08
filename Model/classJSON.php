<?php
class CustomJSON 
{
    private $estatus;
    private $msj;
    private $data;

    public function __construct()
    {
        $this->estatus = true;
        $this->msj = "";
        $this->data = array();
    }
    public function getEstatus(){
        return $this->estatus;
    }
    public function getMsj(){
        return $this->msj;
    }
    public function getMsg(){
        return $this->msj;
    }
    public function setEstatus($var){
        $this->estatus=$var;
    }
    public function setMsj($var){
        $this->msj=$var;
    }
    public function setMsg($var){
        $this->msj=$var;
    }
    public function setData($var){
        $this->data[]=$var;
    }

    public function toJSON(){
        $jsonData = array();
        $jsonData['estatus'] = $this->estatus;
        $jsonData['msj'] = $this->msj;
        $jsonData['data'] = $this->data;
        return json_encode($jsonData);
    }
}
?>