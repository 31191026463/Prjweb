<?php

class TrangChu extends Controller{

    function Default(){
        $model= $this->model('SanPhamModel');

        $sanphamnoibat = $model->BanChayNhat();
        
        // category lay max 6 cái
        // san pham noi bat min 4 max 8
        $sanphamnoibat = array_slice($sanphamnoibat, 0, 8);
        $categories = $model->GetCategory();
        
        //get random 6 categories for homepage banner
        $max = count($categories);
        $rand = array_rand($categories, min(6, $max));
        foreach ($rand as $index) $categories6[] = $categories[$index];
        
        $this->view('home', [
            'view' => 0,
            "SPnoibat" => $sanphamnoibat,
            'categories' => $categories,
            'categoriesBanner' => $categories6
        ]);

    }
    
}

?>

