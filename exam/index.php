<html>
<head>

<?php 
/// AÑADE EL CODIGO NECESARIO PARA PODER ACCEDER AL CONTENIDO DEL FICHERO statistics.php

include("statistics.php");
if(isset($_COOKIE['UserName'])){
    echo $_COOKIE["UserName"];
}

?>

</head>


<body>


<?php

    if(isset($_POST["send"])){
        if(!empty($_POST["name"])){
            if($_POST["name"] == "LoL" || $_POST["name"] == "WoW" || $_POST["name"] == "Valorant"
            || $_POST["name"] == "Fortnite" || $_POST["name"] == "Minecraft"){
                if(is_numeric($_POST["number"])){
                    if(is_numeric($_POST["score"]) && $_POST["score"] > 0){
                        if(!validateDate($_POST["date"])){
                            if($_POST["win"] == "yes" || $_POST["win"] == "no"){
                                if($_POST["win"] == "yes"){
                                    $ganar = 1;
                                }else{
                                    $ganar = 0;
                                }
                                $s1 = new Statistics($_POST["name"], $_POST["team"],
                                    $_POST["number"], $_POST["score"], $ganar,
                                    $_POST["date"]);
    
                                    $db = new DBManager();
                                    $db->insertStatistics($s1);
                            }
                        }
                    }

                }
            }
        }else{
            $_POST["escondido"] = $_POST["escondido"] + 1;
            echo $_POST["escondido"];
        }
    }

    function validateDate($date){
        if(strpos($date, "-") == 4 && strpos($date, "-",1) == 7){
            return true;
        }else{
            return false;
        }
    }


    class GameData{
        function calculateGeneral(){
            if(isset($_POST["send"])){
                $db = new DBManager();
                $dbArray = $db->getStatistics();
                $percentGeneral = 0;
                $cantMatch = 0;
                $arrayPercent = array();
                foreach($dbArray as $value){
                    if($value->getWon() == 1){
                        if(!array_key_exists($value->getTeamName, $arrayPercent)){
                            $arrayPercent[$value->getTeamName] = 1;
                        }else{
                            $arrayPercent[$value->getTeamName] += 1;
                        }
                    }
                    $cantMatch++;
                }
                echo "<ul>";
                foreach ($arrayPercent as $key=>$valor){
                    $finalValue = $valor / $cantMatch;
                    echo "<li>$key</li>";
                    echo "<li>$finalValue</li>";
                }
                echo "<ul>";
        
        
            }
        }
    }

    $g1 = new GameData();
    $g1->calculateGeneral();


?>
<form method="POST">
    <p>Name of the game<input type="text" name="name"></p>
    <p>Name of the team<input type="text" name="team"></p>
    <p>Number of players<input type="text" name="number"></p>
    <p>Score<input type="text" name="score"></p>
    <p>Won<input type="text" name="win"></p>
    <p>Date(YYYY-MM-DD)<input type="text" name="date"></p>
    <input type="hidden" name="escondido" value="">
    <input type="submit" name="send">
</form>
</body>

</html>