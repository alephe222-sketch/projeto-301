<?php include ('db_connection.php'); 

use LDAP\Result;?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> To_Do_list</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <h1> Minha To Do list </h1>
    <form action="add_task.php" method="POST">
    <input type="text" name="title" placeholder="Nova tarefa..." required> 
    <button type="submit"> Adicionar</button>  
    </form>

    <hr>

    <ul>
        <?php
        $sql = "SELECT * FROM task ORDER BY id DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                echo "<li>";
                echo $row['status'] == 'concluida' ? "<s>{$row['title']}</s>" : $row['title'];
            echo "
            <a href='update_task.php?id={row['id']}'>X</a>
            <a href='delete_task.php?id={row['id']}'>Y</a>";
            echo "</li>";
            }
           }   else { 
                echo " <p>Nenhuma tarefa cadastrada.</p>";
}
        
            
        ?>
    </ul>
</body>
</html>
