<?php 

abstract class ACME
{
    public $repairarray=array(1=>'PC repairs',2=>'Doctor HP',3=>'Advance computing',4=>'Total Solution Computer');
    public $repairing;
    
    public function repair($name,$mobile,$vendor,$type,$size)
    {   
        return $this->name . ", " . $this->mobile . ",".$this->vendor .",". $this->type.",". $this->size;    
    }
    
    abstract public function touchscreen();
}
class services extends ACME
{
    public function touchscreen()
    {
        return "Touchscreen repairing Comming soon in future...!";    
    }
    
    public function repair($name,$mobile,$vendor,$type,$size)
    {   
	
	    if($this->vendor=='hp' && $this->type=='laptop' && ($this->size=='small' || $this->size=='medium' || $this->size=='large')){$repairing=$this->repairarray[1].' and '.$this->repairarray[2];}
		if($this->vendor=='hp' && $this->type=='server' && ($this->size=='small' || $this->size=='medium' )){$repairing=$this->repairarray[2].' and '.$this->repairarray[4];}
		if($this->vendor=='hp' && $this->type=='server' && ($this->size=='large' )){$repairing=$this->repairarray[2].' and '.$this->repairarray[4];}
		if($this->vendor=='apple' && $this->type=='server' && $this->size=='medium'){$repairing=$this->repairarray[3];}
		if($this->vendor=='hp' && $this->type=='server' && $this->size=='medium'){$repairing=$this->repairarray[2].' and '.$this->repairarray[3].' and '.$this->repairarray[4];}
		if(($this->vendor=='sony' ||  $this->vendor=='apple') && ($this->type=='laptop' || $this->type=='personel desktop') && ($this->size=='small' || $this->size=='medium' || $this->size=='large')){$repairing=$this->repairarray[1];}
		if(($this->vendor=='hp') && $this->type=='personel desktop' && ($this->size=='small' || $this->size=='medium' || $this->size=='large')){$repairing=$this->repairarray[1].' and '.$this->repairarray[2];}
		if(($this->vendor=='sony') && $this->type=='server' && ($this->size=='medium' || $this->size=='small')){$repairing=$this->repairarray[3].' and '.$this->repairarray[4];}
		if(($this->vendor=='sony') && $this->type=='server' && ($this->size=='large' )){$repairing=$this->repairarray[4];}
		if(($this->vendor=='apple') && $this->type=='server' && ($this->size=='small' || $this->size=='medium' )){$repairing=$this->repairarray[3];}
		if(($this->vendor=='apple') && $this->type=='server' && ($this->size=='large')){$repairing='server maintanance';}
        return parent::repair($name,$mobile,$vendor,$type,$size) . ", for come for repairing under ".$repairing;    
    }
}
$com = new services();
if($_POST['laptop_size']!=null){
$_POST['size']=$_POST['laptop_size'];    
}
else if($_POST['server_size']!=null){
$_POST['size']=$_POST['server_size'];    
}
else if($_POST['apple_size']!=null){
$_POST['size']=$_POST['apple_size'];    
}
$com->name = trim($_POST['name']);
$com->mobile=trim($_POST['mobile']);
$com->vendor=trim($_POST['vendor']);
$com->type=trim($_POST['type']);
$com->size=trim($_POST['size']);

echo $com->repair($com->name,$com->mobile,$com->vendor,$com->type,$com->size);
echo "<br/>";
echo $com->touchscreen();

?>