<?php

class TeamManager extends AbstractManager{

    public function __construct()
    {
        parent::__construct();
    }
    public function findAll(): array {
        $query = $this->db->prepare('SELECT * FROM teams');
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $teams = [];

        $mm = new MediaManager();
        
        foreach($result as $item){
            $logo = $mm->findOne($item["logo"]);
            $team = new Team($item['name'], $item['description'], $logo);
            $team->setId($item["id"]);
            $teams[] = $team;
        }
        return $teams;

        // echo"<pre>";
        // var_dump("$logo");
        // echo"</pre>";
    }
}