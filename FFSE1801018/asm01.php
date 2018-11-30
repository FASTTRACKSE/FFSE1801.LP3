<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style >
				  table{
		  	  	border:1px solid black;
        		border-collapse: collapse;
        		width:100%;
    }
    th,td{
       	 border:1px solid gray;
       	 padding: 10px;
       
    }
    tr:nth-child(odd){
        background-color: #ddd;
    }
    
      th.left{
          width: 5%;
         
      }
      th.right{
          width: 20%;
      }
	</style>
</head>
<body>
<?php 
$a=array(2.5,0,-1.7,0.2,-6.2,0.2,9.5,-3.9);
$b=array(2,1,-9.6,0.5,0.3,3.6,6,-0.3);
$x=array();
$tb=array();
for ($i=0; $i <count($a) ; $i++) { 
	if($a[$i]!=0){
		$x[$i]=-($b[$i])/($a[$i]);
		$tb[$i]="phuongtrinh co nghiem";
	} else {if ($b[$i]==0) {
		$tb[$i]="phuongtrinh vo so nghiem";
	} else{
		$tb[$i]="phuongtrinh vo nghiem";
		$x[$i]="-";
	}}
}
 
 ?>
<table>
	<tr>
	<th class="left">stt</th>
	<th class="right">a</th>
	<th class="right">b</th>
	<th class="right">x</th>
	<th class="right">ghi chu</th>
	
	</tr>	
<?php for($i=0;$i<count($a);$i++){ ?>
	<tr>
	<td class="left"><?php echo$i; ?></td>
	<td class="right"><?php echo $a[$i]; ?></td>
	<td class="right"><?php echo $b[$i]; ?></td>	
	<td class="right"><?php echo round($x[$i],2); ?></td>
	<td class="right"><?php echo $tb[$i]; ?></td>
	</tr>

<?php }?>	
</table>



</body>
</html>