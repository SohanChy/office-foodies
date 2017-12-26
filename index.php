<?php
  define( "BASE_PATH", getcwd() );
  define( "BASE_URL", "http://localhost/office-foodies");

//Helper function for dumping data, move to some global "helpers file"
  function dd($data){
    die(highlight_string("<?php\n\$data =\n" . var_export($data, true) . ";\n?>"));
  }


  require_once 'app/core/init.php';

  $n=new App;