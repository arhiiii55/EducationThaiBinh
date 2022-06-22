<?php class test extends Controllers

{
    public function testShow()
    {
        printf("hello");
        $listdataeducourse = $this->model("courseModel");
        $this->view("page/testPHP", [
            // "pages" => "page/testPHP",
            "eduCourse" => $listdataeducourse->ShoweduCourse(),
        ]);
        # code...
    }
}