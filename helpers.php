<?php
function showError(){
    if(isset($_SESSION['error'])){
        return "<p id='errorMsg'>{$_SESSION['error']}</p><br><br>";
    }
}


//Helper function for dumping data, move to some global "helpers file"
function dd($data){
    die(highlight_string("<?php\n\$data =\n" . var_export($data, true) . ";\n?>"));
}

function redirect($path){
    header("Location: ".BASE_URL.'/'.$path);
    die();
}

function logOutLink(){
    return BASE_URL."/user/logout";
}


?>