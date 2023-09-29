<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogos paralimpicos</title>
</head>
<body>
    <form action="" method="post">    
        <select name="slJogosPara">        
            <option> Escolha uma edição Paralímpica</option>        
            
            <?php            
                for($i=1960;$i<=2024;$i+=4) {                
                    echo"<option value=$i> $i </option>";            
                }        
            ?>        
        </select>            
        
        <input type="submit" value="Ok">    
    </form>        
    
    <?php            
    $op = $_POST['slJogosPara'];            
    
    switch ($op) {                
        case '1960':                    
        echo'Você escolheu 1960 - Roma';                    
        break;                
        case '1964':                        
        echo"Você escolheu 1964 - Tóquio";                        
        break;                     
        default:                    
        echo"Você não escolheu nenhum ano";                    
        break;            
    }        
    ?>
</body>
</html>