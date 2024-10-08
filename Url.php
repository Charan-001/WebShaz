<style>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
  margin-top: 200px;
  margin-left: 900px;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>


<?php
require_once "templates/head.php";
require_once "templates/header.php";
?>
<div class="loader"></div><?php
    if(isset($_POST['url-input']))
            {
                $input_url = $_POST['url-input'];
                
            
    

        if(isset($_POST['url-input']))
        {
            
            $cmd = 'cd arachni/bin && ./arachni '.$input_url. ' --report-save-path text ';
            //$output_cmd = 'cd arachni/bin && ./arachni_reporter text --reporter=txt:outfile=report.txt';   

            
            shell_exec($cmd);
            shell_exec($output_cmd);
            echo  '<pre>'.shell_exec('cd arachni && cat report.txt').'</pre>';
            shell_exec('cd arachni && rm report.txt text');

            // echo '<pre>'.readfile('report.json').'</pre>';
        
    
   

        $file = fopen("arachni/report.txt", "r");


        $output = fread($file, filesize("file.txt"));


        fclose($file);


        $text = 'The Final Analysis Summary :';
        echo '<pre style="text-align:center;font-size:17px;font-family: Roboto;margin-right: 200px;">'.$text.'</pre>';

        echo '<textarea style="resize:none; height:500px; width:1500px;  margin-left:250px; font-size:17px; padding-top:50px;" readonly> '.$output.' </textarea>';

    
            }
        }



