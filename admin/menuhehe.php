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


   
	  <div class="dropdown">
	  <button class="mainmenubtn">Barang</button>
	  <div class="dropdown-child">
      <a href="<?php echo "?p=pakaian";?>">Pakaian</a>
      <a href="<?php echo "?p=aksesoris";?>">Aksesori</a>
	  <a href="<?php echo "?p=sunting";?>">Sunting</a>
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
</body>
</html>