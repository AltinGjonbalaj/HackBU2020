<?php 
// Default to form
$show_form = TRUE;

//Form default values
$savings = 0;
$investment_interest = 0;
$income_job = 0;
$income_asset = 0;
$mortgage = 0;
$necessities = 0;
$discretionary_spending = 0;
$retirement = 0;
$years_interest = 0;

//Determines if correct values were inputed
$savings_feedback = FALSE;
$investment_interest_feedback = FALSE;
$income_job_feedback = FALSE;
$income_asset_feedback = FALSE;
$mortgage_feedback = FALSE;
$necessities_feedback = FALSE;
$discretionary_spending_feedback = FALSE;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Page starts with no input mistakes
    $input_valid = TRUE;

    //gets the integer inputs of the user
    $savings = filter_input(INPUT_POST, 'savings', FILTER_VALIDATE_INT);
    $investment_interest = filter_input(INPUT_POST, 'investment_interest', FILTER_VALIDATE_INT);
    $income_job = filter_input(INPUT_POST, 'income_job', FILTER_VALIDATE_INT);
    $income_asset = filter_input(INPUT_POST, 'income_asset', FILTER_VALIDATE_INT);
    $mortgage = filter_input(INPUT_POST, 'mortgage', FILTER_VALIDATE_INT);
    $necessities = filter_input(INPUT_POST, 'necessities', FILTER_VALIDATE_INT);
    $discretionary_spending = filter_input(INPUT_POST, 'discretionary_spending', FILTER_VALIDATE_INT);
    $years_interest = filter_input(INPUT_POST, 'years_interest', FILTER_VALIDATE_INT);

    $i = 0;
    $current = $savings;

    while($i < $years_interest){
        $current = ($current + (($income_job + $income_asset - $mortgage - $necessities - $discretionary_spending)*12.0)) * (1.0 + ($investment_interest/100.0));
        //$current = $current * (1.0 + ($investment_interest/100.0));
        $i = $i + 1;
    }
}

$retirement = $current;
$show_form = !($input_valid);


//Solves the differential equation for compounding interest

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset = 'UTF-8'/>
        <title>Dont forget to insert title here</title>
        <link rel = 'stylesheet' href = 'styles/main.css'/>
    </head>

    <body>
        <main>
        <h1>Keep Your Finances in Track</h1>

        <article>
            <p class = 'text_format'>In today's America, personal finance seems hard. Our schools rarely teach us
                how to do our taxes, take out a mortgage, and most importantly prepare for our
                retirement. Many financial planners are not as extensive in preparing for your future
                especially since they are not as responsive to changes. Let us help you prepare for the future,
                whatever comes your way.
            </p>
        </article>

        <?php
        if ($show_form) { ?>
        <!-- Form user input values calculate savings for future -->
            <form id="output" method="post" action="finance.php" novalidate>
                <div class="group_label_input">
                    <label for="savings_input">Savings</label>
                    <input type="number" id="savings_input" name="savings" min="0" value="<?php echo $savings; ?>" />
                </div>

                <div class="group_label_input">
                    <label for="investment_interest_input">Rate of Investment </label>
                    <p>Put in the expected rate of investment per year.(Typically, the rate of investment of a safe index fund is 8%)</p>
                    <input type="number" id="investment_interest_input" name="investment_interest" min="0" value="<?php echo $investment_interest; ?>" />
                </div>

                <div class="group_label_input">
                    <label for="income_job">Income from Job</label>
                    <p>Please put in your monthly income after taxes.</p>
                    <input type="number" id="income_job_input" name="income_job" min="0" value="<?php echo $income_job; ?>" />
                </div>

                <div class="group_label_input">
                    <label for="income_asset_input">Income from Assets</label>
                    <p>Please input the value of your business and asset income after operating expenses</p>
                    <input type="number" id="income_asset_input" name="income_asset" min="0" value="<?php echo $income_asset; ?>" />
                </div>

                <div class="group_label_input">
                    <label for="mortgage_input">Mortgage</label>
                    <p>Here put in the mortgage due each month</p>
                    <input type="number" id="mortgage_input" name="mortgage" min="0" value="<?php echo $mortgage; ?>" />
                </div>

                <div class="group_label_input">
                    <label for="necessities_input">Necessities</label>
                    <p>When you want to maximize your savings, make sure to separate what is a want and a need</p>
                    <input type="number" id="necessities_input" name="necessities" min="0" value="<?php echo $necessities; ?>" />
                </div>

                <div class="group_label_input">
                    <label for="discretionary_spending_input">Discretionary Spending</label>
                    <p>To have more money for your retirement, cut down here.</p>
                    <input type="number" id="discretionary_spending_input" name="discretionary_spending" min="0" value="<?php echo $discretionary_spending; ?>" />
                </div>

                <div class="group_label_input">
                    <label for="years_interest_input">Years Until Retirement</label>
                    <p>The current retirement age is 66 for full social security benefits</p>
                    <input type="number" id="years_interest_input" name="years_interest" min="0" value="<?php echo $years_interest; ?>" />
                </div>

                <div class="group_label_input">
                    <span><!-- empty element; used to align submit button --></span>
                    <input type="submit" value="See Goal" />
                </div>
            </form>

            <?php } else { ?>
                <div class = "group_label_input">
                    <h2>Total Savings after <?php echo $years_interest ;?> years</h2>
                    <p><?php echo(round($retirement,2)); ?>
                    <p><a href="finance.php"> Try a New Goal</a></p>
                    <p>Savings:<?php echo $years_interest; ?></p>
                    <p>Income from Job:<?php echo $income_job; ?></p>
                    <p>Income from Assets:<?php echo $income_asset; ?></p>
                    <p>Mortgage Costs:<?php echo $mortgage; ?></p>
                    <p>Cost for Necessities:<?php echo $necessities; ?></p>
                    <p>Discretionary Spending:<?php echo $discretionary_spending; ?></p>
                    <p>Years of Interest:<?php echo $i; ?></p>
                 </div>


            <?php } ?>
        </main>

        <div class="sidenav">
            <a href="home.php">Home</a>
            <a href ="finance.php">Financial Wellbing</a>
            <a href="finance2.php">Weekly Finance</a>
            <a href="stopjuuling.php" >Nicotine Addiction</a>
            <a href="helth.php">Environmental Footprint</a>
            <a href="crack.php">Motivation</a>
        </div>
    </body>
</html>