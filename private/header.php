<style>
    @media screen and (max-width:768px){
        .left{
            margin: 0 auto !important;
        }
        
        .right{
            width: 100%!important;
            flex-wrap: wrap;
        }
        .right li{
            width: 100%!important;
            float: none!important;
        }

        .rigth li a{
            width: 100%!important;
            text-align: center!important;
        }

        .center a {
            width: 100%!important;
            margin: 10px 0px 10px 0px!important;
            text-align: center!important;
        }

        .center a.user{
            margin: 10px 0 auto !important;
        }

        .center span{
            margin: 0 auto !important;
            width: 100% !important;
        }
    }
</style>
<div class="center">
    <div class="left">
        <a href="./posts.php"> <img src="../favicon/símbolo.png" alt="Interescolare" > </a>
    </div>
    <div class="right">
        <li><a href="./cadastrar.php">Cadastrar evento</a></li>
        <li><a href="./conversas.php">Conversas</a></li>  
        <li><a href="./contact.php">Contato</a></li>
    </div>
    <span><li class="deslogar"><a href="../eBugBounty/">Bounty</a></li></span>
    <a class="user" href="./user.php" style="margin-left: 20px;"><img src="./upload/download.png" height="60" width="60" style="border-radius: 50px;"></a>
</div>