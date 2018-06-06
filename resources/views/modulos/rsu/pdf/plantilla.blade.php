<html>
  <head>
    <title>PDF - STJ</title>
    <meta http-equiv="Content-Type" content="text/html;">
    <meta charset="utf-8">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

    <style>
      @page { margin: 120px 40px 85px 40px;/*ejes: arriba, derecha, abajo, izquierda*/}
      #header { position: fixed; left: 0px; top: -115px; right: 0px; height: 115px; /*background-color: blue;*/ }
      #footer { position: fixed; left: 0px; bottom: -90px; right: 0px; height: 50px; /*background-color: lightblue;*/ font-style: italic;}
      #footer .page:after { content: counter(page, upper-arabic); /*cambiar arabic por roman si se quiere numeros romanos*/ }

      /*Tablas*/
      .tth{font-size:16px;font-weight:normal;background:#e8edff; padding:8px;}
      .ttd{font-size:14px;padding: 8px;}
      .h-img{
        margin-top: 20px;
      }
      p{
        margin:5px;
        margin-left: 15px;
      }


    </style>
</head>
<body>
  <div id="header">
    <table width="100%">
      <tr align="left">
        <td><img src="plantilla/images/gallery/unheval-logo.png" height="70px" class="h-img" title="UNHEVAL"></td>
        <td align="center">
          <h3 style="font-size: 15px; margin-bottom:0;">UNIVERSIDAD NACIONAL "HERMILIO VALDIZÁN" - HUÁNUCO</h3>
          <p style="margin-bottom:0; font-size: 22px;"><b>VICERRECTORADO ACADÉMICO</b></p>
          <p style="font-size: 16px;margin-bottom:0;"><b>@yield('direccion')</b></p>
        </td>
      <td align="right"><img src="@yield('milogo')" height="60px;" class="h-img" title="Mi logo"></td>
      </tr>
    </table>
      <hr width="80%">
  </div>
  <div id="footer">
    <p class="page" style="border-top: 1px solid;" align="right">{{$date}}
    @for($i=0;$i<8;$i++)
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    @endfor
    Página</p>
  </div>

  <!-- CONTENIDO -->
  <div id="content" style="margin-left: 30px; margin-right: 30px;">

    <h2 align="center" style="font-size: 20px; font-family: fantasy;">@yield('titulo')</h2>
    @yield('contenido')
  </div>
  <!-- FIN CONTENIDO -->
  </body>
</html>