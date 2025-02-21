<?php 


class User{
    public string $name;
    public string $lastname;
    public int $age;
    protected int $cpf;

    public function __construct(string $name, string $lastname, int $age, int $cpf) {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->cpf = $cpf;
        
    }


    protected function getCPF():string {
        return (string) $this->cpf;

    }

    public function selfIntroduction():string{
        return "Hi there! My name is $this->name $this->lastname and I'm $this->age years old.";

    }


}


class Admin extends User {

    public function revelCPF():string{
        return $this->getCPF();
    }
}


$admin = new Admin("","",22,12345678900);

echo " <P>" . $admin->revelCPF() . " </p>"

?>