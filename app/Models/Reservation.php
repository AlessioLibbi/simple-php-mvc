<?php 
namespace App\Models;

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

 
    // CRUD OPERATIONS
    public function create(array $data)
    {

    }

    public function read(int $id)
    {
        
   

    }


    public function update(int $id, array $data)
    {

    }

    public function delete(int $id)
    {

    }

}
