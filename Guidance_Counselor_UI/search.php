<?php  
    $connect = mysqli_connect("localhost", "root", "", "guidance_and_counseling");  
    
    if(isset($_POST["query"])){  
        $output = '';  
        $query = "SELECT * FROM users WHERE first_name LIKE '%".$_POST["query"]."%'";  
        $result = mysqli_query($connect, $query);  
        $output = '<ul class="list-unstyled">';  
        
        if(mysqli_num_rows($result) > 0){  
            while($row = mysqli_fetch_array($result)){  
                $output .= '<li>'.$row["first_name"].'</li>';  
            }  
        }else{  
            $output .= '<li>User Not Found</li>';  
        }  
    
    $output .= '</ul>';  
    echo $output;

        if(isset($_POST['submit'])){  
           
            $query2 = "SELECT * FROM users WHERE first_name '$output'";
            $execute = $connect -> query($query2) or die($connect->error);
            $get = $execute -> fetch_assoc();
            
            while($get = $execute -> fetch_assoc()){
                echo '<script type="text/javascript">
                    document.getElementById("showName").innerHTML = '.$row["first_name"].';  
                      </script>';
            }
        }
    } 
?>