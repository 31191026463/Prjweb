<?php

class DanhMucModel extends DB {
    public function GetSPDanhMuc($tenDanhMucUrl)
    {
        $resultArray = [];
        $query = "SELECT pd.url, pd.name, pd.images, pd.price, pd.description FROM category as ct INNER JOIN category_details as ct_dt ON ct.url=ct_dt.category_url INNER JOIN product as pd ON pd.url=ct_dt.product_url WHERE ct.url= '$tenDanhMucUrl'";
        $result = $this -> con -> query($query);

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        return $resultArray;
    }

    public function GetTenDanhMuc($tenDanhMucUrl) {
        $query = "SELECT name FROM category WHERE url= '$tenDanhMucUrl'";
        $result = $this -> con -> query($query);
        return mysqli_fetch_array($result, MYSQLI_ASSOC);
    }
}