<?php 

class Controller {
    // class ini berfungsi untuk menampung semua controller yang ada
    public function view($view, $data = []) {
        require_once '../app/views/'. $view . '.php';
    }
    public function model($model) {
        require_once '../app/model/'. $model . '.php';
        return new $model;
}
}
