<html>
   <head>
   <meta http-equiv='Content-Type' content='text/html'; charset='UTF-8' >
   <title>9 lab</title>
   
   <script type="text/javascript" src="jquery.js"></script>
	
   <style type="text/css">
   TABLE {
    width: 50%; /* Ширина таблицы */
    height: 50%; /* Высота таблицы */
   } 
  </style>

   
</head>
<body>

<?php

$rows = nl2br($_POST['num_tbl1']); 
$cols = nl2br($_POST['num_tbl1']); 

$num=0;

echo '<table border="1" width="300">';
    for ($i=$rows;$i>0;$i--) 
	{ 
        echo '<tr>';
		
		if($i==$rows) {$num++; echo '<td colspan="', $i ,'">';  if($num%4==0) echo 4; echo '</td>';}
		else 
		{	$num++;
			echo '<td colspan="', $i ,'">';
			if($num%4==0) echo 4;

			$num++;
			echo '</td><td rowspan="', $i ,'">';
			if($num%4==0) echo 4;
			echo '   </td>';
		}
			
		echo '</tr>';
    }
	
echo '</table>';

?>


<script type="text/javascript">
$(document).ready(function(){


$('td').append("<p>Text</p>");

var array = $("td").filter(function(){ return (parseInt($(this).attr("colspan"))>1)} );
array.css('color', 'red');

array = $("td").filter(function(){ return (parseInt($(this).attr("rowspan"))>1)} );
array.css('font-size', '32px');

});
</script>


</body>
</html>