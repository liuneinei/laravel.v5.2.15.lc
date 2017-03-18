<?php
/**
 * Created by PhpStorm.
 * User: liuchen
 * Date: 16/12/24
 * Time: 下午3:37
 */
        echo 'execuse me';
echo '<br/>';

        echo isset($_GET['id']) ? $_GET['id']:'not id';
//        echo '<br/>';

//        echo $share1;

        echo $user;
echo '<br />';
echo '<a href="category">跳转添加</a>';
echo '<br />';
foreach ($news as $new){
    echo "<a href='$new->link'>$new->title</a>";
    echo '<br />';
}

//testXdebug();
//function testXdebug() {
//    require_once('abc.php');
//}

        class Persons{
    public $name = "Tom";
    public $gender ;
            static $money=10000;
    public function __construct()
    {
        echo "这里是父类",PHP_EOL,"<br />";
    }
    public function say(){
        echo $this->name," \t is ",$this->gender,"\r\n","<br />";
    }
        }

        class family extends Persons{
    public $name;
    public $gender;
    public $age;
    static $money=100000;
    public function  __construct()
    {
        parent::__construct();
        echo "这里是family类",PHP_EOL,"<br />";
    }
    public  function say(){
        parent::say();
        echo $this->name," \t is \t ",$this->gender," , and is \t ",$this->age,PHP_EOL,"<br />";
    }

    public function cry(){
        echo "Persons->money:",parent::$money,PHP_EOL,"<br />";
        echo ' % >_< % ',PHP_EOL,"<br />";
        echo "self->money:",self::$money,PHP_EOL,"<br />";
        echo '(*^_^*)';
    }
        }

        $poor = new family();
        $poor->name="Lee";
        $poor->gender="female";
        $poor->age=25;
        $poor->say();
        $poor->cry();


        echo '<br/>接下来是播放器：';
        //接口
        interface process{
            public function process();
        }

        //编码功能
        class playerencode implements process{
            public function process(){
                echo 'encode <br/>';
            }
        }
        //输出功能
        class playeroutput implements process{
            public function process(){
                echo 'output <br/>';
            }
        }
        //调度管理器
        class playProcess{
            private $message = null;
            public function __construct()
            {
            }

            public function callback(event $event){
                $this->message = $event->click();

                if ($this->message instanceof process){
                    $this->message->process();
                }
            }
        }
        // 播放器的事件处理类
        class event{
            private $m;
            public function __construct($me)
            {
                $this->m = $me;
            }
            public function click(){
                switch ($this -> m){
                    case 'encode':
                        return new playerencode();
                        break;
                    case 'output':
                        return new playeroutput();
                        break;
                }
            }
        }

        //播放器的事件处理逻辑
        class mp44{
            public function work(){
                $playProcess = new playProcess();
                $playProcess -> callback(new event('encode'));
                $playProcess -> callback(new event('output'));
            }
            public $works ='www.wxnnn.wang';
        }

        $mp44 = new mp44();

        $mp44->work();






