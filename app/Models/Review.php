<?php 
namespace App\Models;

use App\Database;

class Review
{
    protected $id;
    protected $client_name;
    protected $vote;
    protected $comment;

    // GET METHOD
    public function getId() {
    return $this->id;
    }

    public function getName() {
        return $this->client_name;
    }

    public function getVote() {
        return $this->vote;
    }

    public function getComment() {
        return $this->comment;
    }

    // SET METHOD
    public function setName(string $client_name) {
        $this->client_name = $client_name;

    }

    public function setAddress(string $vote) {
        $this->vote = $vote;
    }

    public function setPhone(string $comment) {
        $this->comment = $comment;
    }

 
    // CRUD OPERATIONS
    public function create(array $data)
    {

    }

    public function read(int $id)
    {
        $db = new Database;
        $sql = "SELECT * FROM `votes` WHERE id = $id";
        $data = $db->select($sql);
        
        $this->setName($data['client_name']);
        $this->setAddress($data['address']);
        $this->setPhone($data['phone']);
        die;
        

    }


    public function update(int $id, array $data)
    {

    }

    public function delete(int $id)
    {

    }

}
