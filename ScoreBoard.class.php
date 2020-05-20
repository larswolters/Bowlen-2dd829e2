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
        // TODO
    }

    public function registerPinsDown($pins)
    {
        // TODO
    }

    public function printStatus()
    {
        // TODO
    }

    public function getWinner()
    {
        // TODO
    }
}
