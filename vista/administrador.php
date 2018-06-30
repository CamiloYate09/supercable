<?php

class Users{
//$con = pg_connect("host=ec2-54-227-237-27.compute-1.amazonaws.com port=5432  dbname=ddob655ldc9d3u  user=lhpkliyrbkfwac  password=c4261efd43b96cb28c5cd52efe6d04298f0cd9b7ab88fe269313cfd798027670");

    protected $db;
    protected $faker;


    public function __construct()
    {
        $this->db = new PDO("host=ec2-54-227-237-27.compute-1.amazonaws.com port=5432  dbname=ddob655ldc9d3u  user=lhpkliyrbkfwac  password=c4261efd43b96cb28c5cd52efe6d04298f0cd9b7ab88fe269313cfd798027670");
        $this->faker = Faker\Factory::create();
    }

    public function generaUser(){
        $ps = $this->db->prepare("INSERT INTO ventas(contrato,nombre,apellido,tipocedula,
cc,email,hobby1,hobby2,hobby3) VALUES (:contrato,:nombre,:apellido,:tipocedula,:cc,:email,:hobby1,:hobby2:,hobby3)");


        $ps->execute([
            ':contrato' => $this->faker->ean13,
            ':nombre' => $this->faker->name,
            ':apellido' => $this->faker->city,
            ':tipocedula' => $this->faker->licenceCode,
            ':cc' => $this->faker->dni,
            ':email' => $this->faker->email,
            ':hobby1' => $this->faker->township,
            ':hobby2' => $this->faker->township,
            ':hobby3' => $this->faker->township,
        ]);


    }
}


?>