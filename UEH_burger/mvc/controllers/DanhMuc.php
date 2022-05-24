<?php

class DanhMuc extends Controller{
    const PER_PAGE = 12;

    function GetSPDanhMuc($tenDanhMucUrl, $page = 1) {
        $model= $this->model('SanPhamModel');
        $dmmodel = $this->model('DanhMucModel');

        $allSP=$dmmodel->GetSPDanhMuc($tenDanhMucUrl);

        $tenDanhMuc =  $dmmodel->GetTenDanhMuc($tenDanhMucUrl)['name'];
        if (count($allSP) == 0) {
            header("Location: ".BASE_URL.'Error');
        }
        
        $sliced_data = array_slice($allSP, ($page-1)*self::PER_PAGE, self::PER_PAGE);

        $number_of_pages = ceil(count($allSP)/self::PER_PAGE);
        
        if ($page<=0 || $page>$number_of_pages) {
            header("Location: ".BASE_URL."Error");
        }
        $categories = $model->GetCategory();

        $tagss = $model->GetAllTag();
        $rand = array_rand($tagss, min(11, count($tagss)));
        foreach ($rand as $index) {
            $tags[] = $tagss[$index];
        }

        $this->view('product-grid', [
            'view' => 2,
            'pageTitle' => 'Danh mục: '.ucfirst($tenDanhMuc),
            'danhmuc' => ucfirst($tenDanhMuc),
            'numOfSP' => count($allSP),
            'allSP' => $sliced_data,
            'currentPage' => $page,
            'numOfPage' => $number_of_pages,
            'perPage' => self::PER_PAGE,
            'url' => BASE_URL.'danh-muc/'.$tenDanhMucUrl.'/',
            'categories' => $categories,
            'tags' => $tags,
            'path' => [
                0 => [
                    'name'=>'Sản phẩm',
                    'url' => BASE_URL.'san-pham'
                ],
                1 => [
                    'name'=> 'Danh mục món ăn',
                    'url' => '#',
                ],
                2 => [
                    'name' => ucfirst($tenDanhMuc),
                    'url' => BASE_URL.'danh-muc/'.$tenDanhMucUrl
                ]
            ]
        ]);
    }
    
}

?>
