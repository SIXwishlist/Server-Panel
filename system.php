<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <meta http-equiv="Content-Style-Type" content="text/css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

     <link rel="stylesheet" href="/css/mystyle.css">
   
    <script type="text/JavaScript" src="phpsysinfo/js.php?name=jquery"></script>
    <script type="text/JavaScript" src="phpsysinfo/js.php?name=jquery.dataTables"></script>
    <script type="text/JavaScript" src="phpsysinfo/js.php?name=jquery.nyroModal"></script>
    <script type="text/JavaScript" src="phpsysinfo/js.php?name=jquery.jgrowl"></script>
    <script type="text/JavaScript" src="phpsysinfo/js.php?name=jquery.timer"></script>
    <script type="text/JavaScript" src="phpsysinfo/js.php?name=jquery.treeTable"></script>
  </head>
  <body>

    <div id="toppanel" class="col-md-12">
        <div id="titlebar" class="col-md-8">
          <h2>Server Panel 1.0</h2>
        </div>
    </div>
    <div class="container">
        <div id="mainpanel" class="card">
            <div class="card-header">
              <h2>System Info</h2>
            </div>
            <div class="card-block">
            <div id="maincontent">
            <div class="card col-md-11">
                <div class="card-block">
                <h4>Network</h4>
                <hr/>
                <strong>IP-Address </strong><br/>
                <span>
                <?php
                  $IP = $_SERVER['SERVER_ADDR'];
                  echo $IP;
                ?>
                </span>
                <br/>
                <br/>
                <strong>Hostname </strong><br/>
                <span>
                <?php
                  $Host = $_SERVER['SERVER_NAME'];
                  echo gethostbyaddr($Host);
                ?>
                </span>

                <br/><br/>
                <strong>Domain </strong><br/>
                <span>
                <?php
                  $Dom = $_SERVER['PHP_AUTH_USER'];
                  echo $Dom;
                ?>
                </span>
                <br/><br/>
                <strong>Benutzer </strong><br/>
                <span>
                <?php
                  
                  echo get_current_user();
                ?>
                </span>
                <h4>Hardware</h4>
                <hr/>
               
                <strong>Betriebssystem </strong><br/>
                <span>
                <?php
					//This shows the OS of the User connected to the Website!
					
                  // if(strstr($_SERVER['HTTP_USER_AGENT'], "NT 10.0")){
                    // $OS = "Windows 10";
                  // }
                  // elseif(strstr($_SERVER['HTTP_USER_AGENT'], "NT 6.1")){
                    // $OS = "Windows 7";
                  // }
                  // elseif(strstr($_SERVER['HTTP_USER_AGENT'], "NT 6.2")){
                    // $OS = "Windows 8";
                  // }
                  // elseif (strstr($_SERVER['HTTP_USER_AGENT'], "NT 5.1")) {
                    // $OS = "Windows XP";
                  // }
                  // elseif (strstr($_SERVER['HTTP_USER_AGENT'], "Ubuntu")) {
                    // $OS = "Ubuntu";
                  // }
                  // elseif (strstr($_SERVER['HTTP_USER_AGENT'], "FreeBSD")) {
                    // $OS = "FreeBSD";
                  // }
                  // elseif (strstr($_SERVER['HTTP_USER_AGENT'], "Debian")) {
                    // $OS = "Debian";
                  // }
                  // elseif(strstr($_SERVER['HTTP_USER_AGENT'], "Mac")){
                    // $OS = "Mac";
                  // }
                  // echo $OS;
                // ?>
				<?php
					// We only need Linux and Windows
					if(php_uname('s') == "Linux"){
						$OS = "Linux";
					}
					if(strstr(php_uname('s') == "NT")){
						$OS = "Windows";
					}
					else{
						$OS = "undefined";
					}
				?>
                </span>
                
                <br/><br/>
                <strong>CPU</strong><br/>
                <?php
					if($OS=="Windows"){
						echo(shell_exec('powershell.exe ./cpuinfo.ps1'));
					}
					elseif($OS=="Linux"){
						
					}
                ?>
                <br/><br/>

                <strong>RAM</strong><br/>
                <?php
					if($OS=="Windows"){
						echo(shell_exec('powershell.exe ./raminfo.ps1'));
					}
                ?>
                <br/><br/>
              </div>
              </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <div id="bottompanel" class="col-md-12">
      <div id="footbar" class="col-md-8">
        <h6>&copy;2017 Yannick Axmann</h6>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>