<?php
    
    header('Content-Type: text/event-stream');
    header('Cache-Control: no-cache');
    header('Connection: keep-alive');
    header("Access-Control-Allow-Origin: *");

    if(isset($_FILES['file'])){
        $state = json_decode(file_get_contents("state.json"));
        $extension = pathinfo($_FILES['file']['name'])['extension'];// get file extension
        $state->numuploads++;
        file_put_contents('state.json', json_encode($state));
        $target = 'uploads/'.$state->numuploads.".".$extension;
        move_uploaded_file( $_FILES['file']['tmp_name'], $target);
        echo 'data: '.json_encode($state);
        echo "\n\n";
        flush();
                
    }   
    
    // header("Location: index.php");

?>