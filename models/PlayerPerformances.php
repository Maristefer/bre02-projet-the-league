<?php

class PlayerPerformances{

    private ? int $id = null;
    private int $player;
    private int $game;
    private int $point;
    private int $assists;
    
    public function __construct(int $player, int $game, int $point, int $assists){

    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getPlayer(): int
    {
        return $this->player;
    }

    public function setPlayer(int $player): void
    {
        $this->player = $player;
    }

    public function getGame(): int
    {
        return $this->game;
    }

    public function setGame(int $game): void
    {
        $this->game = $game;
    }

    public function getPoint(): int
    {
        return $this->point;
    }

    public function setPoint(int $point): void
    {
        $this->point = $point;
    }

    public function getAssists(): int
    {
        return $this->assists;
    }

    public function setAssists(int $assists): void
    {
        $this->assists = $assists;
    }
}