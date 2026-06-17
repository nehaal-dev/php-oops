# PHP OOP — Complete Learning Journey 🚀
> **Author:** Nehal Khan | **Goal:** PHP Laravel Developer | **Target:** Delhi NCR

---

## 📌 About This Document

Ye README meri OOP PHP learning journey ka complete reference hai.
Har concept khud se likha — no copy paste, no ratta, trial and error se seekha.

---

## 🗺️ Learning Path

```
Day 1  → Class, Object, Properties, Methods
Day 2  → Constructor
Day 3  → Encapsulation (Private, Getter, Setter)
Day 4  → Inheritance
Day 5  → Polymorphism
Day 6  → Abstract Class
Day 7  → Interface
Day 8  → Static Methods & Properties
Day 9+ → OOP + PDO + CRUD (Student Management System)
```

---

## 📚 Day 1 — Class, Object, Properties, Methods

### Concept
- **Class** = Blueprint (design)
- **Object** = Us blueprint se bani actual cheez
- **Properties** = Data (variables)
- **Methods** = Behaviour (functions)

### Code
```php
<?php
class Student {
    public $name;
    public $age;

    function introduce($name, $age) {
        $this->name = $name;
        $this->age = $age;
        return "Hi, I am " . $this->name . " and I am " . $this->age . " years old.";
    }
}

$obj = new Student();
echo $obj->introduce('Alex', 21);
```

### Key Learnings
- `public` = Declare hamesha class andar, access kahin se bhi
- `$this` = "Is class ki apni property"
- `return` vs `echo` — return value wapas bhejta hai, echo seedha print karta hai

### Interview Answer
> *"Class ek blueprint hoti hai aur object us blueprint ka real instance. Properties class ka data hoti hain aur methods uska behaviour define karte hain."*

---

## 📚 Day 2 — Constructor

### Concept
- Object banate waqt automatically chalta hai
- `__construct()` — double underscore — magic method hai

### Code
```php
<?php
class BankAccount {
    public $owner;
    public $balance;

    function __construct($owner, $balance) {
        $this->owner = $owner;
        $this->balance = $balance;
    }

    function accountInfo() {
        return "Account Owner: " . $this->owner . " | Balance: " . $this->balance;
    }
}

$account = new BankAccount('John', 5000);
echo $account->accountInfo();
```

### Key Learnings
- Constructor aur method alag hote hain — alag kaam
- `$owner` = temporary local variable — function khatam, gaya
- `$this->owner` = permanent — poori class mein accessible
- Constructor mein return nahi karte — koi receive karne wala nahi

### Interview Answer
> *"Constructor ek special method hai jo object banate waqt automatically call hota hai. Iska kaam initial values set karna hai. `__construct()` likhte hain — double underscore ke saath."*

---

## 📚 Day 3 — Encapsulation

### Concept
- Data protect karna — bahar se direct access band
- `private` = sirf class andar
- `protected` = class + child classes
- `public` = kahin se bhi
- **Getter** = Private value return karna
- **Setter** = Private value change karna (with validation)

### Code
```php
<?php
class BankAccount {
    private $owner;
    private $balance;

    function __construct($owner, $balance) {
        $this->owner = $owner;
        $this->balance = $balance;
    }

    // Getter
    function getOwner() {
        return $this->owner;
    }

    // Setter with validation
    function setBalance($balance) {
        if ($balance < 0) {
            return "Balance negative nahi ho sakta!";
        }
        $this->balance = $balance;
    }

    function getInfo() {
        return "Owner: " . $this->owner . " | Balance: " . $this->balance;
    }
}

$acc = new BankAccount('John', 5000);
echo $acc->getOwner();
$acc->setBalance(-100); // Blocked
$acc->setBalance(9000); // Allowed
```

### Key Learnings
- `private` hai toh encapsulation hai — getter/setter naam optional
- Magic methods = `__` double underscore — automatically call hote hain
- Laravel mein `getNameAttribute()` / `setNameAttribute()` = Accessors/Mutators

### Interview Answer
> *"Encapsulation ka matlab hai data ko protect karna. Private properties bahar se directly access nahi ho sakti — sirf getter/setter methods se controlled access milta hai. Ye data security ensure karta hai."*

---

## 📚 Day 4 — Inheritance

### Concept
- Child class parent se properties + methods inherit karta hai
- `extends` keyword
- `protected` = child bhi access kar sakti hai
- `parent::__construct()` = parent ka constructor call karna

### Code
```php
<?php
class Animal {
    protected $name;
    protected $age;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    function eat() {
        return $this->name . " is eating";
    }
}

class Dog extends Animal {
    private $breed;

    function __construct($name, $age, $breed) {
        parent::__construct($name, $age);
        $this->breed = $breed;
    }

    function bark() {
        return $this->name . " is barking! Woof Woof!";
    }
}

$dog = new Dog('Bruno', 3, 'Labrador');
echo $dog->eat();
echo $dog->bark();
```

### Key Learnings
- Child class bahar banate hain — parent ke andar nahi
- Child ka object banta hai — parent + child dono ke methods milte hain
- Extra property hai → Child constructor + parent:: call karo
- Extra property nahi → Constructor banane ki zaroorat nahi

### Interview Answer
> *"Inheritance se ek class doosri class ki properties aur methods inherit kar leti hai — extends keyword se. Isse code reuse hota hai aur hierarchy maintain hoti hai."*

---

## 📚 Day 5 — Polymorphism

### Concept
- Same method naam — alag alag implementation
- Method Override = Child class parent ka method apne hisaab se likhti hai
- Dono ek hi cheez ke 2 naam hain

### Code
```php
<?php
class Payment {
    function pay() {
        return "Processing payment...";
    }
}

class CreditCard extends Payment {
    function pay() {
        return "Paid via Credit Card!";
    }
}

class UPI extends Payment {
    function pay() {
        return "Paid via UPI!";
    }
}

class Cash extends Payment {
    function pay() {
        return "Paid via Cash!";
    }
}

$credit = new CreditCard();
$upi = new UPI();
$cash = new Cash();

echo $credit->pay(); // Paid via Credit Card!
echo $upi->pay();    // Paid via UPI!
echo $cash->pay();   // Paid via Cash!
```

### Key Learnings
- Parent method = Generic template
- Child override kare ya na kare — dono valid
- Bina polymorphism = 100 payment types → 100 if/else 😬
- Laravel mein `index()` method har Controller mein alag kaam karta hai

### Interview Answer
> *"Polymorphism ka matlab hai ek hi method ka alag alag classes mein alag behaviour. Same method naam — different implementation. Isse code clean rehta hai aur if/else ki zaroorat nahi."*

---

## 📚 Day 6 — Abstract Class

### Concept
- Incomplete class — object nahi banta
- Sirf extend karne ke liye
- Abstract method — child mein implement karna zaroori
- Normal method bhi ho sakta hai

### Code
```php
<?php
abstract class Vehicle {
    protected $brand;
    protected $model;

    function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    abstract function service(); // Child MUST implement

    function getDetails() {      // Normal method — already implemented
        return "Brand: " . $this->brand . " | Model: " . $this->model;
    }
}

class CarService extends Vehicle {
    private $engineType;

    function __construct($brand, $model, $engineType) {
        parent::__construct($brand, $model);
        $this->engineType = $engineType;
    }

    function service() {
        return $this->brand . " " . $this->model . " - Car Service Done | Engine: " . $this->engineType;
    }
}

$car = new CarService('Toyota', 'Corolla', 'Petrol');
echo $car->getDetails();
echo $car->service();
```

### Key Learnings
- Abstract class ka object nahi banta — `new Vehicle()` → Error
- Abstract method = Contract — bhoolne ki permission nahi
- Normal class = Suggestion, Abstract class = Zaroori rule
- Team projects mein safety net hai

### Interview Answer
> *"Abstract class ek incomplete class hoti hai jiska object nahi ban sakta — sirf extend karne ke liye hoti hai. Abstract methods child mein implement karne zaroori hote hain. Ye ek contract ki tarah kaam karta hai — koi method miss nahi ho sakta."*

---

## 📚 Day 7 — Interface

### Concept
- Pure contract — sirf method declarations
- Koi implementation nahi
- `implements` keyword
- Ek class multiple interfaces implement kar sakti hai

### Code
```php
<?php
interface Orderable {
    function placeOrder();
    function cancelOrder();
    function getOrderStatus();
}

interface Payable {
    function processPayment();
    function getReceipt();
}

class FoodOrder implements Orderable, Payable {
    private $orderId;
    private $item;
    private $amount;

    function __construct($orderId, $item, $amount) {
        $this->orderId = $orderId;
        $this->item = $item;
        $this->amount = $amount;
    }

    function placeOrder() {
        return "Order #" . $this->orderId . " placed for " . $this->item;
    }

    function cancelOrder() {
        return "Order #" . $this->orderId . " cancelled";
    }

    function getOrderStatus() {
        return "Order #" . $this->orderId . " Status: Confirmed";
    }

    function processPayment() {
        return "Payment of Rs." . $this->amount . " processed";
    }

    function getReceipt() {
        return "Receipt: #" . $this->orderId . " | " . $this->item . " | Rs." . $this->amount;
    }
}

$order = new FoodOrder('ORD001', 'Pizza', 500);
echo $order->placeOrder();
echo $order->processPayment();
```

### Key Learnings
- Interface mein `class` keyword nahi — `interface` likhte hain
- Multiple interfaces implement kar sakte hain — Abstract mein nahi
- Laravel mein Repository Pattern mein use hota hai

### Comparison Table

| Feature | Normal Class | Abstract Class | Interface |
|---|---|---|---|
| Object banta hai | ✅ | ❌ | ❌ |
| Normal methods | ✅ | ✅ | ❌ |
| Multiple inherit | ❌ | ❌ | ✅ |
| Keyword | `extends` | `extends` | `implements` |

### Interview Answer
> *"Interface ek pure contract hai — sirf method declarations hote hain, koi implementation nahi. Class implements keyword se use karti hai. Ek class multiple interfaces implement kar sakti hai jo abstract class mein nahi ho sakta."*

---

## 📚 Day 8 — Static Methods & Properties

### Concept
- Object banaye bina class ka method use karo
- `static` keyword
- `::` double colon se call karte hain
- `self::` use karo — `$this` nahi

### Code
```php
<?php
class MathHelper {
    static function add($a, $b) {
        return $a + $b;
    }

    static function percentage($amount, $percent) {
        return ($amount * $percent) / 100;
    }

    static function isEven($num) {
        if ($num % 2 == 0) {
            return "Yes, " . $num . " is Even";
        }
        return "No, " . $num . " is Odd";
    }
}

class StringHelper {
    static function makeUpperCase($str) {
        return strtoupper($str);
    }

    static function countWords($str) {
        return "Total words: " . str_word_count($str);
    }

    static function reverse($str) {
        return strrev($str);
    }
}

echo MathHelper::add(10, 5);
echo MathHelper::percentage(5000, 10);
echo StringHelper::makeUpperCase('hello world');
echo StringHelper::reverse('Laravel');
```

### Key Learnings
- Static = Object ki zaroorat nahi
- `self::` = Static context mein `$this` ki jagah
- Laravel mein `DB::table()`, `Auth::user()`, `Cache::get()` — sab static

### Interview Answer
> *"Static methods object banaye bina call hote hain — ClassName::method() se. Utility functions ke liye use karte hain. Laravel mein Facades static pattern use karti hain."*

---

## 📚 Day 9 — OOP + PDO + CRUD

### Project: Student Management System

#### Database Setup
```sql
CREATE DATABASE student_management;
USE student_management;

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

#### Project Structure
```
student_management/
    config/
        Database.php
    class/
        Student.php
    index.php
    create.php
    edit.php
    delete.php
```

#### Database.php — PDO Connection
```php
<?php
class Database {
    private $host = 'localhost';
    private $dbname = 'student_management';
    private $username = 'root';
    private $password = '';

    function connect() {
        try {
            $conn = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname",
                $this->username,
                $this->password
            );
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}
```

#### Student.php — CRUD Methods
```php
<?php
class Student {
    private $conn;

    function __construct($conn) {
        $this->conn = $conn;
    }

    // READ
    function getAll() {
        $stmt = $this->conn->query("SELECT * FROM students");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // CREATE
    function create($name, $email, $age) {
        $stmt = $this->conn->prepare(
            "INSERT INTO students (name, email, age) VALUES (?, ?, ?)"
        );
        return $stmt->execute([$name, $email, $age]);
    }

    // UPDATE
    function update($id, $name, $email, $age) {
        $stmt = $this->conn->prepare(
            "UPDATE students SET name=?, email=?, age=? WHERE id=?"
        );
        return $stmt->execute([$name, $email, $age, $id]);
    }

    // DELETE
    function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM students WHERE id=?");
        return $stmt->execute([$id]);
    }
}
```

### PDO Key Methods

| Method | Kaam |
|---|---|
| `query($sql)` | Simple SELECT — no user input |
| `prepare($sql)` | User input wali queries — safe |
| `execute([$val])` | Prepared query run karo |
| `fetch()` | Ek row lao |
| `fetchAll()` | Sab rows lao |
| `lastInsertId()` | Last insert ka ID |

### Interview Answer
> *"PDO yaani PHP Data Objects — database se baat karne ka OOP aur secure tarika. Prepared statements se SQL injection se bachata hai. Multiple databases support karta hai. Laravel internally PDO use karta hai."*

---

## 🎯 OOP Concepts — Quick Reference

```
Class          = Blueprint
Object         = Instance
Constructor    = Auto-call on object creation
Encapsulation  = Data hide karo — private/protected
Inheritance    = Child → Parent se lo — extends
Polymorphism   = Same method, alag kaam
Abstract       = Incomplete class — object nahi banta
Interface      = Pure contract — sirf declarations
Static         = Object ke bina use karo
PDO            = Secure database connection
```

---

## 🏆 Golden Rules — Jo Yaad Rakhna Hai

```
1. Blank file se likho — copy paste nahi
2. Pehle socho — phir likho
3. Galti karo — fix karo — seekho
4. Har concept ke baad khud se explain karo
5. $this = class ki apni property
6. return = value wapas bhejo, echo = print karo
7. private = andar, protected = child bhi, public = sab
8. parent:: = parent ka constructor call karo
9. PDO prepared statements = SQL injection se bachao
10. Laravel = OOP ka hi use karta hai — solid raho
```

---

## 📝 Interview Preparation — Top Questions

### OOP
1. OOP kya hai? 4 pillars kaun se hain?
2. Abstract class aur Interface mein fark?
3. `$this` kya hai?
4. Constructor kab use karte hain?
5. Encapsulation kyun zaroori hai?
6. Magic methods kya hote hain?
7. Static methods kab use karte hain?
8. `parent::` kab use karte hain?

### PDO/Database
1. PDO kya hai? mysqli se kya farak?
2. Prepared statement kyun use karte hain?
3. SQL Injection kya hai? Kaise bachte hain?
4. `fetch()` aur `fetchAll()` mein fark?

---

*Last Updated: After completing OOP + PDO + CRUD basics*
*Next: Laravel — Routes, Controllers, Models, Eloquent ORM*

