<?
/**[N]**
 * JIBAS Road To Community
 * Jaringan Informasi Bersama Antar Sekolah
 * 
 * @version: 2.5.0 (Juni 20, 2011)
 * @notes: JIBAS Education Community will be managed by Yayasan Indonesia Membaca (http://www.indonesiamembaca.net)
 * 
 * Copyright (C) 2009 PT.Galileo Mitra Solusitama (http://www.galileoms.com)
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 **[N]**/ ?>
<?
class nama
{
 var $namafile ="";
 var $i ="";
  //$namafile="../jibitheme/theme/black/ket.txt";
  function buk_file()
  { 
   $namafile =$this->namafile ;
   if(file_exists($namafile)){
    $fp=fopen($this->namafile,"r");
		     while($isi=fgets($fp,'1000'))
			{
			 // echo $isi.'<br>';
			  $arrrr[]=$isi;
			  			}
	}
	return $arrrr ;
  }
 function title()
 {
   $arr = $this->buk_file();
	 $pieces = explode(": ", $arr[$this->i]);
	 $title = $pieces[1];
	 if($title =="")
	  {
	   $title ='&nbsp;';
	  }
	 return $title ;
  }
 function tampilkan()
  {
   echo $this ->title();
   }
}
?>