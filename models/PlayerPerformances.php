<?php

class PlayerPerformances{

    private ? int $id = null;
    private string $player;
    private string $game;
    private string $point;
    
    public function __construct(string $player, string $game, string $point){

    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getPlayer(): string
    {
        return $this->player;
    }

    public function setPlayer(string $player): void
    {
        $this->player = $player;
    }

    public function getGame(): string
    {
        return $this->game;
    }

    public function setGame(string $game): void
    {
        $this->game = $game;
    }

    public function getPoint(): string
    {
        return $this->point;
    }

    public function setPoint(string $point): void
    {
        $this->point = $point;
    }
}