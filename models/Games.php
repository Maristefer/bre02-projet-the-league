<?php

class Games {

    private ? int $id = null;
    private string $name;
    private dateTime $date;
    private int $team1;
    private int $team2;
    private int $winner;

    public function __construct(string $name, DateTime $date = new DateTime(), int $team1, int $team2, int $winner){

    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDate(): DateTime
    {
        return $this->date;
    }

    public function setDate(DateTime $date): void
    {
        $this->date = $date;
    }

    public function getTeam1(): int
    {
        return $this->team1;
    }

    public function setTeam1(int $team1): void
    {
        $this->team1 = $team1;
    }

    public function getTeam2(): int
    {
        return $this->team2;
    }

    public function setTeam2(int $team2): void
    {
        $this->team2 = $team2;
    }

    public function getWinner(): int
    {
        return $this->winner;
    }

    public function setWinner(int $winner): void
    {
        $this->winner = $winner;
    }
}