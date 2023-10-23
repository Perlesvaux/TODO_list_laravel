<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('header')</title>
<style>
/* form { */
/* background-color:lightsteelblue; */
/* width:50%; */
/* display:block; */
/* margin:auto; */
/* } */

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  /* display: inline-block; */
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  /* display: inline-block; */
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 50%;
  margin:auto;
}
    #matriz-estilizada {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #matriz-estilizada td, #tbl th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #matriz-estilizada tr:nth-child(even){background-color: #f2f2f2;}

    #matriz-estilizada tr:hover {background-color: #ddd;}

    #matriz-estilizada th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #04AA6D;
      color: white;
    }

    a:link, a:visited {
      background-color: white;
      color: black;
      border: 2px solid green;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 1rem;
      border-radius: 20px;
    }

    a:hover, a:active {
      background-color: green;
      color: white;
    }

    button{
      background-color: white;
      color: black;
      border: 2px solid green;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 1rem;
      border-radius: 20px;
    }

    button:hover, button:active {
      background-color: green;
      color: white;
    }

    #abort:link, #abort:active, #abort:visited {
      background-color:lightpink;
    }

    #abort:hover{
      background-color:red;
    /* font-size:3rem; */
    }

    #nuevo{ display:none; }

    #show {display:block; margin:auto;}

    h1, h2, h3 {text-align:center;}



</style>
</head>
<body>
@yield('contents')
</body>
</html>
