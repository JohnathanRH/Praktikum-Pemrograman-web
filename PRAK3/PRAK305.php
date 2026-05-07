<?php
    $str = "";
    if(!empty($_POST)){
        $str = $_POST['word'];
    }
?>
<HTML:5>
    <head>
        <style>
        </style>
    </head>
    <body>
        <form action="/prakwebmod3/PRAK305.php" method="post">
            <input type="text" name="word">
            <button type="submit">submit</button>
        </form>
        <h1>Input</h1><br>
        <?php
            echo $str;
        ?>
        <br>
        <h1>Output</h1><br>
        <?php
            foreach(str_split($str) as $char){
                for($i = 0; $i < strlen($str); $i++){
                    if($i == 0){
                        echo strtoupper($char);   
                    } else {
                        echo strtolower($char);
                    }
                }
            }
        ?>
        <br>
    </body>
</HTML:5>