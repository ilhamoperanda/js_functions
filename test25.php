<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Find longest word</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function Longest_Country_Name(country_name)
  {
  return country_name.reduce(function(lname, country) 
  {
    return lname.length > country.length ? lname : country;
  }, 
"");
}
console.log(Longest_Country_Name(["Australia", "Germany", "United States of America"]));
Flowchart :