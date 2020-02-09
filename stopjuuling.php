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
        <li>Quit one day of the week!</li>
        <button type="button">Complete!</button>

        <li>Make a list of reasons to quit!</li>
        <button type="button">Complete!</button>

        <li>Save all your used packs!</li>
        <button type="button">Complete!</button>
    </ol>
</div>

        <div class='task-box'>
        <h2>This Week's Tasks</h2>

        <ol>
        <li>Read an article on health effects!</li>
        <button type="button">Complete!</button>

        <li>Talk to a friend or family member about quiting!</li>
        <button type="button">Complete!</button>

        <li>Start a new hobby!</li>
        <button type="button">Complete!</button>
    </ol>
</div>

        <div class='task-box'>
        <h2>This Month's Tasks</h2>

        <ol>
        <li>Pick a day to quit for good!</li>
        <button type="button">Complete!</button>

        <li>Replace smoking with the new hobby!</li>
        <button type="button">Complete!</button>

        <li>Keep track of the days you have gone without smoking!</li>
        <button type="button">Complete!</button>
    </ol>
</div>


    </center>

  </body>
</html>
