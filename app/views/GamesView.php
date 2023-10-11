<?php

class GamesView {
    public function showGames($games, $devs) {
        require './templates/gamesList.phtml';
    }

    public function showGame($game) {
        require './templates/game.phtml';
    }

    public function showAddGame($devs, $message = null) {
        require './templates/addGame.phtml';
    }
}