<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EjercicioU2 php</title>
</head>
<body>
    <?php
    //Creamos una clase que tenga 5 atributos y 3 metodos.
    //A partir de la clase aanterior creamos 2 objetos.
    //Creamos una clase que herede de la clase principal

        class Person
        {
            public $name;
            public $lastName;
            private $email;
            private $phoneNumber;
            private $nVaccine = 0;
            public $maxVaccine = 2;

            //Constructor
            public function __construct($name, $lastName)
            {
                $this->name = $name;
                $this->lastName = $lastName;
            }


            public function UpdateContactInfo($numero, $email)
            {
                $this->phoneNumber = $numero;
                $this->email = $email;
                echo "<p><strong> Los contactos han sigo guardados correctamente. </strong></p>";
            }

            public function FullName()
            {
                echo "<p> Nombre completo: " . $this->name . " " . $this->lastName . "</p>"; 
            }

            public function UpdateNVaccine()
            {
                $this->nVaccine++;
                echo "<p> Se actualizo el numero de vacunas del usuario. Este usuario tiene <strong>" .  $this->nVaccine . "</strong> dosis.</p>";
            }

        }

        class Student extends Person
        {
            public $couse;
            public $tutorPhone;
        }
        
            $person1 = new Student("Camila", "Encina");
            $person1->FullName();
            $person1->UpdateContactInfo("2362 42 2654", "camila.isabel.encina@gmail.com");            
            $person1->UpdateNVaccine();
            
            echo "<br>";

            $person2 = new Student("Bonifacio", "Lousteau");
            $person2->FullName();
            $person2->UpdateContactInfo("2262 42 9936", "u6mduc46vg@temporary-mail.net");            
            $person2->UpdateNVaccine();
            $person2->UpdateNVaccine();

    ?>
</body>
</html>