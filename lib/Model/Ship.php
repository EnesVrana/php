 <?php

 class Ship
 {
     private $id;
     private $name;

     private $weaponPower = 0;

     private $jediFactor = 0;

     private $strength = 0;

     private $underRepair;

     public function __construct($name)
     {
         $this->name = $name;
         $this->underRepair = mt_rand(1,100) < 30;
     }
     public function isFunctional(){
         return !$this->underRepair;
     }

     public function sayHello()
     {
         echo 'hello';
     }

     public function getName()
     {
         return $this->name;
     }

     public function getNameAndSpecs($useShortFormat = false)
     {
         if ($useShortFormat){
             return sprintf(
                 '%s: %s/%s/%s',
                 $this->name,
                 $this->weaponPower,
                 $this->jediFactor,
                 $this->strength
             );
         }
         else{
             return sprintf(
                 '%s: w:%s, j:%s, s:%s',
                 $this->name,
                 $this->weaponPower,
                 $this->jediFactor,
                 $this->strength
             );
         }
     }

     public function doesGivenShipHaveMoreStrength($givenShip)
     {
         return $givenShip->strength > $this->strength;
     }

     public function setStrength($strength){
         if (!is_numeric($strength)){
             throw new Exception('Invalid strength passed');
         }

         $this->strength = $strength;
     }

     public function getStrength(){
         return $this->strength;
     }

     public function getWeaponPower(): int
     {
         return $this->weaponPower;
     }

     public function setWeaponPower(int $weaponPower)
     {
         $this->weaponPower = $weaponPower;
     }

     public function getJediFactor(): int
     {
         return $this->jediFactor;
     }

     public function setJediFactor(int $jediFactor)
     {
         $this->jediFactor = $jediFactor;
     }

     /**
      * @param mixed $name
      */
     public function setName($name)
     {
         $this->name = $name;
     }

     /**
      * @return integer
      */
     public function getId()
     {
         return $this->id;
     }

     /**
      * @param integer $id
      */
     public function setId($id)
     {
         $this->id = $id;
     }




 }
