
<div?
require_once('head.php');
?>
<script src='script.js'></script>
 <!--Tab Area-->
 <div class="tab">
                
                <button class="tablinks" onclick="opentab(event, 'File')" id='defaultOpen'>FILE <i class="fa-solid fa-file-code" style="margin-left: 5px
                ;"></i></button>
                   <button class="tablinks" onclick="opentab(event, 'URL')">URL <i class="fa-sharp fa-solid fa-globe" style="margin-left: 5px
                ;"></i></button>
                
            </div>



            <!--Code Areas-->
            <div id="Code" class="tabcontent">
                <div class="language-selection">
                  <form action="Check.php" method="post" style="width: 500px;">
                    <label for="dropdown"class="lang">Select the Language</label>
                    <select id="dropdown" name="lang-selection">
                        <option value="c">C <img src="Icons/c.png" class="lang-icon"></option>
                        <option value="cpp">C++ <img src="Icons/c++.png" class="lang-icon"></option>
                        <option value="py">Python <img src="Icons/python.jpeg" class="lang-icon"></option>
                        <option value="php">PHP <img src="Icons/php.png" class="lang-icon"></option>
                      </select>
                    </div>
                    
                    <div class="textbox">
                      <textarea  name="code-area"style="height: 200px; width: 100%; resize: none; padding: 10px;" placeholder="Paste your code here ..."></textarea>
                    </div>
                    <!-- <div class="btn"> -->
                    <button class="analyze-btn">Analyze</button>
                    </form>
              </div>




                <!--File Area-->
                <div id="File" class="tabcontent">
                    <div class="language-selection">
                      
                      <form action="File.php" method="post" enctype="multipart/form-data">
                    <label for="dropdown"class="lang">Select the Language</label>
                    <select id="dropdown" name="lang-selection">
                        <option value="c">C <img src="Icons/c.png" class="lang-icon"></option>
                        <option value="cpp">C++ <img src="Icons/c++.png" class="lang-icon"></option>
                        <option value="py">Python <img src="Icons/python.jpeg" class="lang-icon"></option>
                        <option value="php">PHP <img src="Icons/php.png" class="lang-icon"></option>
                      </select>
                  </div>
                  <div class="upload-box">
                    <div class="upload-drop-zone" id="drop-zone">
                      <span class="drop-zone-text">Drag and drop files here or click to upload</span>
                      <input name="file" type="file" class="upload-input" id="upload-input" multiple>
                    </div>
                    <div class="upload-file-name" id="file-name"></div>
                  </div>
                    <button type="submit" class="upload-btn" id="upload-btn">Upload</button>
                </form>
              </div>
           
              <!-- URL Section -->
        <div id="URL" class="tabcontent">
          <div class="url-page">
            <div class="input-container">
              <form action="Url.php" method="post">
              <input name="url-input" style="padding: 0;" type="text" placeholder="Enter the URL">
              <button type="submit" class="analyze-btn-url" style="margin-top:100px">Analyze</button>
             </form>
           </div>
           <p class="url-desc">Note : The URL scan will take some time which depends upon the size and complexity of the website.</p>
           </div>
        </div>
    </div>

<script>
    document.getElementById("defaultOpen").click();
    </script>
