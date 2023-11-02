<?php 
namespace App\Models;

use App\Database;
use Exception;

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
    public function setId(int $id) {
        $this->id = $id;
    }



    public function setName(string $client_name) {
        $this->client_name = $client_name;

    }

    public function setVote(string $vote) {
        $this->vote = $vote;
    }

    public function setComment(string $comment) {
        $this->comment = $comment;
    }

 
    // CRUD OPERATIONS
    public function save(array $data = null) {
        try {
            $origin = array(
                'id'=>$this->id,
                'client_name'=>$this->client_name,
                'vote'=> $this->vote,
                'comment' => $this->comment,
                
            );
          
            if(isset($data['id'])) {
                unset($data['id']);
            }
            $params = array_merge($origin, $data??[]);
           
            $db = new Database;
            if($params['id']) {
                $sqlUpdate = "UPDATE `votes` SET name = '" . $params['client_name'] . "' , vote = '" . $params['vote'] . "' , comment = '" . $params['comment']  . "' WHERE id = " . $params['id'] . ";";
                $db->insert($sqlUpdate);
            } else {
                $sqlCreate = "INSERT INTO `votes` ( client_name, vote, comment ) VALUES ('" .  $params['client_name'] . "' , '" . $params['vote'] . "' , '" . $params['comment'] ."') ;";
                $db->insert($sqlCreate);
            }
        } catch (Exception $e) {
            echo 'Non puoi ne salvare ne modificare';
        }
    }

    public function read(int $id)
    {
        $db = new Database;
        $sql = "SELECT * FROM `votes` WHERE id = $id";
        $data = $db->select($sql);
        $this->setName($data[0]['client_name']);
        $this->setVote($data[0]['vote']);
        $this->setComment($data[0]['comment']);
        
        

    }


    

    public function delete(int $id)
    {
        $sqlDelete = "DELETE * FROM `votes` WHERE id = $id";
    }

}
