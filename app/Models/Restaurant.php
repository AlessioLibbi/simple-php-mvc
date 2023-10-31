<?php 
namespace App\Models;
use App\Database;
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
        $db = new Database;
        $sql = "SELECT * FROM `restaurant` WHERE id = $id";
        $data = $db->select($sql);
        
        $this->setName($data[0]['name']);
        $this->setAddress($data[0]['address']);
        $this->setPhone($data[0]['phone']);
        $this->setTime($data[0]['opening_time']);
       
        
    }


    public function update(int $id, array $data)
    {

    }

    public function delete(int $id)
    {

    }

}


