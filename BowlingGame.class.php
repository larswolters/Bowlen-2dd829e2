<?php

class BowlingGame
{
    private $scoreBoard;
    private $players;

    public function __construct()
    {
        $this->scoreBoard = new ScoreBoard();
        print_r('Welkom to the bowling game! Please enter your players:');
        $input = readline();
        $this->players = preg_split("/\,/", $input);
        $this->start();
    }

    /**
     * Starts the bowling game.
     */
    public function start()
    {
        foreach ($this->players as $player) {
            $this->scoreBoard->addPlayer($player);
        }

        for ($i = 0; $i < 11; $i++) {

        }

    }
}