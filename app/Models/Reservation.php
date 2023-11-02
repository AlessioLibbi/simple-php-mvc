<?php 
namespace App\Models;
use App\Database;
use Exception;

class Reservation
{
    protected $id;
    protected $client_name;
    protected $prenotation_date;
    protected $hour;
    protected $n_people;

    // GET METHOD
    public function getId() {
    return $this->id;
    }

    public function getName() {
        return $this->client_name;
    }

    public function getPrenotation() {
        return $this->prenotation_date;
    }

    public function getHour() {
        return $this->hour;
    }
    public function getNPeople() {
        return $this->n_people;
    }

    // SET METHOD
    public function setId(int $id) {
        $this->id = $id;
    }



    public function setName(string $client_name) {
        $this->client_name = $client_name;

    }

    public function setPrenotation(string $prenotation_date) {
        $this->prenotation_date = $prenotation_date;
    }

    public function setHour(string $hour) {
        $this->hour = $hour;
    }

    public function setNPeople(string $n_people) {
        $this->n_people = $n_people;
    }

 
    // CRUD OPERATIONS
    public function save(array $data = null) {
        try {
            $origin = array(
                'id'=>$this->id,
                'client_name'=>$this->client_name,
                'prenotation_date'=> $this->prenotation_date,
                'hour' => $this->hour,
                'n_people'=> $this->n_people, 
            );
            var_dump($origin);
            if(isset($data['id'])) {
                unset($data['id']);
            }
            $params = array_merge($origin, $data);
            var_dump($params);
            $db = new Database;
            if($params['id']) {
                $sqlUpdate = "UPDATE `prenotations` SET name = '" . $params['client_name'] . "' , prenotation_date = '" . $params['prenotation_date'] . "' , hour = '" . $params['hour'] . "' , n_people = '" . $params['n_people'] . "' WHERE id = " . $params['id'] . ";";
                $db->insert($sqlUpdate);
            } else {
                $sqlCreate = "INSERT INTO `prenotations` ( client_name, prenotation_date, hour, n_people) VALUES ('" .  $params['client_name'] . "' , '" . $params['prenotation_date'] . "' , '" . $params['hour'] . "' , '" . $params['n_people']."') ;";
                $db->insert($sqlCreate);
            }
        }catch (Exception $e){
            echo 'Non puoi ne salvare ne modificare';
        }
    }

    public function read(int $id)
    {
        $db = new Database;
        $sql = "SELECT * FROM `prenotations` WHERE id = $id";
        $data = $db->select($sql);
        $this->setId($data[0]['id']);
        $this->setName($data[0]['client_name']);
        $this->setPrenotation($data[0]['prenotation_date']);
        $this->setHour($data[0]['hour']);
        $this->setNPeople($data[0]['n_people']);
        
        
   

    }


 

    public function delete(int $id)
    {

    }

}
