
<?php
session_start();

$questions = [
    1 => ["question" => "Stolica Włoch to", "answer" => "Rzym"],
    2 => ["question" => "Ile wynosi 8 + 12?", "answer" => "20"],
    3 => ["question" => "Największa planeta w Układzie Słonecznym?", "answer" => "Jowisz"],
    4 => ["question" => "Który kontynent jest najmniejszy?", "answer" => "Australia"],
];

$totalQuestions = count($questions);

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['answer'], $_POST['q'])) {
    $qNumber = (int) $_POST['q'];
    $userAnswer = trim($_POST['answer']);

    if (!isset($_SESSION['score'])) {
        $_SESSION['score'] = 0;
    }

    if (strcasecmp($userAnswer, $questions[$qNumber]['answer']) == 0) {
        $_SESSION['score']++;
    }

    $nextQuestion = $qNumber + 1;

    if ($nextQuestion > $totalQuestions) {
        header("Location: quiz.php?result=1");
        exit();
    } else {
        header("Location: quiz.php?q=$nextQuestion");
        exit();
    }
}

if (isset($_GET['result'])) {
    echo "<h2>Quiz zakończony!</h2>";
    echo "<p>Poziom swagu: " . $_SESSION['score'] . " / $totalQuestions</p>";
    session_destroy(); 
    echo '<br><a href="quiz.php?q=1">Spróbuj ponownie</a>';
    exit();
}

$qNumber = isset($_GET['q']) ? (int)$_GET['q'] : 1;

if (!isset($questions[$qNumber])) {
    header("Location: quiz.php?q=1");
    exit();
}

$question = $questions[$qNumber]['question'];
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz - Pytanie <?= $qNumber ?></title>
    <style>
        div{
            background-color: pink;
            border: 1px solid black;
        }
        .hi {
  width:1PX;
  height:600px;
  background-color:white;
  padding:15px;
  font-size:1.2em;
  border:3px solid #000;
  transition-duration:6s;
}

.hi:hover {
  width:80%;
  background-color:orange;
}

    </style>
</head>
<body>
    <div>
        <h2>Pytanie <?= $qNumber ?>:</h2>
        <p><?= $question ?></p>
        <form method="post" action="quiz.php">
            <input type="hidden" name="q" value="<?= $qNumber ?>">
            <input type="text" name="answer" required>
            <p>Twoja odpowiedź to: <?= isset($_POST['answer']) ? htmlspecialchars($_POST['answer']) : '' ?></p>
            <p>Poprawna odpowiedź to: <?= $questions[$qNumber]['answer'] ?></p>
            <p>Liczba punktów to: <?= isset($_SESSION['score']) ? $_SESSION['score'] : 0 ?></p>
            <button type="submit">Dalej</button>
        </div>
        </form>
    </div>
</body>
</html>


