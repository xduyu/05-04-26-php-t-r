<?php
// class CUser
// {
//   public $name;
//   public $email;
//   public $age;
//   public $isActive = true;

//   // вывод информации пользователя
//   public function getInfoMethod()
//   {
//     return "name: {$this->name}, email: {$this->email}, age: {$this->age}, isActive: {$this->isActive}";
//   }

//   // диактивировать данные
//   public function deactivateUser()
//   {
//     $this->isActive = false;
//     return "the user has been deactivated";
//   }

//   // активировать данные
//   public function activateUser()
//   {
//     $this->isActive = true;
//     return "The user has been activated";
//   }
// }

// $user1 = new CUser();
// $user1->name = "name123";
// $user1->age = 1234;
// $user1->email = "email@email.com";
// $user1->deactivateUser();
// echo $user1->getInfoMethod();
// echo "</br>";
// $user1->activateUser();
// echo $user1->getInfoMethod();

// echo "</br>";
// $user2 = new CUser();
// $user2->name = "fedor";
// $user2->age = 123;
// $user2->email = "2email2@email2.com";
// echo $user2->deactivateUser();
// echo "</br>";
// echo $user2->getInfoMethod();

// echo "</br>";

// echo "Пользователь 1 активен: " . ($user1->isActive ? "da" : "net");
// echo "Пользователь " . $user2->name .  " активен: " . ($user2->isActive ? "da" : "net");


// конструктор:

// class CUser
// {
//   public $name;
//   public $age;

//   public function __construct($username, $userage)
//   {
//     $this->name = $username;
//     $this->age = $userage;
//   }

//   public function getInfo()
//   {
//     return "пользователь {$this->name} создан";
//   }
// }

// $user1 = new CUser("Anna", 100);
// echo $user1->getInfo();
// echo "</br>";
// $user2 = new CUser("Fedor", 100);
// echo $user2->getInfo();
// echo "</br>";
// деструктор 

// class File
// {
//   public $file;

//   public function __construct($filename)
//   {
//     $this->file = fopen($filename, "w");
//     echo "file opened";
//   }

//   public function __destruct()
//   {
//     fclose($this->file);
//     echo "file closed";
//   }

//   public function filewrite($text)
//   {
//     fwrite($this->file, $text);
//   }
// }

// $file = new File("text.txt");
// $file->filewrite("bebebbebebebebebebbe");

// class User
// {
//   public $name;
//   public $email;
//   public $age;

//   public function __construct($name, $email, $age)
//   {
//     $this->name = $name;
//     $this->email = $email;
//     $this->age = $age;
//   }

//   public function isAdult()
//   {
//     return $this->age > 18 ? "adult" : "teenager";
//   }
// }
// $user1 = new User("Anna", "anna@gmail.com", 20);
// $user2 = new User("Fedor", "fedor@gmail.com", 15);
// echo $user1->name . " is " . $user1->isAdult();
// echo "</br>";
// echo $user2->name . " is " . $user2->isAdult();
// 1) скидка = цена * (скидка/100)
// class Product
// {
//   public $name;
//   public $price;
//   public $discount = 0;
//   public $finalPrice = 0;

//   public function __construct($name, $price, $discount)
//   {
//     $this->name = $name;
//     $this->price = $price;
//     $this->discount = $discount;
//     $discount = $this->price * ($this->discount / 100);
//     $finalPrice = $this->price - $discount;
//     $this->finalPrice = $finalPrice;
//   }

//   // public function getFinalPrice()
//   // {
//   //   $discount = $this->price * ($this->discount / 100);
//   //   $finalPrice = $this->price - $discount;
//   //   $this->finalPrice = $finalPrice;
//   // }
//   public function getInfo()
//   {
//     return "Товар: {$this->name}, Цена со скидкой: {$this->finalPrice} руб.";
//   }
// }

// $product = new Product("milk", 200, 15);
// echo $product->getInfo();

// class Device
// {
//   public string $brand;
//   public string $model;
//   public int $price;

//   public function __construct($brand, $model, $price)
//   {
//     $this->brand = $brand;
//     $this->model = $model;
//     $this->price = $price;
//   }

//   public function getInfo()
//   {
//     return "{$this->brand}, {$this->model}, {$this->price};";
//   }
// }

// class Phone extends Device
// {
//   public string $os;

//   public function __construct($brand, $model, $price, $os)
//   {
//     parent::__construct($brand, $model, $price);
//     $this->os = $os;
//   }

//   public function call(): string
//   {
//     return "{$this->brand} звонит";
//   }
//   public function getInfo(): string
//   {
//     $parentInfo = parent::getInfo();
//     return $parentInfo . "Телефон: {$this->brand}; {$this->model}; {$this->os}";
//     // return "Телефон: {$this->brand}; {$this->model}; {$this->os}";
//   }
// }

// class Tablet extends Device
// {
//   public float $screenSizeY;
//   public float $screenSizeX;

//   public function __construct($brand, $model, $price, $screenSizeY, $screenSizeX)
//   {
//     parent::__construct($brand, $model, $price);
//     $this->screenSizeY = $screenSizeY;
//     $this->screenSizeX = $screenSizeX;
//   }

//   public function watch(): string
//   {
//     return "Смотрит видео с разрешением: </br> Y: {$this->screenSizeY} </br> X: {$this->screenSizeX}";
//   }
// }

// $phone = new Phone("apple", "iphone 17 pro max", 1700, "IOS");
// // echo $phone->call();
// // echo $phone->getInfo();

// $tablet = new Tablet("apple", "ipad", 1700, 2048, 2048);
// echo $tablet->watch();
// $device = new Device("apple", "iphone 16 pro max", 1500);
// echo $phone->getInfo();

// class User
// {
//   public $name;
//   public $surname;
//   public $age;
//   public $role;

//   public function __construct($name, $surname, $age)
//   {
//     $this->name = $name;
//     $this->age = $age;
//     $this->surname = $surname;
//     $this->role = "User";
//   }

//   public function getInfo()
//   {
//     return "Student: {$this->name} {$this->surname} [{$this->role}] in group: ";
//   }
//   public function changeRole($newRole)
//   {
//     $this->role = $newRole;
//     return "Role was changed to " . $newRole;
//   }
//   public function getRole()
//   {
//     return $this->role;
//   }
// }

// class Admin extends User {}

// class Teacher extends User
// {
//   public $subject;

//   public function __construct($name, $surname, $age, $subject)
//   {
//     parent::__construct($name, $surname, $age);
//     $this->subject = $subject;
//     parent::changeRole("Teacher");
//   }

//   public function getRole()
//   {
//     return parent::getRole();
//   }
// }

// class Student extends User
// {
//   public $group;

//   public function __construct($name, $surname, $age, $group)
//   {
//     parent::__construct($name, $surname, $age);
//     $this->group = $group;
//     parent::changeRole("Student");
//   }

//   public function getInfo()
//   {
//     return parent::getInfo() . "{$this->group}";
//   }
//   public function getRole()
//   {
//     return parent::getRole();
//   }
// }

// $student1 = new Student("Ivan", "Ivanovich", 20, "Math-012");
// // $student1->group = "Math-013";
// echo $student1->getInfo();
// echo "</br>";
// // echo $student1->getRole();
// $teacher1 = new Teacher("Ivan", "Petrovich", 25, "Math");
// echo $teacher1->getRole();

class User
{
  public $name;
  protected $email;
  private $password;

  public function __construct($name, $email, $password)
  {
    $this->$name = $name;
    $this->$email = $email;
    $this->$password = $password;
  }

  public function getInfo()
  {
    return "User : {$this->name} ; {$this->email} ; {$this->password}";
  }
  public function auth($inp_email, $inp_password)
  {
    if ($inp_email == $this->email && $inp_password == $this->password) {
      return 'access allowed';
    } else {
      return "access was denied";
    }
  }
  private function changePassword($oldPass, $NewPass)
  {
    if ($oldPass === $this->password) {
      $this->password = $NewPass;
      return "password was changed";
    } else {
      return "acces was denied";
    }
  }
  public function getAccessForChange($oldPass, $NewPass)
  {
    if ($oldPass === $this->password) {
      return $this->changePassword($oldPass, $NewPass);
    } else {
      return "access was denied";
    }
  }
}

$u1 = new User("name", "email", "password");
echo $u1->getInfo();
echo "</br>";
echo $u1->getAccessForChange("password", "password1");
echo "</br>";
echo $u1->getInfo();
echo "</br>";
echo $u1->auth("email", "password1");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
</body>

</html>