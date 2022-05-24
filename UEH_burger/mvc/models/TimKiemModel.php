<?php

class TimKiemModel extends DB {
    //Finding product via tag
    public function Search($tag)
    {
        $resultArray =[];
        $query = "SELECT url, name, images, price, description FROM product where tag like '%$tag%'" ;
        
        $result = $this -> con -> query($query);
        
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        return $resultArray;
    }
}