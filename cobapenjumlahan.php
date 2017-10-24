<DOCTYPE html>
<html>
<head>
<title></title>
<body>
<?php
 
 class penjumlahan {
 	public $bil1,$bil2;


 	 function set_nilai($bilangan1,$bilangan2)
 	{
 		$this->bil1 = $bilangan1;
 		$this->bil2 = $bilangan2;
 	}
 	 function get_nilai1()
 	{
 		return $this->bil1+$this->bil2;
 	}
 	function get_nilai2()	
 	{
 		return $this->bil1-$this->bil2;
 	}
 	function get_nilai3()
 	{
 		return $this->bil1*$this->bil2;
 	}
 	function get_nilai4()
 	{
 		return $this->bil1/$this->bil2;
 	}

 }
 $penjumlahan1 = new penjumlahan ;
  $penjumlahan1->set_nilai (21,3);
  echo "hasil penjumlahan: ".$penjumlahan1->get_nilai1().'<br>';
  echo "hasil pengurangan: ".$penjumlahan1->get_nilai2().'<br>';
  echo "hasil perkalian  : ".$penjumlahan1->get_nilai3().'<br>';
  echo "hasil pembagian  : ".$penjumlahan1->get_nilai4();



?>
	
</body>
</head>
</html>