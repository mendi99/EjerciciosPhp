<!DOCTYPE html>
<html>

<head>
    <title>Agenda</title>
</head>

<body>
    <?php
    class agenda2
    {
        private $agenda;

        public function __construct($cookie = null)
        {
            if ($cookie == null) {
                $this->agenda = array();
                setcookie('agenda', json_encode($this->agenda), 0);
            } else {
                $this->agenda = $cookie;
            }
        }
        // Añadir un contacto nuevo a la agenda o editar el contacto
        public function addContact($nombre, $email)
        {
            $keyExit = $this->keyExist($nombre);
            $checkEmail = $this->checkEmail($email);
            if ($keyExit == null && $checkEmail) {
                $this->agenda[$nombre] = $email;
            } else if ($keyExit != null && $checkEmail) {
                $this->agenda[$keyExit] = $email;
            }
        }
        // comprobar si un nombre existe
        private function keyExist($nombre)
        {
            $keys = array_keys($this->agenda);
            foreach ($keys as $key) {
                if (strtolower($key) == strtolower($nombre)) {
                    return $key;
                }
            }
            return null;
        }
        // comprueba el email con funciones de php
        private function checkEmail($email)
        {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return true;
            }
            return false;
        }

        public function setAgenda()
        {
            setcookie('agenda', json_encode($this->agenda), 0);
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
    ?>
    <?php
    $result = '';
    if (!isset($_COOKIE['agenda'])) {
        $obj = new agenda2();
    } else {
        $obj = new agenda2(json_decode($_COOKIE['agenda'], true));
        if (empty($_POST['nombre'])) {
            $result = '<h4 style=color:red;>El nombre esta vacio</h4>';
        } else {
            $name = htmlentities($_POST['nombre']);
            if (isset($_POST['email']) && !empty($_POST['email'])) {
                $email = htmlentities($_POST['email']);
                $result = $obj->addContact($name, $email);
            }
        }
    }
    $obj->setAgenda();
    ?>
    <div id="userform">
        <form method="POST">
            <label>Nombre:</label><br>
            <input type="text" name="nombre"><br>
            <label>Email:</label><br>
            <input type="email" name="email"><br>
            <input type="submit" name="submit" />
        </form>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        echo $result;
    }
    $obj->seeArray();

    ?>
</body>

</html>