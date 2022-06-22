<?php
class pagestudent_home extends Controllers
{
    public function homeMain()
    {
        $this->view("masterStudentLayout", [
            "pagestudent" => "pageStudent/home",
        ]);
    }
    public function register_course()
    {
        $Modelstudent = $this->model("userModel");
        $this->view("masterStudentLayout", [
            "pagestudent" => "pageStudent/student_register",
        ]);
    }
}