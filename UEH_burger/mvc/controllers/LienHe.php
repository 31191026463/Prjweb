<?php

class LienHe extends Controller{

    function Default(){
        $model= $this->model('SanPhamModel');
        $categories = $model->GetCategory();
        $this->view('about-us', [
            'view' => 3,
            'categories' => $categories,
        ]);
    }
    
}

?>
