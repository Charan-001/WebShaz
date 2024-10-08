<?php
require_once "templates/head.php";
require_once "templates/header.php";
function show_result($fout){
    $text = 'The Final Analysis Summary :';
    echo '<pre style="text-align:center;font-size:17px;font-family: Roboto;margin-right: 200px;">'.$text.'</pre>';

    echo '<textarea style="resize:none; height:500px; width:1500px;  margin-left:250px; font-size:17px; padding-top:50px;" readonly> '.$fout.' </textarea>';
    
    }
function dropdown_value(){
    if(isset($_POST['lang-selection']))
    {          
        $selectedOption = $_POST['lang-selection'];
        //echo "You selected: " . $selectedOption;   
        return $selectedOption;
    }
    else
    {
        echo 'Something went wrong';
    }
    
    }

if(isset($_FILES['file'])){
    $errors= array();
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];
    $file_ext= pathinfo($file_name, PATHINFO_EXTENSION);

    

    
  
  
    if (dropdown_value() == 'c' || dropdown_value()== 'cpp'){
        $efile= 'flawfinder '.$file_name;
    
        $out = shell_exec($efile);
        $a = strpos($out,"FINAL");
        $b = strrpos($out,"1");

        $fout = substr($out,$a,($b-$a)+2);
        show_result($fout);
    
    }

    elseif (dropdown_value() == 'php' ){
        $efile= 'phpcs '.$file_name;
    
        $out = shell_exec($efile);
        $a = strpos($out,"FOUND");
        $b = strrpos($out,"PHP");

        $fout = substr($out,$a,($b-$a)-2);
        show_result($fout);
    
    }
    elseif (dropdown_value() == 'py'){

        $efile= 'pycodestyle --first '.$file_name;

        $fout = shell_exec($efile);
        show_result($fout);
    }
            
}        
        
            
    
?>
