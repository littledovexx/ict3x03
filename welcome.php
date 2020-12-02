/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
<!DOCTYPE html>
<html>
<body>

    <?php
    echo "Welcome to ICT3x03 Practical Test!";
    echo "Your password that you have entered is:";
    echo $_POST['psw'];
    ?>
    
    <input type="logout" value="Logout" onclick="exitOut()">
</body>
<script>
    function exitOut(){
        header("Location: /index.php");
    }
</script>
</html>
