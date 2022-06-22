<?php
class Controllersite
{
    // public function model($model)
    // {
    //     require "./mvc/admin/models/" . $model . ".php";
    //     return new $model;
    // }
    // public function view($view, $data = [])
    // {
    //     require "./mvc/admin/views/" . $view . ".php";
    // }
    public function modelWebsite($modelWebsite)
    {
        require "./mvc/websiteEdu/models/" . $modelWebsite . ".php";
        return new $modelWebsite;
    }
    public function viewWebsite($viewWebsite, $data = [])
    {
        require "./mvc/websiteEdu/views/" . $viewWebsite . ".php";
    }
}