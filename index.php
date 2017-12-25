<?php
  define( "BASE_PATH", getcwd() );

  //Helper function for dumping data, move to some global "helpers file"
  function dd($data){
    die(highlight_string("<?php\n\$data =\n" . var_export($data, true) . ";\n?>"));
  }


  require_once 'app/core/init.php';

  $n=new App;