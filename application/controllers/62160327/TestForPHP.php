<?php
class TestForPHP 
{
    public function exam01()
    {
        $array = [1, 2, 3, 4, 5];
        // exam01
        // หาเลขคู่ใน array
        for($i=0;$i<count($array);$i++){
            if($array[$i]%2==0){
                echo $array[$i];
                echo "<br/>";
                 
            }
        }
        // 
    }
    public function exam02(){
        // หาเลขคี่ใน array
        $array = [1, 2, 3, 4, 5];
        // exam02
        // หาเลขคี่ใน array
        for($i=0;$i<count($array);$i++){
            if($array[$i]%2!==0){
                echo $array[$i];
                echo "<br/>";
                 
            }
        }
        // 
    }
}
