<!DOCTYPE html>
<html>

<head>
	<title>Our search Engine</title>
</head>

<center>
<body onload="id()">


<script type="text/javascript">

	function id()
	{
		document.search_box.search.focus();
	}
	
</script>

  <form name="search_box">
   <input type="text" name="search">
   <input type="submit" value="Search" name="searchh">

</form>
</body>
</center>

</html>

<?php

mysqli_connect("localhost","root"," ");
mysqli_connect_db("Search");

  if($isset($_POST['search']))
  {
     $search = $_POST('search');
  } 

    if(search=="")
    {
    	echo "Plz write something in the box";
    	exit();
    }

    $sql = "select * from website where site_key like '%$search%'";

    $rs = mysqli_query($sql);
    if(mysqli_num_rows($rs)<1)
    {
    	echo "Sorry !!!, No results found";
    	exit();
    }

    echo "Images for $search";

      while($row = mysqli_fetch_array($rs))
      {
      	echo "";
      }

?>