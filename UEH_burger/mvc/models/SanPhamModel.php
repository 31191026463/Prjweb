<?php

class SanPhamModel extends DB {
    //Get all products
    public function TatCaSanPham()
    {
        $query = "select url, name, images, price, description from product";
        $result = $this -> con -> query($query);

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        return $resultArray;
    }

    //Get all sp (moi den cu) + danh muc
    public function TatCaSanPhamDM()
    {
        $query = "select * from product order by date_created DESC";
        $result = $this -> con -> query($query);

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $cate = $this->GetDanhMucSP($item['url']);
            $item['categories'] = $cate;
            $resultArray[] = $item;
        }

        return $resultArray;
    }
    //Get product via url
    public function GetSanPham($url)
    {
        $query  = " select * from product where '$url'= product.url";
        $result = $this -> con -> query($query);
        

        $resultArray[]= mysqli_fetch_array($result, MYSQLI_ASSOC);
        #Get product categorys via url product

        $query1  = " SELECT ct.name, ct.url FROM category as ct INNER JOIN category_details as ct_dt ON ct.url=ct_dt.category_url INNER JOIN product as pd ON pd.url=ct_dt.product_url WHERE pd.url= '$url' ";

        $result1 = $this -> con -> query($query1);
        while ($item = mysqli_fetch_array($result1, MYSQLI_ASSOC))
        {
            $CateNameArray[] = $item;
        }
        array_push($resultArray, $CateNameArray);

        return $resultArray;
    }

    // Get dm 1 sp theo url
    public function GetDanhMucSP($url) {
        $query1  = " SELECT ct.name, ct.url FROM category as ct INNER JOIN category_details as ct_dt ON ct.url=ct_dt.category_url INNER JOIN product as pd ON pd.url=ct_dt.product_url WHERE pd.url= '$url' ";

        $result1 = $this -> con -> query($query1);
        while ($item = mysqli_fetch_array($result1, MYSQLI_ASSOC))
        {
            $CateNameArray[] = $item;
        }
        return $CateNameArray;
    }

    // used for both BoLoc and SanPhamNoiBat
    public function BanChayNhat()
    {
        $query = "select  url, name, images, price, description, view_count  from product";
        $result = $this -> con -> query($query);

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
            $resultArray[] = $item;
        }
        array_multisort( array_column($resultArray, "view_count"), SORT_DESC, $resultArray);
        return $resultArray;
    }
    // Get products with filter
    public function BoLoc($filter)
    {
        switch ($filter)
        {
            case 'ban-chay-nhat':
                $resultArray=$this -> BanChayNhat();
                break;
            case 'moi-nhat':
                $query = "select  *  from product";
                $result = $this -> con -> query($query);
                while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC))
                {
                    $resultArray[] = $item;
                }
                function sortFunction( $a, $b ) {
                    return strtotime($b["date_created"]) - strtotime($a["date_created"]);
                }
                usort($resultArray, "sortFunction");
                break;
        }
        return $resultArray;
    }
    public function GetCategory($all = true)
    {
        $query = "select " .($all?' * ':' name, url ') . "from category";
        $result = $this -> con -> query($query);
        
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
            $resultArray[] = $item;
        }
        return $resultArray;
    }
    public function GetAllTag()
    {
        $resultArray=[];
        $resultString='';
        $query = "select tag from product";
        $result = $this -> con -> query($query);
        $item = mysqli_fetch_array($result, MYSQLI_ASSOC);
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
                $resultString .= ',';
                $resultString .= array_values($item)[0];
        }
        $resultArray=array_filter(explode(",",$resultString));
        return array_unique($resultArray);
    }
}