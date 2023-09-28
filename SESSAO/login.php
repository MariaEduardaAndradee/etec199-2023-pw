<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #545454;
            margin: 0;
            padding: 0;
            
        }


        
        form {
            --bg-light: #efefef;
            --bg-dark: #707070;
            --clr: #58BC82;
            --clr-alpha: #9c9c9c60;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
            width: 400px;
            margin-left: 33%;
            margin-top: 20%;
            }

            .form .input-span {
            width: 300px;
            display: flex;
            flex-direction: column;
            gap: .5rem;
            }

            form input[type="text"],
            form input[type="senha"] {
            border-radius: 0.5rem;
            padding: 1rem 0.75rem;
            width: 100%;
            border: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            background-color: var(--clr-alpha);
            outline: 2px solid var(--bg-dark);
            }

            form input[type="text"]:focus,
            form input[type="senha"]:focus {
            outline: 2px solid var(--clr);
            }

            .label {
            align-self: flex-start;
            color: var(--clr);
            font-weight: 600;
            }

            form .submit {
            padding: 1rem 0.75rem;
            width: 300px;
            display:flex;
            align-items: center;
            gap: 0.5rem;
            border-radius: 3rem;
            background-color: var(--bg-dark);
            color: var(--bg-light);
            border: none;
            cursor: pointer;
            transition: all 300ms;
            font-weight: 600;
            font-size: .9rem;
            margin-top:5%;
            }

            form .submit:hover {
            background-color: var(--clr);
            color: var(--bg-dark);
            }

            .span {
            text-decoration: none;
            color: var(--bg-dark);
            }

            .span a {
            color: var(--clr);
            }


    </style>

</head>
<body>

        <div class="arrumando">

                <form class="form" action="validar_login.php" method="post">
                    <span class="input-span">
                    <label for="usuario" class="label">Usuario</label>
                    <input placeholder="usuario" type="text" id="usuario" name="usuario"></span>

                    <span class="input-span">
                    <label for="senha" class="label">Senha</label>
                    <input placeholder="senha" type="senha" id="senha" name="senha"></span>

                    <input class="submit" type="submit" value="Enviar">

                </form>
        </div>

</body>
</html>