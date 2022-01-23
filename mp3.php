<? include "al_header.php";
include "config.php";
?>
<title>GK Questions MP3 Files</title>
<section id="content">
    <br><br>

  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
     <div class="left_sidebar">
       <div class="single_widget1">
      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Responsive ad 1 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7307496469562502"
     data-ad-slot="6877011277"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </div></div></div>
  </div>
</br>
  
<div class="container">
<div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
<div class="single_widget1">
<h2 class="featured_title"><div><a href="http://www.tnpscrock.in/online_test/"><strong>Write Online Exam Win 1,00,000/-</strong></a>&nbsp;&nbsp;<img border="0" src="images/new12.gif" width="76" height="43"></div></h2>
       
       
       
<div class="col-lg-12 col-md-12 col-sm-12">
<div class="row">
			
     
<div class="col-lg-4 col-md-4 col-sm-4">
<div class="right_sidebar">
          <div class="single_widget5">
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
 
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7307496469562502"
     data-ad-slot="5916165274"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script> 
    </div></div></div>
        
<div class="col-lg-4 col-md-4 col-sm-4">
	

        <div class="right_sidebar">
          <div class="single_widget">
	
	<?php  
	
	if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 8;
        $offset = ($pageno-1) * $no_of_records_per_page;

        $conn=mysqli_connect("localhost","tnpsc","Jayabal@001","wpnews");
        // Check connection
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die();
        }

        $total_pages_sql = "SELECT COUNT(*) FROM upload_mp3_alter";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $sql = "SELECT * FROM upload_mp3_alter LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($conn,$sql);
        	while($row=mysqli_fetch_array($res_data))
	{
		 $str = $row['file'];
		 $str = substr($str, 0, strpos($str, '.'));
		 $final_file=str_replace('_',' ',$str);
                 $last_file=str_replace('TNPSCROCK',' ',$final_file);
                 $j_file=str_replace('-',' ',$last_file);
            
           
?>
                
        
        <div align="left" class="banchor"><a class="cat-item" href="http://www.tnpscrock.in/admin/uploads/<?php echo $row['file'] ?>" target="_blank">Download - <? echo $j_file; ?></a></div>
        <?php
 }
        mysqli_close($conn);
	
	
	?>
  
  <div align="center">
   <ul class="pagination" >
        <!--<li><a href="mp33.php?pageno=1">First</a></li> -->
        
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "mp3.php?pageno=".($pageno - 1); } ?>">Previous</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "mp3.php?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
       <!-- <li><a href="mp33.php?pageno=<?php echo $total_pages; ?>">Last</a></li> -->
    </ul></div>


    
   
    
<br />
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7307496469562502"
     data-ad-slot="2823098070"
     data-ad-format="link"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </div></div></div>
         
         

<div class="col-lg-4 col-md-4 col-sm-4">
<div class="right_sidebar">
          <div class="single_widget5">
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
 
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7307496469562502"
     data-ad-slot="8869631672"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </div></div></div>
 </div>
 </div>       
       
       
       
       
       
       
       
       
       <div class="left_sidebar">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="left_sidebar">
      
  
<?


try 
	{
	$dbo = new PDO('mysql:host='.$databaseHost.';dbname='.$databaseName, $databaseUsername, $databasePassword);
	}
catch (PDOException $e) 
	{
	print "Error!: " . $e->getMessage() . "<br/>";
	die();
	}

$quer1="SELECT * FROM subjects_add";
$tquery=mysql_query("SELECT subject_name FROM subjects_add");

$total=mysql_num_rows($tquery);
	//echo $total;
$i=0;
$rowcount=0;
$sresult =  $mysqli-> query($quer1);
if ($sresult-> num_rows>0)
{
    
        
while($sdisplay = $sresult-> fetch_assoc())
//foreach ($dbo->query($quer1) as $sdisplay) 
{
if ($sdisplay['subject_name']=="Online Quiz")
{
}
else
{
$rowcount++;
$y=3;
$ncolumn = fmod($total,$y);
//echo $ncolumn;
//echo $rowcount;	
	if ($ncolumn==1)
	{
		if ($rowcount == $total)
		{
		echo "<div class=row>";
        echo "<div class=col-lg-12 col-md-12 col-sm-12>";
        echo "<div class=left_sidebar>";
		}
	}
	if ($ncolumn==2)
	{
		if ($rowcount == ($total-1))
		{
		echo "<div class=row>";
        echo "<div class=col-lg-12 col-md-12 col-sm-12>";
        echo "<div class=right_sidebar>";
		}
	}
//echo $i; 	
echo "<div class=col-lg-3 col-md-3 col-sm-3>";
echo "<div class=single_widget>";
echo "<h2>".$sdisplay['subject_name']."</h2><ul>";
$snumber=$sdisplay['subject_id'];
//echo $snumber;
$sql1 = "select lesson_id, lesson_name from add_lesson where subject_id=$sdisplay[subject_id]";
$result =  $mysqli-> query($sql1);
if ($result-> num_rows>0)
{
    
        $nrlesson=1;
	while($row = $result-> fetch_assoc())
	{
		//echo $row['subject_id'];
		if($nrlesson>5)
		{
$subjectname = preg_replace('/\s+/', '_', $sdisplay['subject_name']);
echo "<div align=right class=banchor><a  style=cursor: pointer href=mp3lesson/$subjectname/".$sdisplay['subject_id'].">Read More>></a></div>";
//echo '<div align="right" class="banchor"><a  style="cursor: pointer" onclick="javascript: window.location = \'tlesson.php?testlesson='.$subjectname.'\&tlid='.$sdisplay['subject_id'].'\';">Read More>></a></div>';


		break;
		}
		else
		{
if($sdisplay['subject_name']=="Puzzles")
			{
				$sql2 = "select topic_id, topic_name from add_topic where lesson_id=$row[lesson_id]";
				$result1 =  $mysqli-> query($sql2);
if ($result1-> num_rows>0)
					{

						while($row1 = $result1-> fetch_assoc())
						{
$lesname = preg_replace('/\s+/', '_', $row['lesson_name']);

$suname = preg_replace('/\s+/', '_', $sdisplay['subject_name']);
$tname = preg_replace('/\s+/', '_', $row1['topic_name']);
		
echo "<li class=cat-item><a  style=cursor: pointer href=mp3files/$suname/$lesname/$tname/".$row1['topic_id'].">".$row['lesson_name']."</a></li>";
//echo '<li class=cat-item><a  style="cursor: pointer" onclick="javascript: window.location = \'testquestion.php?testquestions='.$suname.'\&lesson='.$lesname.'\&topic='.$tname.'\&id='.$row1['topic_id'].'\';">'.$row['lesson_name'].'</a></li>';

				
						
						}
					}
			}
else
{
$lessonname = preg_replace('/\s+/', '_', $row['lesson_name']);

$subname = preg_replace('/\s+/', '_', $sdisplay['subject_name']);
		
echo "<li class=cat-item><a  style=cursor: pointer href=mp3topic/$subname/$lessonname/".$row['lesson_id'].">".$row['lesson_name']."</a></li>";

//echo '<li class=cat-item><a  style="cursor: pointer" onclick="javascript: window.location = \'testtopic.php?testtopic='.$subname.'\&lesson='.$lessonname.'\&tid='.$row['lesson_id'].'\';">'.$row['lesson_name'].'</a></li>';

}
		
		}
		$nrlesson++;
				
	}
    
}
echo "</ul></div></div>";
	if ($ncolumn==1)
	{
		if ($rowcount == $total)
		{

		echo "<div class=col-lg-3 col-md-3 col-sm-3>";
		echo "</div>";
		echo "<div class=col-lg-3 col-md-3 col-sm-3>";
		echo "</div>";
		?><div class="col-lg-3 col-md-3 col-sm-3">
		<div class="single_iteam">online test 2
<img src="images/300x250x4.jpg" alt=""></div></div> <?
		}
	}
	if ($ncolumn==2)
	{
		if ($rowcount == $total)
		{
		echo "<div class=col-lg-3 col-md-3 col-sm-3>";
		echo "</div>";
		?><div class="col-lg-3 col-md-3 col-sm-3">
		<div class="single_iteam">1
</div></div> <?
		}
	}


$i++;
if($i>=3)
{
	?><div class="col-lg-3 col-md-3 col-sm-12">
<div class="left_sidebar">
       <div class="single_widget1"><!-- <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> 
 
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7307496469562502"
     data-ad-slot="2823098070"
     data-ad-format="link"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>link ad 1 -->
    </div></div></div></div></div></div>
<div class="col-lg-12 col-md-12 col-sm-12">
<br /><hr/><br/>
</div>
<div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="left_sidebar">
      
  
<?
	$i=0;
}
}
}
}
echo "</div></div></div></div></div></div></div></section>";
include "al_footer.php";
?>

