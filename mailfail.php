
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body class="bg-white">
    <div class="container-fluid">
        <div class="container d-flex justify-content-center align-items-center p-5 mt-5">
        
  <form class="form" method="post" action="">
      <p class="login">failed</p>
      <div class="inputContainer">
        <input type="submit" name="submit" value="next" class="submit">
        <input placeholder="Enter OTP" type="number" name="otp" class="fInput email">
        
      </div>
      
      <div class="con">
        <p>don't have account?&nbsp;</p>
        <a href="#"> sign in</a>
      </div>
    </form>

        </div>
    </div>
    
</body>
<style>
    .form {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  position: relative;
  width: 400px;
  padding: 50px;
  height: 500px;
  background-color: rgb(0, 0, 0);
  border-radius: 10px;
}

.inputContainer {
  background-color: rgba(255, 0, 0, 0);
  position: relative;
  width: 100%;
  height: 50px;
}

.fInput {
  width: 100%;
  height: 50px;
  border-radius: 3px;
  border: 1px solid rgb(48, 45, 45);
  background-color: black;
  padding: 10px;
  color: white;
  transition: .1s;
  position: absolute;
}

.fInput:focus {
  border: 1px rgb(0, 136, 255) solid;
  outline: none;
}

.fInput:focus::placeholder {
  color: rgb(0, 136, 255);
}

.fInput.email {
  z-index: 1;
}

.fInput.pass:focus {
  z-index: 2;
}

.submit {
  width: 100%;
  top: 60px;
  padding: 7px 0;
  border-radius: 20px;
  cursor: pointer;
  transition: .3s;
  position: absolute;
}

.submit:focus + .email {
  display: none;
}

.login {
  width: 100%;
  color: white;
  font-family: sans-serif;
  font-weight: 700;
  font-size: 20px;
  padding: 30px 0;
  position: absolute;
  top: 90px;
  left: 55px
}

.submit:hover {
  opacity: .9;
}

.forget {
  width: 100%;
  background-color: transparent;
  color: white;
  border: 1PX solid rgba(255, 255, 255, 0.151);
  margin-top: 15px;
  padding: 7px 0;
  border-radius: 20px;
  cursor: pointer;
  transition: .3s;
  margin-top: 50px;
}

.forget:hover {
  background-color: rgba(255, 255, 255, 0.151);
}

.con {
  display: flex;
  justify-content: flex-start;
  width: 100%;
  margin-top: 30px;
  color: rgb(111, 103, 103);
  font-size: 13px;
  font-family: sans-serif;
  background-color: rgba(255, 0, 0, 0);
}

.con a {
  color: rgb(0, 136, 255);
}

</style>
</html>