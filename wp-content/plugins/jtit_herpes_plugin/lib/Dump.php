<?php


final class Dump {
    static private $instance = null;

    private $objects = array();
    private $view = true;

    private function __construct() {}

    public function __destruct() {

        if ($this->view !== true) return;

        echo '<style>
                .dump p,
                .dump [type="checkbox"]{
                    display: none;
                }
                
                .dump [type="checkbox"]:checked ~ p{
                    display: block;
                }
                .dump-content{
                    opacity: 1;
                }
                .dump-panel{
                    position: fixed;
                    bottom: 0;
                    left: 0px;
                    height: 30px;
                    width: 100%;
                    background-color: black;
                    color: aliceblue;
                    opacity: 0.8;
                    z-index: 9999;
                    padding-top: 4px;
                    padding-left: 10px; 
                }
                
        </style>';
        echo '<div id="dump" style="display:none">';
        echo '<pre style="
            position: fixed;
            top: 20px; right: 20px; bottom: 40px; left: 20px;
            z-index: 9998;
            margin: 0;            
            background-color: darkgray;
            opacity: 0.9;
            padding: 20px;
            overflow-y: scroll;
            border-radius: 5px;
        ">';

        echo '<h3>Dump info:</h3>';
        foreach ($this->objects as $k => $v){

            echo '<div class="dump">';
            echo '<label for="dump-'.$k.'">';
            echo '<strong style="font-size: large">Variable: '.$k.'</strong>; path: '.$v['path'].'; Line: ' . $v['line'].';';
            echo '<label>';
            echo '<input type="checkbox" id="dump-'.$k.'">';
            echo '<p class="dump-content">';

            foreach ($v['value'] as $key => $val){
                echo '<br> <b>Item</b> - '.$key.':<br>';
//                print_r( $val);
                echo '<p style="border: solid 1px gray; border-radius: 5px; padding: 10px; background-color: lightgray">';
                var_dump( $val);
                echo '</p>';
            }

            echo '</p>';
            echo '</div>';
            echo '<hr>';
        }
        echo '</pre>';
        echo '</div>';
        echo '<div class="dump-panel" onclick="openbox(dump)" >Dump info: count - '.count($this->objects).'</div>';
        echo "
        <script type='text/javascript'>
        function openbox(id){
//            display = document.getElementById(id); 
            display = id.style.display; 
            console.log(id);
            console.log(display);
            if(display=='none'){
//               document.getElementById(id).style.display='block';
                    id.style.display='block';
            }else{
//               document.getElementById(id).style.display='none';
                    id.style.display='none';
            }
        }
        </script>";

    }

    /**
     * @param $obj
     * @param null $name : string
     */
    static public function out($obj, $name = null) {
        if (self::$instance == null) {
            self::$instance = new self();
        }

        $info = debug_backtrace();
        $key = 'Var-'.count(self::$instance->objects);

        if($name !== null && is_string($name)){

            if (self::$instance->objects[$name]){
                self::$instance->objects[$name]['value'][] = $obj;
            } else {
                self::$instance->objects[$name]['value'][] = $obj;
                self::$instance->objects[$name]['path'] = $info[0]['file'];
                self::$instance->objects[$name]['line'] = $info[0]['line'];
            }

        } else {
            self::$instance->objects[$key]['value'][] = $obj;
            self::$instance->objects[$key]['path'] = $info[0]['file'];
            self::$instance->objects[$key]['line'] = $info[0]['line'];
        }

    }

    /**
     * @param boolean $view
     */
    static public function setView($view){
        if (self::$instance == null) {
            self::$instance = new self();
        }
        self::$instance->view = $view;
    }


}