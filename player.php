<?php
session_start();
class Blackjack {

    public $score;

    public function starting_game() {

        $card_one = rand(1, 11);
        $card_two = rand(1, 11);
        return [$card_one, $card_two];
    }

    public function set_hit($current_score) {
        $one_random_card = rand(1, 11);
        $this->score = $one_random_card + $current_score;
        //$_session['playerPoints'] +=  $one_random_card;
        return [$one_random_card ,$this->score ];
    }

    public function set_stand($total) {
        $stopHits = 0;
        $stopStand = 0;
        if($total > 21){
            $stopHits = 0;
            $stopStand = 0;
            echo "you are Looose";
        }
        if($total < 21){
            $stopHits = 1;
            $stopStand = 1;
            echo "you can play again";
        }
        if($total == 21){
            $stopHits = 0;
            $stopStand = 0;
            echo "you are Black jack ";
        }
        return[$stopHits , $stopStand];
    }
    function set_surrender($surrender) {

    }
}