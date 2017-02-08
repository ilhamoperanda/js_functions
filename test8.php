<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>Check a number is prime or not</title>
</head>
<body>
<script type="text/javascript">
  function test_prime(n)
{

  if (n===1)
  {
    return false;
  }
  else if(n === 2)
  {
    return true;
  }else
  {
    for(var x = 2; x < n; x++)
    {
      if(n % x === 0)
      {
        return false;
      }
    }
    return true;  
  }
}

console.log(test_prime(37));
</script> 
</body>
</html>

