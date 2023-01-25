<?php 
include "son.php";

$query = "select * from chat";
$result = $con->query($query);
                   while ($row = $result->fetch_assoc()) {
                        if (empty($row["img"])) {
                            echo
                            "<p>".
                            $row["Data"]. " ".
                            $row["name"]. ": ".
                            $row["userMessage"].
                            "</p>";
                        }else {
                            echo
                            "<p>".
                            $row["Data"]. " ".
                            $row["name"]. ": ".
                            $row["userMessage"].
                            "<br>". 
                            "<img src='pictures/".$row["img"]."'/>".
                            "</p>";
                        }
                   }
?>