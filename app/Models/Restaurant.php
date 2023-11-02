<?php 
namespace App\Models;
use App\Database;
use Exception;

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
    private function setId(int $id) {
        $this->id = $id;
    }



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
    public function save(array $data = null) {
        
        try {
            $origin = array(
                'id'=>$this->id,
                'name'=>$this->name,
                'address'=> $this->address,
                'phone' => $this->phone,
                'opening_time'=> $this->opening_time,
            );
            if(isset($data['id'])) {
                unset($data['id']);
            }
            $params = array_merge($origin , $data??[]);
            $db = new Database;
            if($params['id']) {
               $sqlUpdate = "UPDATE `restaurant` SET name = '" . $params['name'] . "' , address = '" . $params['address'] . "' , phone = '" . $params['phone'] . "' , opening_time = '" . $params['opening_time'] . "' WHERE id = " . $params['id'] . ";";
               
                
                $db->insert($sqlUpdate);
                return null;
                
            } else {
                $sqlCreate = "INSERT INTO `restaurant` ( name, address, phone, opening_time) VALUES ('" .  $params['name'] . "' , '" . $params['address'] . "' , '" . $params['phone'] . "' , '" . $params['opening_time']."') ;";
                
                return $db->create($sqlCreate);
                
                
            }
        }catch(Exception $e) {
            echo 'Non puoi ne salvare ne modificare';
        }
    
    }

    public function read(int $id)
    {
        $db = new Database;
        $sql = "SELECT * FROM `restaurant` WHERE id = $id";
        $data = $db->select($sql);
        $this->setId($data[0]['id']);
        $this->setName($data[0]['name']);
        $this->setAddress($data[0]['address']);
        $this->setPhone($data[0]['phone']);
        $this->setTime($data[0]['opening_time']);
       
        
    }


   

    public function delete(int $id)
    {
        $sqlDelete = "DELETE * FROM `restaurant` WHERE id = $id";
    }

}


