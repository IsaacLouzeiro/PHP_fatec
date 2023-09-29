<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de case</title>
</head>
<body>
    <form action="" method="post">        
        <select name="slCidades">            
            <option>Escolha uma cidade</option>            
            <option value="1">Franco da Rocha</option>            
            <option value="2">Francisco Morato</option>            
            <option value="3">Caieiras</option>            
            <option value="4">Mairiporã</option>        
        </select>        
        <input type="submit" value="Executar">    
    </form>    
    <?php        
        $op = $_POST['slCidades'];        
        switch ($op) {            
            case '1':                
            echo"Você escolheu Franco da Rocha";                
            break;            
            case '2':                
            echo"Você escolheu Francisco Morato";                
            break;            
            case '3':                
            echo"Você escolheu Caieiras";                
            break;            
            case '4':                
            echo"Você escolheu Mairiporã";                
            break;                    
            default:                
            echo"Escolha uma cidade";                
            break;        
        }    
    ?>
</body>
</html>