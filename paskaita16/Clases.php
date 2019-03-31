<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

// klasej kuriami objektai.
        class Animal {

            public $name;  // atributas , properciai, savybes
            public $phrase;  //public ir private kapsuliacija

//            public function setName() {
//                $this->name = $value;
//            }

            public function speak($level) { // metodas paibudina veiksma.
                echo $this->name . ' sako ' . $level . ' lygiu ' . $this->phrase; // this, egzistuoja tik klases metuoduose. Objekta nurodo, kuriam iskviestas metodas
            }

        }

        $dog = new Animal; // sukuriamas objekts, bet be reiksmiu.
        $dog->phrase = "Woof!";  // pridedamos reiksmes objektui
        $dog->name = "Jonas";

        $dog->speak(65);
        // echo $dog->name . ' sako ' . $dog->phrase;

        $cat = new Animal;
        $cat->phrase = "Meow!";
        $cat->name = "E";

        $cat->speak(13);
        //  echo $cat->name . ' sako ' . $cat->phrase;
        ?>
    </body>
</html>
