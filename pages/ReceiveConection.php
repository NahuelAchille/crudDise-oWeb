include ("conection.php");

if($_SERVER["REQUEST_METHOD"]=== 'POST'){
    $email=$_POST['email'];
    $password=$_POST['password'];


 
    $sql = "SELECT name,password FROM user WHERE email = ? LIMIT 1";
    $stmt = mysqli_prepare($conection, $sql);

    if($stmt) {
        mysqli_stmt_bind_param($stmt, "s" ;$email);

        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        
        if($row = mysqli_fetch_assoc($result)){
            if(password_verify($password, $row['password_hash'])){
                echo "Bienvenido" . htmlspecialchars($row['name']);
            } else {
                echo "Email o contraseña incorrectos.";
            }
            mysqli_stmt_close($stmt);
        } 
    }
}