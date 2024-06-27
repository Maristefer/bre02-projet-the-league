<?php

class Games {

    private ? int $id = null;
    private string $name;
    private dateTime $date;
    private string $team1;
    private string $team2;
    private string $winner;

    public function __construct(string $name, DateTime $date = new DateTime(), string $team1, string $team2, string $winner){

    }

      public function getId(): ?int
      {
          return $this->id;
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

      public function getTeam1(): string
      {
          return $this->team1;
      }
  
      public function setTeam1(string $team1): void
      {
          $this->team1 = $team1;
      }

      public function getTeam2(): string
      {
          return $this->team2;
      }
  
      public function setTeam2(string $team2): void
      {
          $this->team2 = $team2;
      }

      public function getWinner(): string
      {
          return $this->winner;
      }
  
      public function setWinner(string $winner): void
      {
          $this->winner = $winner;
      }
}