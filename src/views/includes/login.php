<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
     body {
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(45deg, rgba(26, 126, 192, 0.8), rgba(60, 153, 54, 0.8));
    }

    .box {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(0, 0, 0, 0.4);
        padding: 15px;
        border-radius: 15px;
        width: 20%;
        height: 60%;
        color: white;
    }

    fieldset {
        height: 535px;
        border-width: 3px;
        border-style: solid;
        border-image: linear-gradient(45deg, rgb(32, 151, 230), rgb(80, 200, 72)) 1;
    }

    legend {
        border-image: linear-gradient(45deg, rgb(32, 151, 230), rgb(80, 200, 72)) 1;
        padding: 10px;
        text-align: center;
        font-size: 30px;
        background-image: linear-gradient(45deg, rgb(32, 151, 230), rgb(80, 200, 72));
        border-radius: 8px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .inputBox {
        position: relative;
    }

    .inputUser {
        background: none;
        border: none;
        border-bottom: 1px solid white;
        outline: none;
        color: white;
        font-size: 15px;
        width: 100%;
        letter-spacing: 1.5px;
        transition: .5s;
    }

    .labelInput {
        position: absolute;
        top: 0px;
        left: 0px;
        pointer-events: none;
        transition: .5s;
    }

    .inputUser:focus ~ .labelInput,
    .inputUser:valid ~ .labelInput {
        top: -20px;
        font-size: 14px;
        background-image: linear-gradient(45deg, rgb(36, 168, 255), rgb(96, 234, 86));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-weight: bold;
    }

    .inputUser:focus,
    .inputUser:valid {
        border-bottom: 1px solid;
        border-image: linear-gradient(45deg, rgb(36, 168, 255), rgb(96, 234, 86)) 1 1;
        font-weight: bold;
    }

    #data_nascimento {
        border: none;
        padding: 8px;
        border-radius: 8px;
        outline: none;
        font-size: 15px;
    }

    #submit {
        background-image: linear-gradient(45deg, rgb(32, 151, 230), rgb(80, 200, 72));
        width: 100%;
        padding: 15px;
        border: none;
        border-radius: 10px;
        outline: none;
        color: white;
        font-size: 18px;
        cursor: pointer;
        font-weight: bold;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.9);
    }

    #submit:hover {
        background-image: linear-gradient(45deg, rgba(26, 126, 192), rgba(60, 153, 54));
    }

    .PasswordText{
        background-image: linear-gradient(45deg,  rgb(36, 168, 255), rgb(96, 234, 86));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-weight: bold;
        text-decoration: none;
    }

    .PasswordText:hover{
        color: rgb(91, 167, 244);
        text-decoration: underline;
    }

    .TypeUser{
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .UserType{
        background: none;
        border: none;
        border-bottom: 1px solid white;
        outline: none;
        color: white;
        font-size: 15px;
        letter-spacing: 1.5px;
        transition: .5s;
    }

    .Logo{
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 20px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
    }

    .Img{
        width: 110%;
    }

    .Acount{
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

</style>

</head>
<body>
  <div class="box">
    <fieldset>
        <legend><b>Tela de Login</b></legend>
        <br>
        <div class="Logo">
            <img src="logo.png" alt="">
        </div>  
        <br><br>

        <div class="inputBox">
            <input type="text" name="login" id="login" class="inputUser" onblur="BuscarUsuariosPorNome()" required>
            <label class="labelInput" for="login"><i style="margin-right: 5px;" class="fas fa-user"></i>Usuário</label>
        </div>
        <br><br>
        <div class="inputBox">
            <input type="password" name="senha" id="senha" class="inputUser" required>
            <label class="labelInput" for="senha"><i style="margin-right: 5px;" class="fas fa-lock"></i>Senha</label>
        </div>
        <br><br>
        <div class="TypeUser">
            <a href="#" class="PasswordText">Esqueci minha senha</a>
            <select class="UserType" name="tipo" id="tipo" tabindex="3">
                <option value="">Selecione</option>
            </select>
        </div>


        <br><br><br>
        <input type="submit" name="submit" id="submit">
        <br><br>
        <div class="Acount">
            <p>Não Tem Uma Conta ?</p> 
            <a href="#" class="PasswordText">Inscreva-se</a>
        </div>
    </fieldset>
</div>
</body>
</html>