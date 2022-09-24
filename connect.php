<?php
	/*$Connect = mysqli_connect("localhost","root","","qlbh") or die("Lỗi".mysqli_error($Connect));
	
	mysqli_query($Connect,'SET NAMES "utf8"');
	//mysqli_close($Connect);*/
	$Connect = pg_connect("postgres://zlahqttpvenofp:21d03f95e68c9eed4a9caf13b572719e8d729527b2b482df8d2eaabd812bb6ff@ec2-3-209-124-113.compute-1.amazonaws.com:5432/deb9i4dev18mvb");
    //$Connect = pg_connect("host=localhost port=5432 dbname=postgres");
	//$Connect = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=123456");
	
    if (!$Connect) {
        die("Connection failed");
    }
?>
