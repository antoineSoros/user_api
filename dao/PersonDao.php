<?php
/**
 * Created by PhpStorm.
 * User: antoine
 * Date: 23/01/19
 * Time: 00:13
 */

namespace dao;
include '../setup.php';
use model\PersonModel;
use \PDO;

class PersonDao
{

    private $pdo;

    function __construct()
    {
        $conf = parse_ini_file(CONFIG_FILE_PATH);

        $dsn = $conf["dsn"];
        $user = $conf["user"];
        $password = $conf["password"];


        $this->pdo = new PDO($dsn,$user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }

    function getPersons(){
        $users=[];
        $sql= "Select * from user ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

            $user = new PersonModel($row['first'],$row['last'],$row['gender'],$row['avatar'],$row['username'],$row['password'],$row['id']);
            array_push($users,$user);
        }
        return $users;
    }


    function addPerson(Personne $p)
    {

        $sql = 'INSERT INTO user(last,first,gender,avatar,username,password) values (:last, :first,:gender,:avatar,:username,:password)';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':last_name', $p->getLast());
        $stmt->bindValue(':first_name', $p->getFirst());
        $stmt->bindValue(':gender', $p->getGender());
        $stmt->bindValue(':avatar',$p->getAvatar());
        $stmt->bindValue(':username',$p->getUsername());
        $stmt->bindValue(':password',$p->getPassword());
        $result = $stmt->execute();
        return $result;
    }



}