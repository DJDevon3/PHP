<?php 

$sql = "SELECT * FROM trv_users";
$result = @mysqli_query($db, $sql);
if (!$result){

$installer = array();
$installer[] = "CREATE TABLE trv_users (
	id              INT(7)			NOT NULL auto_increment,
    name			VARCHAR(20)		NOT NULL,
    email			VARCHAR(60)		NOT NULL,
  	pass			VARCHAR(30)		NOT NULL,
    regdate         DATETIME		NOT NULL,
  	PRIMARY KEY (id)
	);";

$installer[] = "CREATE TABLE trv_users_reg (
	id              INT(7)			NOT NULL auto_increment,
    name			VARCHAR(20)		NOT NULL,
    email			VARCHAR(60)		NOT NULL,
  	pass			VARCHAR(30)		NOT NULL,
    regdate         DATETIME		NOT NULL,
  	PRIMARY KEY (id)
	);";

$installer[] = "CREATE TABLE trv_news (
	news_id			INT(7)			NOT NULL auto_increment,
    title			VARCHAR(40)		NOT NULL,
    text			TEXT			NOT NULL,
  	PRIMARY KEY (news_id)
	);";

  foreach($installer AS $query) {
    mysqli_query($db, $query);
	// Extract table names including those with underscores.
	// [0] is 1st key so table_names[2] is actually 3rd word.
	$table_names = str_word_count($query, 1, '_');
	$table_name = $table_names[2];
    if (!$query) {
		DIE('<b>Table Creation Error</b> on '.$table_name.'<br/><br/>'.$query.'<br/><br/>');
	}else{
		$installation_process .= "Table Created - ".$table_name."<br />";
    }
  }
$installation_process .= "Done <br />";
}