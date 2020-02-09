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
        <li>Daily task 1</li>
        <button type="button">Complete!</button>

        <li>Daily task 2</li>
        <button type="button">Complete!</button>

        <li>Daily task 3</li>
        <button type="button">Complete!</button>
    </ol>
</div>

        <div class='task-box'>
        <h2>This Week's Tasks</h2>

        <ol>
        <li>Weekly task 1</li>
        <button type="button">Complete!</button>

        <li>Weekly task 2</li>
        <button type="button">Complete!</button>

        <li>Weekly task 3</li>
        <button type="button">Complete!</button>
    </ol>
</div>

        <div class='task-box'>
        <h2>This Month's Tasks</h2>

        <ol>
        <li>Monthly task 1</li>
        <button type="button">Complete!</button>

        <li>Monthly task 2</li>
        <button type="button">Complete!</button>

        <li>Monthly task 3</li>
        <button type="button">Complete!</button>
    </ol>
</div>


    </center>

  </body>
</html>
