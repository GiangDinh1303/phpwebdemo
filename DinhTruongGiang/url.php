
<?php 

	switch($_GET['go'])
	{
		case "home" :
		include ("home.php") ;
		break;
		
		
		case "puzzle" :
		include ("puzzle.php") ;
		break;
			case "popular" :
		include ("popular.php") ;
		break;
		
		
		case "survival" :
		include ("survival.php") ;
		break;
		
		
		case "dangky" :
		include ("dangky.php") ;
		break;
		
		case "lienhe" :
		include ("lienhe.php") ;
		break;
		
		case "dangki" :
		include ("dangki.php") ;
		break;
		
		case "xldangki" :
		include ("xldangki.php") ;
		break;
		
		case "dangnhap" :
		include ("dangnhap.php") ;
		break;
		
		case "xldangnhap" :
		include ("xldangnhap.php") ;
		break;
		
		
		case "detail_ts":
		include ("detail_ts.php");
		break;
		
		case "detail_tinkm":
		include ("detail_tinkm.php");
		break;
		
		case "detail_sp":
		include ("detail_sp.php");
		break;
		
		case "showcart":
		include ("showcart.php");
		break;
		
		case "addcart":
		include ("addcart.php");
		break;
		
		case "delcart":
		include ("delcart.php");
		break;
	
		default :
		include("home.php");
	
	}
	
?>
