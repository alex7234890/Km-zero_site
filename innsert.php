<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
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
}
</style>
<body>

<h3>REGISTRAZIONE</h3>

<div>
  <form action="/insert.php" method="POST">
    <label for="fname">Username</label>
    <input type="text" id="user" name="user" placeholder="user">

    <label for="lname">Password</label>
    <input type="password" id="passw" name="passw" placeholder="password">
    <input type="button" onclick="showPwd()" value="Mostra password">
    <script>
          function showPwd() {
            var input = document.getElementById('passw');
            if (input.type === "password") {
              input.type = "text";
            } else {
              input.type = "password";
            }
          }
    </script>
  </br>
    <label for="lname">Nome</label>
    <input type="text" id="nome" name="nome" placeholder="nome">

    <label for="lname">Cognome</label>
    <input type="text" id="cognome" name="cognome" placeholder="cognome">

    <label for="lname">Eta</label>
        </br>
    <input type="number" id="eta" name="eta" min="10" max="100">

          
    </br>
        </br>
       <label for="lname">indirizzo</label>
    <input type="text" id="indirizzo" name="cognome" placeholder="cognome">

    
    <input type="submit" value="REGISTRATI">
  </form>
</div>

</body>
</html>