<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/foithths.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="../scripts/drop_down_log_in.js"></script>
</head>

<body>

<div id="wrapper">
	<!--ARXH PANW MEROS-->
	<div id="header_gen">
    
    	
        
        <?php 
			include("config2.php");
		?>
        
        <?php 
			if(isset($_SESSION[user]))
			{
				include("foithths/include_with_php/logo.php"); 
			}
			else if(!isset($_SESSION[user]))
			{
				echo "<div id=\"logo\">
						<a href=\"../index.php\"><img src=\"../images/logo.png\" /></a>
					  </div>
					 ";
			}
		 ?>    	
        
        <?php
			if(isset($_SESSION[user]))
			{
				echo "<div id=\"logo_foit\">
						<img src=\"images/foitites.png\" width=\"207\" height=\"70\" wid />
					</div>"; 
			}
		?>
        
    </div>
    <!--TELOS PANW MEROS-->
    
    <!--ARXH MESSAIO MEROS-->
    <div id="mid">
    
    	<?php
			if(isset($_SESSION[user]))
			{
				include("foithths/include_with_php/gen_menu.php"); 
			}
			else
			{
				echo "<div id=\"gen_menu\">
						<div id=\"button_small\" class=\"blue\">
						<a href=\"../index.php\"><h4><strong>Αρχική Σελίδα</strong></h4></a>
						</div>
						
						<div id=\"button_small\" class=\"blue\">
						<a href=\"idrumata_suggrammata.php\"><h4><strong>Συγγράμματα Σχολών</strong></h4></a> 
						</div>
						
						<div id=\"button_small\" class=\"blue\">
						<a href=\"aplh_anazhthsh.php\"><h4><strong>Αναζήτηση Συγγραμμάτων</strong></h4></a> 
						</div>
						
						<div id=\"button_small\" class=\"blue\">
						<a href=\"#\"><h4><strong>Επικοινωνία</strong></h4></a>
						</div>
						
						<div id=\"button_small\" class=\"blue\">
						<a href=\"#\"><h4><strong>FAQ</strong></h4></a>
						</div>
					</div>
					";
			}
			
			if(isset($_SESSION[user]))
			{
				include("foithths/include_with_php/gen_menu_foit.php"); 
			}
		?>
        
        <div id="kefalides_selidwn">
        Αναζήτηση Συγγραμμάτων
        </div>
        
        <div id="upokefalida">
        Χρησιμοποιείστε λέξεις κλειδιά για την αναζήτηση Συγγραμμάτων
        </div>
        
        <div id="_search_">
            <form action="euresh_suggrammatwn_aplh.php" method="GET">
                <input type="text" id="aplh_anazhthsh" name="aplh_anazhthsh" />
                <br/>
	            <input type="submit" id="sub_search" name="sub_search" value="Αναζήτηση" />
            </form>
            
            <div id="pros_sun">
            <a href="suntheth_anazhthsh.php">Σύνθετη Αναζήτηση</a>
            </div>
        </div>
        
    </div>
    
    <!--TELOS MESSAIO MEROS-->
    
    <!--ARXH KATW MEROS-->
    <div id="footer">    	
		<?php 
	  
		  if(!isset($_SESSION[user]))
		  {		  
			echo "<div id=\"upper_bottom\">  
					<div id=\"bot_left\">
						<a href=\"../index.php\"><img width=\"48\" height=\"47\" src=\"../images/footer/eudoxus-mikro-logo.png\" /></a>
						<a href=\"../index.php\"><p><br/><strong>Αρχική Σελίδα</strong></p></a>
						<a href=\"idrumata_suggrammata.php\"><p><strong>Συγγράμματα Σχολών</strong></p></a>
						<a href=\"aplh_anazhthsh.php\"><p><strong>Αναζήτηση Συγγραμμάτων</strong></p></a>
						<a href=\"#\"><p><strong>Επικοινωνία</strong></p></a>
						<a href=\"#\"><p><strong>Συχνές Ερωτήσεις</strong></p></a>
					</div>
					
					<div id=\"bot_center\">
						<a href=\"../../../eggrafh.php\"><p style=\"color:#CD5A00;\"><br/><strong>Εγγραφή</strong></p></a>
						<a href=\"../../../index.php\"><p style=\"color:black;\"><strong>Σύνδεση</strong></p></a>
					</div>
					
					<div id=\"bot_right\">
						<a href=\"https://twitter.com/eudoxusgr\"><img width=\"43\" height=\"42\" src=\"../images/footer/twit.png\" /></a>
					</div>
				</div>
				";
		  }
		  else if(isset($_SESSION[user]))
		  {
			include("foithths/include_with_php/stadar_bottom_menu_foithths.php");
		  }
		  
		  include("foithths/include_with_php/downer_footer.php");
		  
		 ?>           
    </div>
    
    <?php include("foithths/include_with_php/copyrights.php"); ?> 
    <!--TELOS KATW MEROS-->
</div>

</body>
</html>