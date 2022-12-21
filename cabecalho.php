<html>
    <head>
        <link href="./images/logo_fundo.png" rel="icon" type="image/logo_fundo.png"/>
        <script src="./images/scripts.js"></script>
        <title>Via Expressa - Provedor de Internet</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link href="./images/general.css" rel="stylesheet" type="text/css">
        <style type="text/css">
            <!--A:link{TEXT-DECORATION:none;}A:visited{TEXT-DECORATION:none;}A:hover{TEXT-DECORATION:underline;}-->
            </style>
        <link href="./images/estilo.css" rel="stylesheet" type="text/css"><style type="text/css">
            <!--.style1 {font-family: Geneva, Arial, Helvetica, sans-serif}
            .style2 {
                color: #0000A0;
                font-weight: bold;
            }
            .Estilo2 {
                font-weight: bold;
                font-size: 12px;
                color: #9B6819;
            }
            -->

        </style>
        <script language="JavaScript">
            function Abrir_ventana (pagina) {
                var opciones="toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=yes,width=950,height=400,top=100,left=240";
                window.open(pagina,"",opciones);
            }
            function popUprcc(URL) {
                day = new Date();
                id = day.getTime();
                eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=427,height=228 top=0,left=250');");
            }
            var myVar=setInterval(function(){myTimer()},1000);

            function myTimer()
            {
                var date=new Date();

                var d=date.toLocaleDateString();
                var t=date.toLocaleTimeString();
                document.getElementById("data-hr").innerHTML=d + " - " + t;
            }
        </script>

    </head>
    <body bgcolor="#000066"><!-- BEGIN WAYBACK TOOLBAR INSERT -->
<style type="text/css">
body {
  margin-top:0 !important;
  padding-top:0 !important;
  /*min-width:800px !important;*/
}
</style>
        <div id="fb-root"></div>
        <!--script facebook-->
        <script>
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//web.archive.org/web/20150808015130/http://connect.facebook.net/pt_BR/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <!--fim script facebook-->
        <!--CABECALHO-->
        <table style="margin: auto;" width="776px" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td width="259" height="96" valign="top">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0"><tr><td width="259" height="96">
                                <a href="./index.php" style="text-decoration: none;"><img title="Via Expressa" src="./images/logo.gif" style=" width: 264px; height: 96px; float: left; border : 0px;"> </a>
                            </td></tr>
                    </table>
                </td>
                <td width="511" valign="top">
                    <table width="519" border="0" cellpadding="0" cellspacing="0" bgcolor="#000099">
                        <!--DWLayoutTable-->
                        <tr>
                            <td width="17" rowspan="2" valign="top" bgcolor="#000099">
                                <div>
                                    <canvas style=" color: #4E2BC0;position: absolute;  margin-top: 86px;margin-left: -83px;" id="canvas" width="296" height="14"></canvas>
                                    <!--
                                    -->
                                </div>
                                <script language="javascript">
                                    var eixoX=-175;
                                    var eixoY=11;
                                    var ctx = document.getElementById('canvas').getContext("2d");
                                    var ctxelemento =document.getElementById('canvas');
                                    var intervalo;
                                    //desenha o círculo
                                    ctx.fillStyle="#4E2BC0";;
                                    var myVar=setInterval(function(){vai()},1000);
                                    function vai()
                                    {

                                        var date=new Date();

                                        var d=date.toLocaleDateString();
                                        var t=date.toLocaleTimeString();
                                        //ANDAR NO EIXO X
                                        eixoX +=5;
                                        limpar();
                                        ctx.font="11px Tahoma, Verdana, Arial, Times New Roman";
                                        ctx.fillText( "Via Expressa - "+ d + " - " + t, eixoX, eixoY);

                                        if (eixoX >=ctxelemento.width){
                                            eixoX =-175;
                                        }
                                        if(intervalo == null){
                                            intervalo = setInterval(vai, 400);
                                        }


                                    }
                                    function limpar(){
                                        ctx.clearRect(0,0,300,300);
                                    }



                                </script>

                                <div id="buscar">
                                    <form method="get" action="http://www.google.com/search">
                                        <a href="https://www.facebook.com/pages/Via-Expressa-Provedor-de-Internet/142765662595729" target="_blank">
                                        <img title="Facebook" src="./images/face.png" id="face"/>
                                        </a>

                                        <a href="http://www.google.com/" target="_blank" id="google">
                                            <img id="img_google" src="./images/google.png" alt="google" align="absmiddle"/></a>
                                        <input id="pesquisa_google" type="text" name="q" size="20" maxlength="255" value="">
                                        <input type="submit" name="btng" value="pesquisar" id="imput_pesquisa" formtarget="_blank">
                                    </form>
                                    <font face="Arial" size="1"></font>
                                </div>
                            </td>
                            <td width="183" height="17"></td>
                            <td width="311"></td>
                            <td width="1"></td>
                        </tr>
                        <tr>
                            <td colspan="2" rowspan="2" valign="top">
                        <center>
                            <a target="_blank" href="./https://www.facebook.com/pdolivro?fref=ts"><img title="Ponto do Livro" src="./images/pl-cabecalho.gif" border="0"></a>
                        </center>

                </td>
                <td height="13"></td>
            </tr>
            <tr>
                <td height="34"></td>
                <td></td>
            </tr>
            <tr>
                <td height="5"></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td height="16"></td>
                <td></td>
                <td valign="top" bgcolor="62DE68"><img style="width: 321px; height: 16px;" src="./images/barra5.gif" height="16"></td>
                <td></td>
            </tr>
            <tr>
                <td height="11" colspan="3" valign="top" bgcolor="#EBEBEB"><img src="./images/barra4.gif" width="521" height="11"></td>
                <td></td>
            </tr>
        </table>
    </td></tr>
<tr>
    <td height="6" colspan="2" valign="top"><img src="./images/barra7.gif" style="width: 100%;" height="6"></td>
</tr>
</table>
<!--FIM CABECALHO-->