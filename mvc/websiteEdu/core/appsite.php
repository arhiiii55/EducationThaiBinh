   <?php
    class appsite
    {
        protected  $controllersite;
        protected  $action;
        protected  $params = [];

        function  __construct()
        {
            $arr = $this->Urlprocess();
            // print_r($arr);
            // xủ lý controller
            if (file_exists("./mvc/websiteEdu/controllers/" . $arr[0] . ".php")) {
                $this->controllersite = $arr[0];
                // arr0 là controler
                unset($arr[0]);
            }
            include_once "./mvc/websiteEdu/controllers/" . $this->controllersite . ".php";
            // if (file_exists("./mvc/websiteEdu/controllers/" . $arr[0] . ".php")) {
            //     $this->controller = $arr[0];
            //     // arr0 là controler
            //     unset($arr[0]);
            // }
            // include_once "./mvc/websiteEdu/controllers/" . $this->controller . ".php";
            $this->controllersite = new $this->controllersite;
            //xuly action
            if (isset($arr[1])) {
                //arr1 là method trong controller
                if (method_exists($this->controllersite, $arr[1])) {
                    $this->action = $arr[1];
                }
                unset($arr[1]);
            }
            // echo $this->action;
            // xuly params
            $this->params = $arr ? array_values($arr) : [];
            call_user_func_array([$this->controllersite, $this->action], $this->params);
        }
        // cắt chuỗi
        function  Urlprocess()
        {
            if (isset($_GET["url"])) {
                return explode("/", filter_var(trim($_GET["url"], "/")));
            }
        }
    }