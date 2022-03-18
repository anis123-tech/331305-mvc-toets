<?php
require "../app/models/countries.php";

class Fruits extends Controller {
    private array $last_countries = [];

    public function __construct()   
    {
        $this->db = new Database;
        $this->get_countries();
    }

    private function get_countries()
    {
        $this->db->query('SELECT * FROM countries');
        $this->db->execute();
        foreach($this->db->resultSet() as $countries) {
            $fruit = (array) $fruit;
            array_push($this->last_countries, new countries($countries['id'], $countries['name'], $countries['capitalCity'], $countries['continent'], $countries['population']));
        }
    }

    public function index() {
        $data = [
            "title" => "countries",
            "countries" => $this->last_
        ];
        
        $this->view('countries', $data);
    }

}