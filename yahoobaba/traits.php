<?php
// jab ek hi fn ko ek se jyada  class me likhna ho tab hm trait ka use krte .trait actually class ke bahar ek main fn bna lete aur uska name trait de dete.(use keyword trait).

trait hello{
    public function sayhello(){
        echo "hello everyone";
    }
}

trait bye{
    public function saybye(){
        echo "Bye Bye everyone";

    }
}
class base{
    use hello,bye;
}

class base2{
    use hello;
}

$test=new base();
$test2=new base2();

$test->sayhello();
$test->saybye();
echo "<br>";
$test2->sayhello();
?>