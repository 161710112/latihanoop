<DOCTYPE html>

<html>
<head>
<title></title>
<body>
===================================  <br/>
Diketahui hasil bangu datar 		<br/>
===================================
<br/>

<?php
 
 class penjumlahan {
 	public $p,$l,$s1,$a,$t;


 	 function set_nilai($panjang,$lebar,$sisi,$alas,$tinggi)
 	{
 		$this->p  = $panjang;
 		$this->l  = $lebar;
 		$this->s1 = $sisi;
 		$this->a = $alas;
 		$this->t = $tinggi;
 	}
 	 function get_nilai1()
 	{
 		return $this->p*$this->l;
 	}
 	function get_nilai2()
 	{
 		return $this->s1*$this->s1;									
 	}
 	function get_nilai3()
 	{
 		return $this->a*$this->t;
 	}
 	function get_nilai4()
 	{
 		return $this->a*$this->t;
 	}
 	function get_nilai5()
 	{
 		return $this->p*$this->l*2;
 	}
 	function get_nilai6()
 	{
 		return $this->s1*4;
 	}
 	function get_nilai7()
 	{
 		return $this->s1+$this->s1+$this->s1+$this->s1;
 	}
 }
 $penjumlahan1 = new penjumlahan ;	
  $penjumlahan1->set_nilai (5,9,10,9,8);
  echo "hasil luas persegi panjang: ".$penjumlahan1->get_nilai1().'<br>';
  echo "hasil luas persegi : ".$penjumlahan1->get_nilai2().'<br>';
  echo "hasil luas segitiga : ".$penjumlahan1->get_nilai3().'<br>';
  echo "hasil luas jajar genjang : ".$penjumlahan1->get_nilai4().'<br>';
  echo "hasil keliling persegi panjang : ".$penjumlahan1->get_nilai5().'<br>';
  echo "hasil keliling persegi : ".$penjumlahan1->get_nilai6().'<br>';
  echo "hasil keliling belah ketupat : ".$penjumlahan1->get_nilai7().'<br>';



?>
===================================<br/>
Diketahui p=5,l=9,s=10,a=9,t=8		<br/>
===================================
	
</body>
</head>
</html>