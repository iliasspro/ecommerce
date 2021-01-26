<?php

namespace App\Interfaces;

interface ProductRepositoryInterface
{
    public function addProduct($request);

    public function updateProduct($request,$id);

    public function deleteProduct($id);

    public function searchProduct($keyword);

    public function getAllProducts();

    public function getProductById($id);


    public function addProductPhotos($request,$id);

    public function addProductCategories($request,$id);

    public function addProductColors($request,$id);

    public function addProductSizes($request,$id);


    public function updateProductPhotos($request,$id_product,$id_photo = null);

    public function updateProductCategories($request,$id_product,$id_categorie = null);

    public function updateProductColors($request,$id_product,$id_color = null);

    public function updateProductSizes($request,$id_product,$id_size = null);


    public function deleteProductPhotos($id_product,$id_photo);

    public function deleteProductCategories($id_product,$id_categorie);

    public function deleteProductColors($id_product,$id_color);

    public function deleteProductSizes($id_product,$id_size);


}