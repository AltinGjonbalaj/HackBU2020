<!DOCTYPE html>

<html>
  <head>
      <center>
    <title>Daily Tasks</title>
    </center>
    <!-- link css and script-->
    <link rel='stylesheet' href='tasks.css'/>
    <script src="tasks.js" defer></script>
    <script>
        document.getElementsByTagName('button').onclick = function() {
           alert("button was clicked");
        };
    </script>
  </head>
  <body>

    <!-- sidebar-->
    <div class="sidenav">
        <a href="home.php">Home</a>
        <a href ="finance.php">Financial Wellbing</a>
        <a href="finance2.php">Weekly Finance</a>
        <a href="stopjuuling.php" >Nicotine Addiction</a>
        <a href="helth.php">Environmental Footprint</a>
        <a href="crack.php">Motivation</a>
    </div>

    <header>
        <h1 style="color:white;">Task Fulfillment</h1>
            <!-- bar-size sets default width size-->
            <div class="progress-bar" style="--bar-size: 30"
            data-label="Progress:"> </div>

            <span style="width: 50%"></span>
        </div>
        </header>
    <center>
    <div class='menu'>
        <div class='task-box'>
        <h2>Today's Tasks</h2>
    <!--<h2>Today's Tasks</h2>-->
    <ol>
        <li>Don't buy takeout</li>
        <button type="button">Complete!</button>

        <li>Carpool</li>
        <button type="button">Complete!</button>

        <li>$TSLA calls</li>
        <button type="button">Complete!</button>
    </ol>
</div>

        <div class='task-box'>
        <h2>This Week's Tasks</h2>

        <ol>
        <li>Keep track of expenditures</li>
        <button type="button">Complete!</button>

        <li>Balance checkbook</li>
        <button type="button">Complete!</button>

        <li>Wake up and grind</li>
        <button type="button">Complete!</button>
    </ol>
</div>

        <div class='task-box'>
        <h2>This Month's Tasks</h2>

        <ol>
        <li>Make food at home</li>
        <button type="button">Complete!</button>

        <li>Contribute to 401k</li>
        <button type="button">Complete!</button>

        <li>$500 into kid college fund</li>
        <button type="button">Complete!</button>
    </ol>
</div>


    </center>

  </body>
</html>
