<html>
    <body>
      Static part <br /><br />
     test
     <?php 
     $bdd = new PDO('mysql:host=localhost;dbname=test','root','root');

$response = $bdd->query("SELECT * FROM `recipe` ");
while ($results = $response->fetch() ){
	var_dump($results);
	
	foreach ($results as $one) {
		echo($one);	
		echo("<br/>");

}
	echo("<br/>");

	echo("<br/>");
}
        
$response->closeCursor() ; ?>
    </body>
</html>