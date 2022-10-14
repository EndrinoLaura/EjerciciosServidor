<? 

    $operacion = $_POST['pantalla'];

    if(isset($_POST['del'])){
        $operacion = substr($operacion,0,(strlen($operacion)-1));
    }

    if(isset($_POST['btn'])){

        $op = $operacion;

        switch($_POST['btn']){
            case '+':
                $operacion = $operacion.'+';
            break;
            case '-':
                $operacion = $operacion.'-';
            break;
            case '*':
                $operacion = $operacion.'*';
            break;
            case '/':
                $operacion = $operacion.'/';
            break;
        }

        if($op == $operacion){
            for($var=0; $var<=9; $var++){
            if($var == (int)$_POST['btn']){
                $operacion = $operacion.$var;
                break;
            }
            }
        }
        

    }

    if(isset($_POST['clear'])){
        $operacion = '';
    }

    if(isset($_POST['calc'])){
        $operacion = '<?php $operacion=('.$operacion.')?>';
        eval('?>'.$operacion.'<?');
    }
    
?>

<form style="background-color: silver; 
            padding:2%; position: fixed;
            width: 40%; height: 60%; 
            margin-left:30%; margin-top: 
            8%; border: 2px solid blue;" 
            action="" method="POST">

    <input type="text" name="pantalla" readonly value="<?=$operacion?>"
        style="position: relative; left:15%; 
        top:2%; width: 60%; height:20%; 
        font-size: 50px; border: 2px solid black;"/>

    <input type="submit" name="del" value="←"
        style="position: relative; 
        left:17%; height:10%; width: 17%; 
        font-size: 25px;"/>

    <input type="submit" name="btn" value="1" 
        style="width: 15%; height: 15%;
        position: absolute; left: 18%; 
        top: 32%; font-size: 25px;"/>

    <input type="submit" name="btn" value="2" 
        style="width: 15%; height: 15%;
        position: absolute; left: 38%; 
        top: 32%; font-size: 25px;"/>

    <input type="submit" name="btn" value="3" 
        style="width: 15%; height: 15%;
        position: absolute; left: 58%; 
        top: 32%; font-size: 25px;"/>

    <input type="submit" name="btn" value="4" 
        style="width: 15%; height: 15%;
        position: absolute; left: 18%; 
        top: 50%; font-size: 25px;"/>

    <input type="submit" name="btn" value="5" 
        style="width: 15%; height: 15%;
        position: absolute; left: 38%; 
        top: 50%; font-size: 25px;"/>

    <input type="submit" name="btn" value="6" 
        style="width: 15%; height: 15%;
        position: absolute; left: 58%; 
        top: 50%; font-size: 25px;"/>

    <input type="submit" name="btn" value="7" 
        style="width: 15%; height: 15%;
        position: absolute; left: 18%; 
        top: 68%; font-size: 25px;"/>

    <input type="submit" name="btn" value="8" 
        style="width: 15%; height: 15%;
        position: absolute; left: 38%; 
        top: 68%; font-size: 25px;"/>

    <input type="submit" name="btn" value="9" 
        style="width: 15%; height: 15%;
        position: absolute; left: 58%; 
        top: 68%; font-size: 25px;"/>

    <input type="submit" name="btn" value="0" 
        style="width: 20%; height: 10%;
        position: absolute; left: 35.5%; 
        top: 87%; font-size: 25px;"/>

    <input type="submit" name="btn" value="+"
        style="position: absolute; left: 82%;
        top: 32%; width: 15%; height: 8%;
        font-size: 25px;"/>

    <input type="submit" name="btn" value="-"
        style="position: absolute; left: 82%;
        top: 47%; width: 15%; height: 8%;
        font-size: 25px;"/>

    <input type="submit" name="btn" value="/"
        style="position: absolute; left: 82%;
        top: 62%; width: 15%; height: 8%;
        font-size: 25px;"/>

    <input type="submit" name="btn" value="*"
        style="position: absolute; left: 82%;
        top: 75%; width: 15%; height: 8%;
        font-size: 25px;"/>

<input type="submit" name="calc" value="="
        style="position: absolute; left: 82%;
        top: 87.5%; width: 15%; height: 8%;
        font-size: 25px;"/>
    
    <input type="submit" name="clear" value="C"
        style=" position: absolute; font-size: 25px;
        width: 12%; height: 30%;
        left: 3%; top: 43%;"/>
    

</form>