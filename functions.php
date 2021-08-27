<?php 

/**
 * Karith Design Build
 * Functions 
 *
 * @attr    something    some information about something
 * @attr    etc          etc etc
 */

// Function Check Page 

function checkpage(){if(isset($_GET['page'])){return true;}else{return false;}}

// Function Load Page 

function LoadPage(){
	ob_start();
    include("header.php");

	if (checkpage() === true) {

		if (isset($_GET['action'])) {
			$title_of_page 	= str_replace("-", " ",$_GET['action']." > ".$_GET['page']);
			$title_of_page 	= ucwords($title_of_page);
		}
		else{
			$title_of_page 	= str_replace("-", "", $_GET['page']);
			$title_of_page 	= ucwords($title_of_page);
		}

		$file_to_load = "views/".$_GET['page'].".php";
		if (file_exists($file_to_load)) {
			include $file_to_load;
			$subtitle_of_page = "Karith Design Build Private Limited";
		}
		else{
			include "views/404.php";
			$subtitle_of_page = "Karith Design Build Private Limited";
		}
	    $seo_keys = file_get_contents(siteurl.'/seo.php?word='.$_GET['page']);
		
	}
	else{
		$title_of_page = "Karith Design Build Private Limited";
		$subtitle_of_page = "Dreams. Created";
		include "views/index.php";
    	$seo_keys = file_get_contents(siteurl.'/seo.php?word=index');
	}
    
    $buffer=ob_get_contents();
    ob_end_clean();

    $find 		= array("{title}","{subtitle}", "{siteurl}","{keywords}");
    $replace 	= array($title_of_page,$subtitle_of_page, siteurl, $seo_keys);
    $buffer		= str_replace($find,$replace,$buffer);
    echo $buffer;

}

// Function Homepage Projects
function projects(){
	$url = file_get_contents(siteurl.'/config/api.php/projects?transform=1');
	$url = json_decode($url,true);
	$url = $url['projects'];
	return $url;
}

function Get_Project($slug){
	$url = file_get_contents(siteurl."/config/api.php/projects?filter=slug,eq,".$slug."&transform=1");
	$url = json_decode($url,true);
	$url = $url['projects'];
	return $url;
}

function Get_Images($projectId){
	$url = file_get_contents(siteurl."/config/api.php/images/?transform=1&filter=project,eq,".$projectId);
	$url = json_decode($url,true);
	$url = $url['images'];
	return $url;
}