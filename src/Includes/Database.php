<?php

namespace Sundarban\Project\Includes;

class Database
{

    public $connection;

    public function __construct()
    {
        // Connect to the database
        $this->connection = new \mysqli("localhost", "shrestha", "admin123", "user_management");

        // Check connection
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }

    }

    public function getSelect($sql)
    {
        $data = [];

        if (!$this->connection->query($sql)) {
            echo $this->connection->error;
            exit;
        }

        $result = $this->connection->query($sql);
        $row = $result->num_rows;

        if ($row > 0) {
            if ($row == 1) {
                return $result->fetch_assoc();
            } else {
                while ($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
                return $data;
            }
        }
    }




    public function deleteRow($sql)
    {
        $this->connection->query($sql);
    }

    public function updateRow($sql)
    {
        $this->connection->query($sql);
    }

    public function insertRow($sql)
    {
      $this->connection->query($sql);
    }

    // getting role only:
    public function getRoleById($id)
    {
        $sql = "SELECT role FROM users WHERE id = $id";
        $result = $this->connection->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row["role"];
        } else {
            return null;
        }
    }

}
