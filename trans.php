<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformation of Sentences</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <!-- Custom CSS  -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        h4 {
            font-size: 20px;
        }

        h3 {
            font-size: 24px;
        }

        body {
            font-family: 'Lemonada';
        }
    </style>
</head>
<body>
    <center>
        <h1 class="mainHeading">
            Transformation of Sentences
        </h1>
    </center>

    <div class="examples">
        <h3>Examples</h3> <br>
        <pre style="font-family: 'Lemonada'">
1. The news is too good to be true.
    <b>⫸</b> The news is so good that it cannot be true. 
2. <i>Superlative:</i> Naomi is not one of the cleverest girls of the class.
    <b>⫸</b> <i>Comparative:</i> Some girls of the class are cleverer than Naomi. 
    <b>⫸</b> <i>Comparative:</i> Naomi is less clever than some other girls of the class. 
    <b>⫸</b> <i>Positive:</i> Naomi is not so clever as some other girls of the class. 
3. That kind of joke does not amuse me.
    <b>⫸</b> That kind of joke does not give me any amusement.
4.  <i>Simple:</i> He must work very hard to make up for the lost time.
    <b>⫸</b> <i>Compound:</i>  He must work very hard and make up for the lost time.
    <b>⫸</b> <i>Complex:</i> If he wants to make up for the lost time, he must work very hard.
            </pre>
    </div>
        <br><br>
    <h3>Transform the given sentences according to the instructions given as bold text.</h3>

    <!-- Question a -->
    <div class="question">
        <h4>(a) He drove too fast for the police to catch. <b>Remove 'too'</b></h4>
        <form action="trans.php" method="post">
            Ans. <input type="text" name="a">
            <input type="submit"  name="sa">
        </form>
        <?php 
            if(isset($_POST['sa'])) {
                $c = "He drove so fast that the police could not catch him.";
                $u = $_POST['a'];

                if($u == $c) {
                    echo "<span style='color: green; font-size: 20px;'> Your answer '$u' is correct. </span>";
                }

                else {
                    echo "<span style='color: red; font-size: 20px;'> OOPS! Your answer '$u' is wrong. The correct answer is '$c' </span>";
                }
            }
        ?>
    </div>

    <!-- Question b -->
    <div class="question">
        <h4>(b) I am as strong as him. <b>Change to comparative</b></h4>
        <form action="trans.php" method="post">
            Ans. <input type="text" name="b">
            <input type="submit"  name="sb">
        </form>
        <?php 
            if(isset($_POST['sb'])) {
                $c = "He is not stronger than me.";
                $u = $_POST['b'];

                if($u == $c) {
                    echo "<span style='color: green; font-size: 20px;'> Your answer '$u' is correct. </span>";
                }

                else {
                    echo "<span style='color: red; font-size: 20px;'> OOPS! Your answer '$u' is wrong. The correct answer is '$c' </span>";
                }
            }
        ?>
    </div>

    <!-- Question c -->
    <div class="question">
        <h4>(c) Iron is more useful than any other metal. <b>Change to superlative</b></h4>
        <form action="trans.php" method="post">
            Ans. <input type="text" name="c">
            <input type="submit"  name="sc">
        </form>
        <?php 
            if(isset($_POST['sc'])) {
                $c = "Iron is most useful of all metals.";
                $u = $_POST['c'];

                if($u == $c) {
                    echo "<span style='color: green; font-size: 20px;'> Your answer '$u' is correct. </span>";
                }

                else {
                    echo "<span style='color: red; font-size: 20px;'> OOPS! Your answer '$u' is wrong. The correct answer is '$c' </span>";
                }
            }
        ?>
    </div>

        <!-- Question d -->
        <div class="question">
        <h4>(d) It costs twelve rupees. <b>Replace the verb with a noun</b></h4>
        <form action="trans.php" method="post">
            Ans. <input type="text" name="d">
            <input type="submit"  name="sd">
        </form>
        <?php 
            if(isset($_POST['sd'])) {
                $c = "The cost is twelve rupees.";
                $u = $_POST['d'];

                if($u == $c) {
                    echo "<span style='color: green; font-size: 20px;'> Your answer '$u' is correct. </span>";
                }

                else {
                    echo "<span style='color: red; font-size: 20px;'> OOPS! Your answer '$u' is wrong. The correct answer is '$c' </span>";
                }
            }
        ?>
    </div>

        <!-- Question e -->
        <div class="question">
        <h4>(e) Besides robbing the poor child, he also murdered her. <b>Change to compiound</b></h4>
        <form action="trans.php" method="post">
            Ans. <input type="text" name="e">
            <input type="submit"  name="se">
        </form>
        <?php 
            if(isset($_POST['se'])) {
                $c = "He not only robbed the poor child but also murdered her.";
                $u = $_POST['e'];

                if($u == $c) {
                    echo "<span style='color: green; font-size: 20px;'> Your answer '$u' is correct. </span>";
                }

                else {
                    echo "<span style='color: red; font-size: 20px;'> OOPS! Your answer '$u' is wrong. The correct answer is '$c' </span>";
                }
            }
        ?>
    </div>

        <!-- Question f -->
        <div class="question">
        <h4>(f) He finished his exercise and put away his books. <b>Change to simple</b></h4>
        <form action="trans.php" method="post">
            Ans. <input type="text" name="f">
            <input type="submit"  name="sf">
        </form>
        <?php 
            if(isset($_POST['sf'])) {
                $c = "Having finished his exercise, he put away his books.";
                $u = $_POST['f'];

                if($u == $c) {
                    echo "<span style='color: green; font-size: 20px;'> Your answer '$u' is correct. </span>";
                }

                else {
                    echo "<span style='color: red; font-size: 20px;'> OOPS! Your answer '$u' is wrong. The correct answer is '$c' </span>";
                }
            }
        ?>
    </div>

        <!-- Question g -->
        <div class="question">
        <h4>(g) He confessed his crime. <b>Change to complex</b></h4>
        <form action="trans.php" method="post">
            Ans. <input type="text" name="g">
            <input type="submit"  name="sg">
        </form>
        <?php 
            if(isset($_POST['sg'])) {
                $c = "He confessed that he was guilty.";
                $u = $_POST['g'];

                if($u == $c) {
                    echo "<span style='color: green; font-size: 20px;'> Your answer '$u' is correct. </span>";
                }

                else {
                    echo "<span style='color: red; font-size: 20px;'> OOPS! Your answer '$u' is wrong. The correct answer is '$c' </span>";
                }
            }
        ?>
    </div>

        <!-- Question h -->
        <div class="question">
        <h4>(h) Except that he hut his hand, he was lucky. <b>Change to simple</b></h4>
        <form action="trans.php" method="post">
            Ans. <input type="text" name="h">
            <input type="submit"  name="sh">
        </form>
        <?php 
            if(isset($_POST['sh'])) {
                $c = "Except for the hurt to his hand, he was lucky.";
                $u = $_POST['h'];

                if($u == $c) {
                    echo "<span style='color: green; font-size: 20px;'> Your answer '$u' is correct. </span>";
                }

                else {
                    echo "<span style='color: red; font-size: 20px;'> OOPS! Your answer '$u' is wrong. The correct answer is '$c' </span>";
                }
            }
        ?>
    </div>

        <!-- Question i -->
        <div class="question">
        <h4>(i) Search his pockets and you will find the watch. <b>Change to complex</b></h4>
        <form action="trans.php" method="post">
            Ans. <input type="text" name="i">
            <input type="submit"  name="si">
        </form>
        <?php 
            if(isset($_POST['si'])) {
                $c = "If you search his pockets, you will find he watch.";
                $u = $_POST['i'];

                if($u == $c) {
                    echo "<span style='color: green; font-size: 20px;'> Your answer '$u' is correct. </span>";
                }

                else {
                    echo "<span style='color: red; font-size: 20px;'> OOPS! Your answer '$u' is wrong. The correct answer is '$c' </span>";
                }
            }
        ?>
    </div>

        <!-- Question j -->
        <div class="question">
        <h4>(j) I am certain you have made a mistake. <b>Change to compound</b></h4>
        <form action="trans.php" method="post">
            Ans. <input type="text" name="j">
            <input type="submit"  name="sj">
        </form>
        <?php 
            if(isset($_POST['sj'])) {
                $c = "You have made a mistake, and of this I am certain.";
                $u = $_POST['j'];

                if($u == $c) {
                    echo "<span style='color: green; font-size: 20px;'> Your answer '$u' is correct. </span>";
                }

                else {
                    echo "<span style='color: red; font-size: 20px;'> OOPS! Your answer '$u' is wrong. The correct answer is '$c' </span>";
                }
            }
        ?>
    </div>

</body>
</html>
