<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>Bigger elements in an array</title>
</head>
<body>
  
</body>
</html>
JavaScript Code :

function BiggerElements(val)
   {
     return function(evalue, index, array)
     {
     return (evalue >= val);
     };
   }
var result = [11, 45, 4, 31, 64, 10]. filter(BiggerElements(10));
console.log(result);