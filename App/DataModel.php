<?php

namespace App;

use PDO;

class DataModel
{
    /**
     * @var PDO $db
     */
    private PDO $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DBNAME . ';port=' . MYSQL_PORT . ';charset=' . MYSQL_CHARSET, MYSQL_USERNAME, MYSQL_PASSWORD);
    }

    /**
     * @param string $uniqueId
     * @param string $input
     * @return void
     */
    public function saveData(string $uniqueId, string $input)
    {
        $stmt = $this->db->prepare('INSERT INTO data (unique_id, data) VALUES (?, ?)');
        $stmt->execute([$uniqueId, $input]);
    }

    /**
     * @param string $uniqueId
     * @return mixed
     */
    public function getData(string $uniqueId)
    {
        $stmt = $this->db->prepare('SELECT data FROM data WHERE unique_id = ?');
        $stmt->execute([$uniqueId]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
