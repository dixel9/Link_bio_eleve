<?php

    if(isset($_POST['submit']))
    {
    //    print_r($_POST['FIRST_NAME']);
    //    print_r($_POST['EMAIL']);

    include_once('config.php');

    $FIRST_NAME = $_POST['FIRST_NAME'];
    $EMAIL = $_POST['EMAIL'];

    $result = mysqli_query($conexao, "INSERT INTO formulario_eleve_links(FIRST_NAME,EMAIL) VALUES ('$FIRST_NAME','$EMAIL')");
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Eleve Links</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/Logo_Eleve_32.png" type="image/x-icon">
    <style type="text/css">
        
        @import url('https://fonts.googleapis.com/css2?family=Bowlby+One&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap');

        .bowlby-one-regular {
            font-family: "Bowlby One", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .merriweather-light {
            font-family: "Merriweather", serif;
            font-weight: 300;
            font-style: normal;
        }

            .merriweather-regular {
            font-family: "Merriweather", serif;
            font-weight: 400;
            font-style: normal;
        }

            .merriweather-bold {
            font-family: "Merriweather", serif;
            font-weight: 700;
            font-style: normal;
        }

            .merriweather-black {
            font-family: "Merriweather", serif;
            font-weight: 900;
            font-style: normal;
        }

            .merriweather-light-italic {
            font-family: "Merriweather", serif;
            font-weight: 300;
            font-style: italic;
        }

            .merriweather-regular-italic {
            font-family: "Merriweather", serif;
            font-weight: 400;
            font-style: italic;
        }

            .merriweather-bold-italic {
            font-family: "Merriweather", serif;
            font-weight: 700;
            font-style: italic;
        }

            .merriweather-black-italic {
            font-family: "Merriweather", serif;
            font-weight: 900;
            font-style: italic;
        }


        body {
            background-color: #B23215;
            display: flex;
            background-image: url(img/background.png) ;
            background-position: bottom;
            background-repeat: no-repeat;
            background-size: contain;
            size: 100vw;
        }

        legend {
            text-align: center;
            color: #F3D4BF;
            font-family:"Merriweather",Arial,Helvetica, sans-serif;
            font-weight: 500;
            font-size: 24pt;
            margin-top: 0.6rem;
        }

        p {
            text-align: center;
            color: #F3D4BF;
            font-family:"Merriweather",Arial,Helvetica, sans-serif;
            font-weight: 300;
            font-size: 12pt;
            margin-top: 1.8rem;
            line-height: 144%;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 100%;
            margin: 0 auto;
        }

        label {
            color: #F3D4BF;
            font-family:"Merriweather",Arial,Helvetica, sans-serif;
            font-weight: 500;
            font-size: 14pt;
            width: 100%;
        }

        input,
        select,
        textarea {
            font-family:"Merriweather",Arial,Helvetica, sans-serif;
            font-weight: 300;
            color: #F3D4BF;
            width: 100%;
            padding: 0.5rem;
            border: 1px;
            border-color: #F3D4BF;
            border-bottom-style: solid;
            font-size: 12pt;
            margin-top: 0.2rem;
            outline: none;
        }
        input,
        select {
            margin-bottom: 0.5rem;
        }

        button {
            padding: 1rem;
            border: 4px solid #1F180F;
            border-radius: 0.3rem;
            background-image: linear-gradient(to right ,#E92124, #FEBA01, #008F38 );
            color: #1F180F;
            box-shadow: #1F180F;
            font-size: 1.2rem;
            cursor: pointer;
            max-width: 300px;
            min-width: 200px;
            font-weight: 700;
            font-family:"Merriweather",Arial,Helvetica, sans-serif;
            text-align: center !important;
            margin-left: 30px;
            margin-right: 30px;
        }


        /* Targeting retina displays (typically iOS devices) */
        @media only screen and (-webkit-min-device-pixel-ratio: 2) {

        }


        fieldset {
            border: none;
        }

        input::placeholder {
            color:#F3D4BF ;
        }

        input[type=submit] {
            padding: 0.9rem;
            padding-left: 10%;
            padding-right: 10%;
            border: 4px solid #1F180F;
            border-radius: 0.3rem;
            background-image: linear-gradient(to right ,#E92124, #FEBA01, #008F38 );
            color: #1F180F;
            box-shadow: #1F180F;
            font-size: 1.2rem;
            cursor: pointer;
            margin-top:1.8rem;
            margin-bottom:1.8rem;
            max-width: 300px;
            font-weight: 700;
            font-family:"Merriweather",Arial,Helvetica, sans-serif;
            text-align: center !important;
        }

        input[type="email"] {
			color: #FFFFFF;
			transition: 0.8s;
			transition-delay: 0.2s;
		}

		input[type="email"]:focus,
		input[type="email"]:valid {
			color: #ffffff;
            transition-timing-function: ease-in-out;
		}


        .custom-checkbox input {
        display: none;
        justify-content: center !important;
        }

        .custom-checkbox input + label:before {
        content: '';
        display: inline-block ;
        flex-direction: row-reverse;
        justify-content: center !important;
        width: 1.125rem;
        height: 1.125rem;
        border-radius: 0.25rem;
        background-color: white;
        border: 0.063rem solid #ffffff;
        vertical-align: middle;
        margin-right: 0.5rem;
        margin-bottom: 0.188rem;
        cursor: pointer;
        }

        .custom-checkbox input:checked + label:before {
        background-image: url("data:image/svg+xml,%0A%3Csvg xmlns='http://www.w3.org/2000/svg' width='18' height='18' viewBox='0 0 10 10'%3E%3Cg class='nc-icon-wrapper' stroke-width='1' fill='%23555555'%3E%3Cpath fill='none' stroke='%23FFFFFF' stroke-linecap='round' stroke-linejoin='round' stroke-miterlimit='10' data-cap='butt' d='M2.83 4.72l1.58 1.58 2.83-2.83'/%3E%3C/g%3E%3C/svg%3E");
        background-color: #008F38;
        background-position: center;
        border: none;
        padding: 0.063rem;
        justify-content: center !important;
        }

        .display-flex {
            display: inline-block !important;
            flex-direction: column !important;
            justify-content: center !important;
        }

        .lowercase {
            text-transform: lowercase;
        }
        
        .container {
            max-width: 800px;
            flex-direction: column;
            gap: 0.5rem;
            width: 100%;
            margin: 0 auto;
            align-items: center;
        }

        .containerUm {
            max-width: 800px;
            display: flex;
            width: 100%;
            margin: 0 auto;
        }

        .logo {
            max-width: 800px;
            flex-direction: column;
            gap: 0.5rem;
            width: 100%;
            margin: 0;
        }

        .image {
            text-align: center !important;
                width: 170px;
                margin-bottom: 3.1rem !important;
                margin-top: 1.2rem !important;
        }

        .text {
            margin-bottom: 3.1rem !important;
            font-weight: 300 !important;
        }

        .smalTxt {
            font-family:"Merriweather",Arial,Helvetica, sans-serif;
            font-weight: 300;
            color: #F3D4BF;
            font-size: small;
            line-height:12pt;
        }

        .smalTxtDois {
            font-family:"Merriweather",Arial,Helvetica, sans-serif;
            font-weight: 300;
            color: #008F38;
            font-size: small;
            line-height:12pt;
        }

        .hide {
        display: none;
        }

		.input-box {
			position: relative;
		}

		.input-user {
			background: none;
			width:100%;
		}

        .input-box {
            position: relative;
        } 
        
        .navibar {
            
        }

        /*Tablets e telefones Largos*/
        @media only screen and (min-width: 768px) {

        }

        /*Tablets e telefones em Landscape*/
        @media only screen and (max-width: 768px) {

            legend {
                font-size: 20pt;
            }

            p {
                margin-top: -1.2rem;
            }

            .image {
                text-align: center !important;
                width: 170px;
                margin-bottom: 3.1rem !important;
                margin-top: 1.2rem !important;
            }

            .container {
                display: flex;
            }

            .containerUm {
                margin-right: 0px;
            }

            .logo {
                align-items: center;
                display: inline-block;
            }

            .text {
            margin-bottom: 0px !important;
            font-weight: 300 !important;
            }

            .travaWidth {
                margin-right: 1rem;
            }
        }

        /*Notebooks e Desktops*/
        @media only screen and (max-width: 1200px) {

        }
    </style>
</head>
<body>
    
    <div class="containerUm">
        <div class="container">
            <fieldset>

                <div class="container image">
                    <img src="img/Logo Eleve.png" alt="Eleve" title="Eleve" width="100%">
                </div>

                <div  class="navibar">
                    <div style="text-align: center;">
                        <a target="_blank" href="https://www.sympla.com.br/rock--reggae-sessions__2749091">
                            <button>
                                <img src="img/Logo_Eleve_32.png"/>&nbsp;&nbsp;&nbsp;&nbsp;Ingressos
                            </button>
                        </a>
                    </div>
                    <br/>
                    <div style="text-align: center;">
                        <a target="_blank" href="https://www.instagram.com/elevereggae/">
                            <button>
                                <img src="img/Instagram.png"/>&nbsp;&nbsp;&nbsp;&nbsp;Instagram
                            </button>
                        </a>
                    </div>
                    <!--
                    <br/>
                    <div style="text-align: center;">
                        <a target="_blank" href="#">
                            <button>
                                <img src="img/facebook.png"/>&nbsp;&nbsp;&nbsp;&nbsp;Facebook
                            </button>
                        </a>
                        </div>
                    <br/>
                    <div style="text-align: center;">
                        <a target="_blank" href="#">
                            <button>
                                <img src="img/spotify.png"/>&nbsp;&nbsp;&nbsp;&nbsp;Spotify
                            </button>
                        </a>
                    </div>
                    <br/>
                    <div style="text-align: center;">
                        <a target="_blank" href="#">
                            <button>
                                <img src="img/youtube.png"/>&nbsp;&nbsp;&nbsp;&nbsp;Youtube
                            </button>
                        </a>
                    </div>
                    <br/>
                    -->
                </div>
            </fieldset>
            
            <form method="POST" action="eleve_links.php" id="form" autocomplete="on">        

                <fieldset>

                    <div>

                        <legend>Ingressos Promocionais e mais!</legend>
                        <br/>
                        <br/>
                        <div class="text">
                            <p style="text-align: center;">Olá, gostaria de receber notícias sobre ingressos promocionais, nossa agenda e mais mensalmente?<br/>É só se increver na nossa newsletter mensal.</p>
                        </div>
						<br/>

                        <div class="travaWidth input-box">
							<input class="input-user" id="firstname" type="text" name="FIRST_NAME" required>
                            <label class="label-input" for="firstname">Nome <span style="color: #ffffff;">*</span></label>
                        </div>

                        <br/>
						<br/>

                        <div class="travaWidth input-box">
							<input id="email" class="lowercase input-user" type="email" name="EMAIL" required>
                            <label class="label-input" for="email">Email <span style="color: #ffffff;">*</span></label>
                        </div>
                    </div>

                </fieldset>

                <fieldset>

                    <div class="custom-checkbox" style="margin-top: 30px; margin-bottom: 15px;">
                        <input id="optIn" type="checkbox" required>
                        <label for="optIn" style="color: #ffffff;font-size: 18px;font-weight: 300;line-height: 0px;"><span style="line-height: 144%;">Aceito receber comunicações da banda Eleve.</span><span style="color: #ffffff;">*</span></label></label>
                    </div>


                    <div style="text-align: center;">
                        <input type="submit" id="submit" name="submit" value="ENVIAR"  >
                    </div>

                </fieldset>

            </form>

        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.8.0/pikaday.min.js"></script>
    <script type="text/javascript">

        // Função para aplicar a classe 'active' no label, caso o select tenha valor
        function checkAndUpdateLabel(select, label) {
            if (select.value) {
                label.classList.add('active');
            } else {
                label.classList.remove('active');
            }
        }

        // Inicializa quando o DOM estiver carregado
        document.addEventListener('DOMContentLoaded', init);

        //Função para validar email
        function isEmailValid(email) {

            //cria uma regex para validar o padrão email
            const emailRegex = new RegExp(
                //usuario12@host.com.br
                /^[a-zA-Z0-9.-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/
            );

            if(emailRegex.test(email)) {
                return true;
            }

            return false;
        }

    
    </script>
</body>
</html>
