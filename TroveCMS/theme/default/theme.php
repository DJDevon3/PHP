<?php
  
$TEMPLATE->set('title', 'Treasure Trove Content Management System');


// TEMPLATE CODE TO CREATE UNCACHED PAGES
$header = array(  
	'themepath'				=> TRV_THEMEPATH,
	'meta_data'				=> $meta_data,
	'page_title'			=> $page_title,
	'username'				=> $cookie_username,
);  
$TEMPLATE->set_vars($header);  
echo $TEMPLATE->fetch('theme/'.$selected_theme.'/template/header.html'); 


$body = array(  
	'news_story_text'		=> 'CMS for developers',
	'installation'			=> $installation_process,
	'db_connection'			=> $message,
	'plugin_name'			=> $plugin_name,
);  

$TEMPLATE->set_vars($body);  
echo $TEMPLATE->fetch('theme/'.$selected_theme.'/template/body.html');

$footer = array(  
	'footer_msg'			=> 'Treasure Trove CMS &copy; <a href="http://www.TreasureCoastDesigns.com">T.C.D.</a>',
);  
$TEMPLATE->set_vars($footer);  
echo $TEMPLATE->fetch('theme/'.$selected_theme.'/template/footer.html');