<?php
// 关键字 self表示当前所在类的名字
/*统计学生人数

    class Student{
        private static $num=0; //静态变量 在内存中就一份   
        public function __construct(){
            self::$num++;
        }
        function show(){
            echo '学生人数为:'.self::$num;
        }
        function __destruct(){
            self::$num--;
        }
    }

    $stu1=new Student();
    $stu2=new Student();
    $stu3=new Student();
    $stu4=new Student();
    $stu2->show();
    unset($stu2);
    $stu3->show();

*/

/* 静态对象的继承
    class Person{
        public static $add='中国';
        public static function show(){
            echo '这是中国';
        }
    }

    // 继承
    class Student extends Person{

    }
    // 测试
    echo Student :: $add; //通过子类继承访问父类的静态成员
    Student::show();
*/
    class Person{
        public static $type='人类';

        public function show(){
            // echo self::$type; //人类
            echo static::$type;
        }
    }

class Student extends Person{
    public static $type='学生';
    public function show2(){
        // echo self :: $type; //学生
        echo static :: $type;
    }
}

$obj=new Student;
$obj ->show();
$obj -> show2();
// static 表示当前对象所属的类   static有两个作用1.表示静态类，2.表示当前类名
