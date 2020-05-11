<?php
//1. If you have an array `$a = array( 0, 1, 2, 3, 4 );`, 
//how do you extract(display) the value 3 from the array?
echo "Exercise 1 <br>";
$a = array( 0, 1, 2, 3, 4 );
echo $a[3] ."<br>";

//2. If you have an array `
//$a = array( "zero"=>0, "one"=>1, "two"=>2, "three"=>3, "four"=>4 );
//`, how do you extract(show) the value 3 from the array?
echo "Exercise 2 <br>";
$a = array( "zero"=>0, "one"=>1, "two"=>2, "three"=>3, "four"=>4 );
echo $a["three"] . "<br>";

//3. If you have the following array,
// how do you extract the value 3 from the array?
/*
    ```
    $a = array(
        array(
            0,
            1
        ),
        array(
            2,
            array(
                3
            )
        )
    );
    */
echo "Exercise 3 <br>";
$a = array(
    array(
        0,
        1
    ),
    array(
        2,
        array(
            3
        )
    )
);
echo ($a[1][1]["0"]) ."<br>";

//4. If you have the following array, how do you extract the value 3 from the array?
/*
```
$a = array(
    "a"=>array(
        "b"=>0,
        "c=>1
    ),
    "b"=>array(
        "e"=>2,
        "o"=>array(
            "b"=>3
        )
    )
);*/
echo "Exercise 4 <br>";
$a = array(
    "a"=>array(
        "b"=>0,
        "c"=>1
    ),
    "b"=>array(
        "e"=>2,
        "o"=>array(
            "b"=>3
        )
    )
);
echo ($a["b"]["o"]["b"])."<br>";

//5. Create a new array with each comma-separated value as its
// own array element from the string `$a = "a,b,c,d,e,f"`
echo "Exercise 5 <br>";
$a = "a,b,c,d,e,f";
$ownA = explode(",", $a);
echo $ownA[0];
var_dump(explode(",", $a))."<br>";

//6. With the result array from `5`,
// create a new array where each element is *both* key *and* value.
// In other words, the result should be:
/*
```
array(
    "a"=>"a",
    "b"=>"b",
    "c"=>"c",
    "d"=>"d",
    "e"=>"e"
)
*/
echo "Exercise 6 <br>";
$newArr = [];
foreach ($ownA as  $value) {
    $newArr[$value] = $value;
}
var_dump($newArr)."<br>";

//7. You have two arrays like the following.
// One contains field labels, the other contains field values. 
//Write a program to merge this two arrays in such way 
//to output the third array. Use foreach loop.
/*
```
$keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
);
$values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
);
// want to output
$keysAndValues = array(
    "first"=>"dinosaur",
    "second"=>"pig",
    "third"=>"platypus"
);
```*/
echo "Exercise 7 <br>";

$keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
);
$values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
);
$keysAndValues = [
    $keys["field1"] => $values["field1value"],
    $keys["field2"] => $values["field2value"],
    $keys["field3"] => $values["field3value"]
];

var_dump($keysAndValues)."<br>";

//8. You have an array of transactions, 
//each of which has a debit and credit amount.
//Find the absolute value of the transaction 
//amount (i.e. `abs( debit - credit )`) 
//and add it as a new `key=>value` pair to each transaction.
/*
```
$transactions = array(
    array(
        "debit"=>2,
        "credit"=>3
    ),
    array(
        "debit"=>15,
        "credit"=>14
    )
);

// outputs
$transactions = array(
    array(
        "debit"=>2,
        "credit"=>3,
        "amount"=>1
    ),
    array(
        "debit"=>15,
        "credit"=>14,
        "amount"=>1
    )
);*/
echo "Exercise 8 <br>";

$transactions = array(
    array(
        "debit"=>2,
        "credit"=>3
    ),
    array(
        "debit"=>15,
        "credit"=>14
    )
);

$kvOne = abs($transactions[0]["debit"]-$transactions[0]["credit"]);
$kvTwo = abs($transactions[1]["debit"]-$transactions[1]["credit"]);


$transactions[0]["amount"] = $kvOne;
$transactions[1]["amount"] = $kvTwo;

var_dump($transactions)."<br>";


//9. Find the sum of this array of numbers 
//`$a = array( 0, 1, 2, 3, 4, 5, 6 );`. Use foreach loop.

echo "Exercise 9"."<br>";

$a = array( 0, 1, 2, 3, 4, 5, 6 );  

$sum = 0;
foreach($a as $key => $value) {
    $sum += $value; 
};
echo $sum;

?>