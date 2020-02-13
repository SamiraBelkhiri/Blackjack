<?php



session_start();


class Blackjack
{

    private $score;

    public function __construct($score)
    {
        $this->score = $score;
    }

    public function getScore()
    {
        return $this->score;
    }


    public function hit()
    {
        $random = rand(1, 11);
        $this->score += $random;
        echo $this->score;

        if ($this->score > 21) {
            echo "LOSER!!!";
            session_destroy();

        }


    }

    public function stand(Blackjack $dealer): string
    {
        while ($dealer->getScore() < 16) {
            $dealer->hit();
        }
        if ($this->score > $dealer->getScore()) {
            echo 'THE HOUSE ALWAYS WINS';
        } else {
            echo "THE HOUSE ALWAYS WINS";
        }

        session_destroy();
    }


    public function surrender(): string
    {

        echo "YOU GIVE UP!";
        session_destroy();
    }
}
