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
        <a href="tasks.php">Home</a>
        <a href="finance.php">Financial Wellbeing</a>
        <a href="stopjuuling.php" >Nicotine Addiction</a>
        <a href="helth.php">Environmental Footprint</a>
        <a href="crack.php">Motivation</a>
        <a href="kars.php">Weekly Car Help</a>
    </div>

    <header>
        <h1 style="color:white;">Task Fulfillment</h1>
            <!-- bar-size sets default width size-->
            <div class="progress-bar" style="--bar-size: 30"
            data-label="Loading..."> </div>

            <span style="width: 50%"></span>
        </div>
        </header>
    <center>
    <div class='menu'>
        <div class='task-box'>
        <h2>Today's Tasks</h2>
    <!--<h2>Today's Tasks</h2>-->
    <ol>
        <li>Turn off the lights!</li>
        <button type="button">Complete!</button>

        <li>Take the stairs!</li>
        <button type="button">Complete!</button>

        <li>Bring a grocery bag!</li>
        <button type="button">Complete!</button>
    </ol>
</div>

        <div class='task-box'>
        <h2>This Week's Tasks</h2>

        <ol>
        <li>Take shorter showers!</li>
        <button type="button">Complete!</button>

        <li>Use a reusable water bottle!</li>
        <button type="button">Complete!</button>

        <li>Use the air conditioner less!</li>
        <button type="button">Complete!</button>
    </ol>
</div>

        <div class='task-box'>
        <h2>This Month's Tasks</h2>

        <ol>
        <li>Donate old clothes!</li>
        <button type="button">Complete!</button>

        <li>Buy a water filter!</li>
        <button type="button">Complete!</button>

        <li>Take public transportation!</li>
        <button type="button">Complete!</button>
    </ol>
</div>


    </center>

  </body>
</html>
