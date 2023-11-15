<?php
//ket noi sql
    function pdo_get_connection(){
        $severname="localhost";
        $username="root";
        $password="";
        try{
            $conn=new PDO("mysql:host=$severname;dbname=duanmau",$username,$password);
            // $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $conn;
        }catch(PDOException $e){
            echo "ket noi that bai" .$e->getMessage();
        }       
    }
//thuc thi cac lenh(insert,update,delete)
function pdo_execute($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        return $stmt;
    }catch(PDOException $e){
        throw $e;
    }finally{
        unset($conn);
    }
}
//thuc thi cau lenh truy van(select * FROM ten bang)=>về nhiều bản ghi
    function pdo_query($sql){
        $sql_args=array_slice(func_get_args(),1);
        try{
            $conn=pdo_get_connection();
            $stmt=$conn->prepare($sql);
            $stmt->execute($sql_args);
            $rows=$stmt->fetchAll();
            return $rows;
        }catch(PDOException $e){
            throw $e;
        }
    }
//thuc thi cau lenh truy van(select * FROM ten bang where id/ma/..)=>tra ve 1 ban ghi
function pdo_query_one($sql){
    $sql_args=array_slice(func_get_args(),1);
    try{
        $conn=pdo_get_connection();
        $stmt=$conn->prepare($sql);
        $stmt->execute($sql_args);
        $rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }catch(PDOException $e){
        throw $e;
    }
}
?>