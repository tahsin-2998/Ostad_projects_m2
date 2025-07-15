<?php

    //Storing the questions and correct answer
    $questions = [
        ["question" => "What is the PHP tag for the PHP opening?", "correct" => "<?php"],
        ["question" => "What is the PHP tag for the PHP closing?", "correct" => "?>"],
        ["question" => "What is the PHP tag to output text?", "correct" => "echo"],
        ["question" => "What is the file tag for normal text files?", "correct" => ".txt"],
    ];

    //Storing user's answers
    $answers = [];

    foreach ($questions as $index => $question)
    {
        echo ($index + 1) . ". " . $question["question"] . "\n";
        $answers[] = trim(readline("Your answer: "));

    }

    // Check user's answers
    function check_answer(array $questions, array $answers): int
    {
        $score = 0;
        foreach ($questions as $index => $question)
        {
            if($answers[$index] === $question["correct"])
            {
                $score++;
            }
        }
        return $score;
    }

    //Tell the user his score
    $user_score = check_answer($questions, $answers);
    echo "Your score is: " . $user_score . " out of " . count($questions) . "\n";

    //Give the user feedback
    if($user_score === count($questions))
    {
        echo "Excellent job!! \n";
    }elseif($user_score >= count($questions) / 2)
    {
        echo "Good effort, but you have to learn more.";
    }else
    {
        echo "You have failed the test. Try hard next time.";
    }

?>