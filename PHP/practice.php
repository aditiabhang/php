<html>
<head>
  <title>My PHP Practice></title>
</head>
  <body>
    <?php
      
      //function call
      function SayHello() {
        print "Hello world!\n";
      }
      $function_holder = "SayHello";
      $function_holder();
      print "\n";

      //associative array
      $characters = array (
                          array("Name" => "Aditi",
                          "Occupation" => "Student",
                          "Age" => "Guess",
                          "Special power" => "Love"),
                          array("Name" => "Jennifer",
                          "Occupation" => "Actor",
                          "Age" => 50,
                          "Special power" => "Being Ageless"),
                          array("Name" => "Nick Jonas",
                          "Occupation" => "Singer",
                          "Age" => 26,
                          "Super power" => "Priyanka Chopra")
                        );
      foreach ($characters as $value) {
        foreach ($value as $key => $final_value) {
          print "$key: $final_value<br>";
        }
        print "<br>";
      }
//merge array
      $movies = array("Movie" => "Horrible Boss",
                      "Character name" => "Dr. Julia Harris");
      $cast = array("Played by" => "Jennifer Aniston",
                    "Rating" => "Great review!",
                    "Years" => 14,
                    "Remember" => "Forever");

      $merged_array = array_merge($movies,$cast);
        foreach ($merged_array as $key => $value) {
          print "$key: $value<br>";
        }
//push array
      // $pushed_array = array_push($cast, "Series" => "FRIENDS", "All Time Favorite!");
      // print "There are $pushed_array addition to \$cast<p><br>";
      //   foreach ($cast as $key => $value) {
      //     print "$key: $value<br>";
      //   }
      $first_array = array ("red", "black", "white");
      $final = array_push($first_array, "green", "blue", "brown");
      print "<br>----The push array----<br>";
      print "There are $final elements in \$first_array<br>";
      foreach ( $first_array as $val ) {
      print "$val<br>";

      }
//shift array
      $first_array = array ("Uno", "dos", "tres");
      print "<br>----The shift array----<br>";
      while ( count ($first_array) ) {
      $val = array_shift ($first_array);
      print "$val<br>";
      print "There are " . count ($first_array) .
      " elements in \$first_array <br><br>";

      }
//slice
      $first_array = array ("I","want","chocochip","ice","cream","do you?");
      $second_array = array_slice ($first_array, 2, 3);
      print "<br>----The array slice----<br>";
      foreach ( $second_array as $val ) {
      print "$val<br>";

      }
//associative array sort by its keys
      $r_names = array("Aditi", "Jennifer", "Mila Kunis", "Ashton","Robert");
      print "<br>----The associative array sort----<br>";
      asort($r_names);
      foreach ($r_names as $key => $value) {
        print "$value<br>";
      }
//Classes and objects
    print "<br>----Classes and objects----<br>";

    // class myClass {
    //   var $myname = "Creator";
    //   function Greeting() {
    //     print "Hello, I am $myname\n";
    //   }
    // }
    // $obj1 = new myClass();
    // $obj1->myname = "Aditi";
    // $obj1->Greeting();

    class first_class {
      var $name = "harry";
      function SayHello() {
      print "Hello world! My name is $name\n";
      }
      }
      $obj1 = new first_class();
      $obj1->name = "mary";
      $obj1->sayHello();

        ?>
