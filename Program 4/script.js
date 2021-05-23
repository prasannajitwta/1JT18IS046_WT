var str = prompt("Enter the Input", "");
if (!(isNaN(str)))
{
    var num, rev = 0, remainder;
    num = parseInt(str);
    while (num != 0) 
    {
    remainder = num % 10;
    num = parseInt(num / 10);
    rev = rev * 10 + remainder;
    }
    const p = str * rev;  //p=product

alert("Reverse of " + str + " is " + rev + " and the product is " + p);

}
else
{
    str = str.toUpperCase();
    function vowels(string)
     {
    var vowels = ["A", "E", "I", "O", "U"]
    var count = 0;
    for (i = 0; i < string.length; i++)
    {
    if (vowels.indexOf(string[i]) !== -1) {
    count += 1;
    }
    
    
}
return count;
}
n = vowels(str)
alert("The given string " + str + " has " + n + "  Vowles in it")
}
