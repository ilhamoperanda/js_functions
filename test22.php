<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Letter count within a string</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function char_count(str, letter) 
{
 var letter_Count = 0;
 for (var position = 0; position < str.length; position++) 
 {
    if (str.charAt(position) == letter) 
      {
      letter_Count += 1;
      }
  }
  return letter_Count;
}

console.log(char_count('w3resource.com', 'o'));