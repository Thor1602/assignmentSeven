<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Programming Assignment 7</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<header class="jumbotron">
    <h2 class="text-center" style="color: rebeccapurple">Programming Assignment 7</h2>

</header>
<main class="jumbotron">
    <div class="container text-center">
        <form method="POST">
            <button class="btn btn-primary">UPDATE</button>

        </form>
        <p>Realtime: <?php
            $date = new DateTime('now', new DateTimeZone('Australia/Melbourne'));
            $date->setTimezone(new DateTimeZone('GMT'));
            echo $date->format('Y-m-d H:i:s');
            echo "  (Australia/Melbourne)";
            ?></p>
        <p>Realtime: <?php
            $date = new DateTime('now', new DateTimeZone('Europe/London'));
            $date->setTimezone(new DateTimeZone('GMT'));
            echo $date->format('Y-m-d H:i:s');
            echo "  (Europe/London)";
            ?></p>
        <p>Realtime: <?php
            $date = new DateTime('now', new DateTimeZone('Asia/Hong_Kong'));
            $date->setTimezone(new DateTimeZone('GMT'));
            echo $date->format('Y-m-d H:i:s');
            echo "  (Asia/Hong_Kong	)";
            ?></p>
        <p>Realtime: <?php
            $date = new DateTime('now', new DateTimeZone('Africa/Cairo'));
            $date->setTimezone(new DateTimeZone('GMT'));
            echo $date->format('Y-m-d H:i:s');
            echo "  (Africa/Cairo)";
            ?></p>
        <p>Realtime: <?php
            $date = new DateTime('now', new DateTimeZone('America/Denver'));
            $date->setTimezone(new DateTimeZone('GMT'));
            echo $date->format('Y-m-d H:i:s');
            echo "  (America/Denver)";
            ?></p>
        <form method="POST">
            <button class="btn btn-danger" type="submit" name="August" value="August"">Time travel to August</button>
            <button class="btn btn-danger" type="submit" name="November" value="November"">Time travel to November</button>
            <button class="btn btn-danger" type="submit" name="Realtime" value="Realtime"">Now</button>

        </form>

        <?php
        //excercise 1

        if (isset($_POST['August'])) {
            $currMonth = "August";
        }
        else if (isset($_POST['November'])) {
            $currMonth = "November";
        }

        else{
            $currMonth = date('F', time());
        }
        ?>
        <?php

        echo "\n";
        if ($currMonth == 'August') {
            echo "<p>It's August. </p>\n";
        } else {
            echo "<p>It's not August. It's $currMonth </p>\n";
        }
        echo "\n\n";
        $countdown = 10;
        $countup = 0;
        $counter = 1;
        //excercise 2
        echo "<h3>1. Countup</h3>\n";
        do {
            echo "$countup<br>\n";
            $countup++;
        } while ($countup < 11);
        echo "\n\n";
        echo "<h3>2. Countdown</h3>\n";

        while ($countdown >= 0) {
            echo "$countdown<br>\n";
            $countdown--;
        }
        //excercise 3

        echo "\n\n";
        echo "<h3>3. Power of 2</h3>\n";
        for ($i = 1; $i < 13; $i++) {
            $result = $i ** 2;
            echo "<p>$i<sup>2</sup> = $result </p>\n";

        }
        echo "\n\n";
        //excercise 4

        echo "<h3>4. Multiplication table</h3>\n";
        echo "<table class='table table-striped'>\n";
        for ($row = 1; $row < 8; $row++) {
            echo "   <tr>\n";
            for ($col = 1; $col < 8; $col++) {
                $result = $col * $row;
                echo "      <td>$result</td>\n";
            }
            echo "   </tr>\n";
        }
        echo "</table>";
        echo "\n\n";
        echo "<h3>5. My own project with a for each loop.</h3>\n";
        ?>

        <form method="POST">
            <textarea class="form-control" placeholder="Add Text..." name="comments">Change the text to something you like or just press the Text To Words button and see what happens. An internet connection is required to see the bootstrap features.</textarea>
            <button class="btn btn-warning" type="submit" name="TextToWords">Text To Words</button>
        </form>


        <div class="modal fade" id="textToWordsModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Word list</h4>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>

                    <div class="modal-body">
                        <?php
                        // my own project based on the for(each) loop

                        if (isset($_POST['comments'])) {
                            $comments= $_POST['comments'];
                            $comments = explode(" ", $comments);
                            $counter = 0;
                            foreach ($comments as $comment){
                                $comment = preg_replace('/[^A-Za-z0-9\-]/', '', $comment);
                                echo "<p>$comment</p>";
                                $counter+=1;
                            }
                            echo "<h4>The text has $counter words.</h4>";
                            ?>

                        <?php }
                        ?>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>

</main>

<footer class="jumbotron">
    <h5 class="text-center" style="color: rebeccapurple">Author is anonymous for evaluation purposes.</h5>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<?php

if (isset($_POST['comments'])) {
    $comments= $_POST['comments'];
    ?>
    <script>
        $(document).ready(function(){
            $("#textToWordsModal").modal();
        });
    </script>
<?php }
?>
</body>
</html>