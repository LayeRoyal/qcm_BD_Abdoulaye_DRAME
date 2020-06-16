<?php
            $serverName = 'localhost';
            $dbName = 'qcm_abdoulaye_drame';
            $username = 'root';
            $password = '';
            
            //On essaie de se connecter
            try{
                $connexion = new PDO("mysql:host=$serverName;dbname=$dbName", $username, $password);
                //On définit le mode d'erreur de PDO sur Exception
                $connexion->exec("SET NAMES 'UTF8'");
                $connexion->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                

            }
            
            /*On capture les exceptions si une exception est lancée et on affiche
             *les informations relatives à celle-ci*/
            catch(PDOException $e){
              die("Erreur : " . $e->getMessage());
            }


            function requete( $connexion,$sql){
              $request = $connexion->query($sql);
              $result = $request->fetchAll(2);
              
              return $result;
            }
        ?>