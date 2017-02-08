<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript program to pass a JavaScript function as parameter</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function addStudent(id, refreshCallback)
{
    refreshCallback();  
}

function refreshStudentList() {
    console.log('Hello');
}

addStudent(1, refreshStudentList);