<?php

class ScoreBoard
{
    private $players = [];

    /**
     * Adds a player to the players array.
     *
     * @param $player
     */
    public function addPlayer($player)
    {
        array_push($this->players, $player);
    }

    public function getCurrentPlayer()
    {
        //
    }

    public function registerPinsDown($pins)
    {
        //
    }

    public function printStatus()
    {
        //
    }

    public function getWinner()
    {
        //
    }
}
