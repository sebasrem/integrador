<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo1.png" type="image/x-icon">
    <title>Proyecto-Integrador</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Blinker:wght@300;400;600;700&family=Poppins:wght@200;300;400;500;600;700;800&display=swap');
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    }

    a{
        text-decoration: none;
        color: black;
    }

    a:hover{
        color: red;
    }    

    .nav{
        display: flex;
        justify-content: space-between;
        height: 50px;
        margin-top: 1%;
    }
    .nav > li:hover{
        color: red;
    }
    .nav > li{
        list-style: none;
        cursor: pointer;
        padding: 1%;
    }

    .nav > li:nth-child(2){
        font-weight: 600;

        
    }
    .nav > li:nth-child(3){
        font-weight: 600;       
    }

    .nav > li:nth-child(6){
        font-size: 20px;
        color: gray; 

    }
    .nav > li:nth-child(6):hover{
        color: red;
    }
    .search{   
        width: 90%;
        position: relative;
        padding: 1%;
        
    }
    .search > input{
        
        border: 0;
        width: 100%;
        height: 40px;
        border-radius: 20px;
        margin-top: -5px;
        padding: 1%;
        background-color: rgba(128, 128, 128, 0.212);
        
    }
    .search > input:focus{
        outline: none;
    }
    .profile img{
        object-fit: cover;

        border-radius: 50%;
    }
/* <!-- --------------------nav End -------------------- --> */

    .contenedor {
    display:flex;
    flex-direction: row;
    min-height:100%;
    }

    .contenedor > div {
    display:flex;
    flex: 1;
    }


    .container{
        width: 100%;
        display: grid;
        grid-template-columns: repeat(auto-fill,250px);
        grid-template-rows: auto;
        justify-content: center;
        column-gap: 15px;
        /* gap: 1%; */
        /* margin: 2%; */

    }
    .container > div{
        padding: 0;
        margin: 15px 10px;
        border-radius: 50px;

    }
    .card > iframe{
        border-radius:25px ;
    }
    .container  img{
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50px;
    }

    .card_small img {
        -webkit-transition:all .9s ease;
        -moz-transition:all .9s ease;
        -o-transition:all .9s ease;
        -ms-transition:all .9s ease;
        width:80%;
    }

    .card_small:hover img {
        -webkit-transform:scale(1.25);
        -moz-transform:scale(1.25);
        -ms-transform:scale(1.25);
        -o-transform:scale(1.25);
        transform:scale(1.25);
    }

    .card_small{
        grid-row-end: span 26;
        width:300px;
        height:180px;
        overflow:hidden;
    }

    .imagen{
        padding: 0;
        margin: 15px 0 0 40px;
        border-radius: 20px;
        width: 350px;
        height: 350px;
        object-fit: cover;
    }

    .file-input-container {
    position: relative;
    display: grid;
    }

    .custom-file-button {
    background-color: #c12929ed;
    color: white;
    padding: 10px 20px;
    margin: 10px 0 0 40px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    }

    .custom-file-input {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    cursor: pointer;
    }


    


    @media all and(min-width: 421px) and (max-width: 768px){
        .container{
            grid-template-columns: repeat(auto-fill,200px);
        }

        .imagen{
            grid-template-columns: repeat(auto-fill,200px);
        }

        .search{
            display: none;
        }
        .nav > li:nth-child(2){
            font-weight: 500;
            font-size: 15px;
            
        }
    }

    @media all and (min-width:50px) and (max-width: 420px){
        .container{
            grid-template-columns: repeat(auto-fill,150px);
        }
        .container > div{
            padding: 0;
            margin: 8px 5px;
            border-radius: 20px;
        
        }
        .nav{
            padding: 2%;
        }
        .search > input{
            /* display: none; */
            padding: 3%;
        }
        .nav > li>img{
            width: 30px;
            height: 30px;
            
        }
        .nav > li {
            font-size: 12px;
            
        }
        .nav > li i{
            display: none;
            
        }
        .nav > li:nth-child(2){
            display: none;
            
        }
        .nav > li:nth-child(3){
            display: none;
            
        }
        .card > iframe{
            border-radius:25px ;
        }
    }


    </style>
</head>
<body>
    <div class="nav">
        <li><a href="perfil.php"><img src="logo1.png" alt="logo" width="25" height="25"></li></a>
        <li><a href="pagina_principal.php">Inicio</li></a>
        <li class="search"><input type="search" placeholder="Buscar"></li>
        <li class="profile"><img src="usuario.jpg" alt="profile" width="30" height="30"></li>
    </div>
    <div class="contenedor">
        <div class="fila0">
            <div class="container">
                <div class="card_small">
                    <img src="https://i.pinimg.com/236x/2f/ff/fa/2ffffa05fc292749bdd5a51be8de22c0.jpg" alt="">
                </div>
                <div class="card_small">
                    <img src="https://i.pinimg.com/236x/69/97/11/69971190edaeb579eddc01b1e533028c.jpg" alt="">
                </div>
                <div class="card_small">
                    <img src="https://i.pinimg.com/236x/6a/8d/15/6a8d1557432b61937e5ec5ad795423f8.jpg" alt="">
                </div>
                <div class="card_small">
                    <img src="https://i.pinimg.com/236x/6a/8d/15/6a8d1557432b61937e5ec5ad795423f8.jpg" alt="">
                </div>
            </div>
        </div> 
        <div class="fila1">
                <div>
                    <img class="imagen" src="usuario.jpg" alt="">
                    <div class="file-input-container">
                        <button class="custom-file-button">Seleccionar archivo</button>
                        <input type="file" class="custom-file-input" id="customFile">
                    </div>  
                </div>       
        </div>
    </div>
</body>
</html>