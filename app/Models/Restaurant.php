<?php 
namespace App\Models;

class Restaurant
{
    protected $id;
    protected $name;
    protected $address;
    protected $phone;
    protected $opening_time;

    // GET METHOD
    public function getId() {
    return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getPhone() {
        return $this->phone;
    }
    public function getTime() {
        return $this->opening_time;
    }
    // SET METHOD
    public function setName(string $name) {
        $this->name = $name;

    }

    public function setAddress(string $address) {
        $this->address = $address;
    }

    public function setPhone(string $phone) {
        $this->phone = $phone;
    }

    public function setTime(string $opening_time) {
        $this->opening_time = $opening_time;
    }

    // CRUD OPERATIONS
    public function create(array $data)
    {

    }

    public function read(int $id)
    {
        $this->name = 'Ristorante da Mario';
        $this->address = 'Via Roma, 123';
        $this->phone = '+39 123 456789';
        $this->opening_time = 
            '{"lunedì" : "09:00 - 22:00",
            "martedì" : "09:00 - 22:00",
            "mercoledì" : "09:00 - 22:00",
            "giovedì" : "09:00 - 22:00",
            "venerdì" : "09:00 - 23:00",
            "sabato" : "10:00 - 23:00",
            "domenica" : "10:00 - 21:00"
            }';
            return $this;
    }


    public function update(int $id, array $data)
    {

    }

    public function delete(int $id)
    {

    }

}


