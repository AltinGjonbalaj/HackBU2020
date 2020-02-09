<?php 
// Default to form
$show_form = TRUE;

//Form default values
$gas_mileage = 0;
$miles_work = 0;
$miles_grocery = 0;
$miles_travel = 0;
$gas_cost = 0;
$carbon_footprint = 0;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Page starts with no input mistakes
    $input_valid = TRUE;

    //gets the integer inputs of the user
    $gas_mileage = filter_input(INPUT_POST, 'gas_mileage', FILTER_VALIDATE_INT);
    $miles_work = filter_input(INPUT_POST, 'miles_work', FILTER_VALIDATE_INT);
    $miles_grocery = filter_input(INPUT_POST, 'miles_grocery', FILTER_VALIDATE_INT);
    $miles_travel = filter_input(INPUT_POST, 'miles_travel', FILTER_VALIDATE_INT);

    $gas_cost =2.5*($miles_grocery + 5*$miles_work + $miles_travel)*2/$gas_mileage;
    $carbon_footprint = 351*($miles_grocery + 5*$miles_work + $miles_travel)*2/$gas_mileage;
}


$show_form = !($input_valid);


//Solves the differential equation for compounding interest

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset = 'UTF-8'/>
        <title>Cars Cost</title>
        <link rel = 'stylesheet' href = 'styles/main.css'/>
    </head>

    <body>
        <main>
        <h1>The "True" Cost of Riding a Car Everyday</h1>

        <div class="sidenav">
        <a href="home.php">Home</a>
        <a href ="finance.php">Financial Wellbing</a>
        <a href="finance2.php">Weekly Finance</a>
        <a href="stopjuuling.php" >Nicotine Addiction</a>
        <a href="helth.php">Environmental Footprint</a>
        <a href="crack.php">Motivation</a>
        </div>

        <article>
            <p class = 'text_format'>In America, cars are heavily ingrained in our culture. If you live in 
            the countryside or a suburban area, it is absolutely necessary to get from place to place. We have
            come greatly reliant on this mode of transportation however there is a cost to this financially
            and environmentally. While the cost of a car is greater, one mus not forgot the hidden costs that
            go with it.
            </p>
        </article>

        <?php
        if ($show_form) { ?>
        <!-- Form user input values calculate savings for future -->
            <form id="output" method="post" action="kars.php" novalidate>
                <div class="group_label_input">
                    <label for="gas_mileage_input">Gas Mileage</label>
                    <p>Enter in the miles per gallon consumption of your car.</p>
                    <input type="number" id="gas_mileage_input" name="gas_mileage" min="0" value="<?php echo $gas_mileage; ?>" />
                </div>

                <div class="group_label_input">
                    <label for="miles_work_input">Miles to work </label>
                    <p>Input the approximate distance from your work to home.</p>
                    <input type="number" id="miles_work_input" name="miles_work" min="0" value="<?php echo $miles_work; ?>" />
                </div>

                <div class="group_label_input">
                    <label for="miles_grocery">Distance from Grocery</label>
                    <p>Approximate the distance from your grocery store to home.</p>
                    <input type="number" id="miles_grocery_input" name="miles_grocery" min="0" value="<?php echo $miles_grocery; ?>" />
                </div>

                <div class="group_label_input">
                    <label for="miles_travel_input">Extra travel</label>
                    <p>Estimate how many extra miles you travel on a weekly basis.</p>
                    <input type="number" id="miles_travel_input" name="miles_travel" min="0" value="<?php echo $miles_travel; ?>" />
                </div>

                

                <div class="group_label_input">
                    <span><!-- empty element; used to align submit button --></span>
                    <input type="submit" value="See Weekly Costs" />
                </div>
            </form>

            <?php } else { ?>
                <div class="group_label_input">
                    <h2>Total cost of Gas in a Week: <?php echo $gas_cost ;?>  dollars </h2>
                    <h2>Also your carbon footprint is: <?php echo $carbon_footprint;?> grams of CO2</h2>
                    <p><a href="kars.php"> Try Another Calculation</a></p>
                    <p>Gas Mileage:<?php echo $gas_mileage; ?></p>
                    <p>Distance Travel to Work One Way:<?php echo $miles_work; ?></p>
                    <p>Distance Travel to Grocery Store One Way:<?php echo $miles_grocery; ?></p>
                    <p>Other Travel Distance:<?php echo $miles_travel; ?></p>
                </div>

            <?php } ?>

            <article>
                <p class = 'text_format'>
                    This is just your costs for a single week. Now imagine multiplying it 4 times in the month, and then the
                    12 months in a year. You begin to see how much you rack up in carbon footprint and hits on your wallet.
                    Sometimes to minimize on these costs, trying having a more fuel efficient car or if possible, use other 
                    modes of transportation such as train, bike, or simply walking.
                </p>
            </article>
        </main>
    </body>
</html>