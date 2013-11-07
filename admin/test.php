<!DOCTYPE html>
<html>
    <head>
        <title>Ceci est une page de test avec des balises PHP</title>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    </head>
    <body>
        <h2>Page de test</h2>
         
        <p>
            Cette page contient du code HTML avec des balises PHP.<br />
            
            Voici quelques petits tests :
        </p>


            <?php

            //conection:
            $bdd    = "localhost";
            $usr    = "root";
            $mdp    = "root";

            $link = mysqli_connect($bdd, $usr, $mdp,"unitedbasketwoluwebe") or die("Error " . mysqli_error($link));

            //consultation:

            $query = "SELECT * FROM PLAYER_DATA" or die("Error in the consult.. " . mysqli_error($link));

            //execute the query.

            if (($result = mysqli_query($link,$query)) == FALSE) {

                /* free result set */
                echo "Querry failed : " . $query;
                $link->close();

                /* Display Querry Error */
                //TODO : Remove for release
                $message  = 'Invalid query: ' . mysql_error() . "\n";
                $message .= 'Whole query: ' . $query;
                die($message);

            }

            //display information:

            while($row = mysqli_fetch_array($result)) {
                 echo $row["id"] . "<br>";
                 echo $row["name"] . "<br>";
                 echo $row["surname"] . "<br>";
                 echo $row["birthdate"] . "<br>";
            }

            if (!mysqli_free_result($result));

            mysqli_close($link);

        ?>

        <?php
            if(isset($_POST['formSubmit']))
            {
                $aCountries = $_POST['formCountries'];

                if(!isset($aCountries))
                {
                    echo("<p>You didn't select any countries!</p>\n");
                }
                else
                {
                    $nCountries = count($aCountries);

                    echo("<p>You selected $nCountries countries: ");
                    for($i=0; $i < $nCountries; $i++)
                    {
                        echo($aCountries[$i] . " ");
                    }
                    echo("</p>");
                }
            }


        ?>





         

        <ul>
        <li style="color: blue;">Texte en bleu</li>
        <li style="color: red;">Texte en rouge</li>
        <li style="color: green;">Texte en vert</li>
        </ul>
         
    </body>


        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
            <label for='formCountries[]'>Select the countries that you have visited:</label><br>
            <select multiple="multiple" name="formCountries[]">
                <option value="US">United States</option>
                <option value="UK">United Kingdom</option>
                <option value="France">France</option>
                <option value="Mexico">Mexico</option>
                <option value="Russia">Russia</option>
                <option value="Japan">Japan</option>
            </select><br>
            <input type="submit" name="formSubmit" value="Submit" >
        </form>
</html>
