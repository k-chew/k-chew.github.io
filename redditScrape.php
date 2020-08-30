<!DOCTYPE html>
<html lang="en">
    <body>

<?php
    if(array_key_exists('button1', $_POST)) { 
        button1(); 
    }
    function button1() { 
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,"https://www.reddit.com/r/Thritis/.json");
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch,CURLOPT_HEADER, true);
        $response = curl_exec($ch);
        echo $response;
    }
    ?> 
    <form method="post"> 
        <input type="submit" name="button1"
                class="button" value="Button1" />
    </form> 
</body>
</html>