<?php 
namespace App\Models;
use App\Database;
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
    public function create(array $data)
    {

    }

    public function read(int $id)
    {
        $db = new Database;
        $sql = "SELECT * FROM `prenotations` WHERE id = $id";
        $data = $db->select($sql);
        
        $this->setName($data[0]['client_name']);
        $this->setPrenotation($data[0]['prenotation_date']);
        $this->setHour($data[0]['hour']);
        $this->setNPeople($data[0]['n_people']);
        
        
   

    }


    public function update(int $id, array $data)
    {

    }

    public function delete(int $id)
    {

    }

}
