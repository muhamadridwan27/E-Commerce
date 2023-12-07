<html>
<head>
<style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-weight: bold;
	font-style: italic;
}
.style2 {color: #FF0000}
.mainmenubtn{
	background-color: black;
	color : white;
	border : none;
	cursor :pointer;
	padding :20px;
}

.mainmenubtn:hover{
	background-color: red;
}

.dropdown{
	position: relative;
	display: inline-block;
}

.dropdown-child{
	display: none;
	background-color: black;
	min-width: 200px;
}

.dropdown-child a{
	color : white;
	padding : 10px;
	text-decoration: none;
	display: block;
}

.dropdown:hover .dropdown-child{
	display: block;
	display: block;
}
-->
</style>
</head>
<body>

<div class="container">
  <div class="grid">
    <div class="dh12">
	  <div class="topnav" id="myTopnav">
      <a class="active" href="<?php echo "?p=home";?>"><em><span class="style1">Des Bordir</span></em></a>
	  <a href="javascript:void(0);" style="font-size:14px;" class="icon" onClick="myFunction()">&#9776;</a>
      <a href="<?php echo "?p=profilpel";?>">Pelanggan</a>
      <a href="<?php echo "?p=barang";?>">Barang</a>
	  <a href="<?php echo "?p=penjualan";?>">Penjualan</a> 
      <a href="<?php echo "?p=pesanan_barang"; ?>">Pesanan Barang</a>
      <a href="<?php echo "?p=ongkir"; ?>">Ongkir</a>
	  <a href="<?php echo "?p=laporan"; ?>">Laporan</a>
	  <a href="<?php echo "?p=logout"; ?>">Logout</a>
	</div>
   </div>
  
	<script>
	function myFunction(){
	  var x = document.getElementById("myTopnav");
	  if(x.className === "topnav"){
	    x.className += " responsive";
	  }else{
	    x.className = "topnav";
	  }
	}
	</script>
  </div>
</div>
</body>
</html>