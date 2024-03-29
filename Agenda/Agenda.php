<!DOCTYPE html>
<html>

<head>
    <title>Agenda</title>
</head>

<body>

    <?php
    class agenda1
    {
        private $agenda;


        public function __construct($array = null)
        {
            if ($array == null) {
                $this->agenda = array();
            } else {
                $this->agenda = json_decode($_POST['array'], true);
            }
        }


        public function addContact($nombre, $email)
        {
            $keyExit = $this->keyExist($nombre);
            $checkEmail = $this->checkEmail($email);
            if (!$keyExit && $checkEmail) {
                $this->agenda[$nombre] = $email;
            } else if ($keyExit && $checkEmail) {
                $this->agenda[$nombre] = $email;
            }
        }


        private function keyExist($nombre)
        {
            $keys = array_keys($this->agenda);
            foreach ($keys as $key) {
                if (strtolower($key) == strtolower($nombre)) {
                    return true;
                }
            }
            return false;
        }


        private function checkEmail($email)
        {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return true;
            }
            return false;
        }
        
        public function setAgenda()
        {
            $string = json_encode($this->agenda);
            return $string;
        }
        public function seeArray()
        {
            $string = '<table><tr><td style=font-weight:bold;>Name</td><td style=font-weight:bold;>E-mail</td></tr>';
            foreach ($this->agenda as $key => $value) {
                $string .= '<tr><td>' . $key . '</td><td>' . $value . '</td></tr>';
            }
            $string .= '</table>';
            echo $string;
        }
    }
    
    $result = '';
    if (!isset($_POST['array'])) {
        $obj = new agenda1();
    } else {
        $obj = new agenda1($_POST['array']);
        if (empty($_POST['nombre'])) {
            $result = '<h4 style=color:red;>The name is empty</h4>';
        } else {
            $name = htmlentities($_POST['nombre']);
            if (isset($_POST['email']) && !empty($_POST['email'])) {
                $email = htmlentities($_POST['email']);
                $obj->addContact($name, $email);
            }
        }
    }
    ?>
    <form method="POST">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" value=<?php echo isset($_POST['nombre']) ? $_POST['nombre'] : ''; ?> ><br>
        <label>Email:</label><br>
        <input type="email" name="email" value=<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?> ><br>
        <input type="submit" />
        <input type="hidden" name="array" value=<?php echo $obj->setAgenda(); ?> />
    </form>
    <?php
    echo $result;
    $obj->seeArray();

    ?>
</body>

</html>