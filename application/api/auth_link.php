<?php
// header('Content-Type: application/json');    
include "../config/conn.php";
function auth_link($user_id){
    global $conn;
    $query = "SELECT system_links.link  FROM `user_authority` 
            JOIN system_links
            ON user_authority.action=system_links.link_id
            WHERE user_authority.user_id='$user_id'";
            $result =  $conn->query($query);
            $filename = basename($_SERVER['PHP_SELF']);
            $authorized = false;
           while( $row =  $result->fetch_Assoc())
                 {
                        if (in_array($filename, explode(",", $row['link']))) {
                            $authorized = true;
                            break;
                        }
                    }
                
                    if (!$authorized) {
                        header("Location: ../views/un_auth_file.php");
                        exit();
                    } 

                 }
        
?>