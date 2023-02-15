<?php
interface Iregister {
    public function getRegisterCourse(string $c_id):array;
    public function registerCourse(array $data_register):bool;

}

Class Register implements Iregister{
    private $ConDB;
    public function __construct(){
        $con = new ConDB();
        $con->connect();
        $this->ConDB = $con->conn;
    }
    public function getRegisterCourse(string $rs_id):array{
        $sql = "SELECT * FROM sci_cs where cs_year = ".$rs_id;
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }else {
            return false;
        }
        // return [];
    }
    public function registerCourse(array $data_register):bool{
        $sql = "INSERT INTO `iregister` (`rs_id`, `rs_email`, `rs_name_title`, `rs_fullname`, `rs_phone`, `rs_user_id_number`, `rs_highest_qualification`, `rs_image_url`)";
        $sql .= " VALUES (null, :email, :title_name, :name, :phone, :id_number, :hq, :image_url );";
        echo 'DEBUG ', $sql;
        $query = $this->ConDB->prepare($sql);
        if( $query->execute($data_register)){
            return true;
        }else {
            return false;
        }
        // return true;
    }
}
?>