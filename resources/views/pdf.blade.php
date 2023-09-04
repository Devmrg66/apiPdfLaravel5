<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <style type="text/css">
        @page {
            margin-top: 80px !important;
            margin-bottom: 50px !important;
            max: height 800px;
        }
        * { padding: 0; margin: 0; }
        @font-face {
            font-family: "source_sans_proregular";           
            src: local("Source Sans Pro"), url("fonts/sourcesans/sourcesanspro-regular-webfont.ttf") format("truetype");
            font-weight: light;
            font-style: italic;
        }
        body {
            margin-top: 30px;
            margin-bottom: 10px;
            margin-right: 100px;
            margin-left: 30px;
            font-family: "source_sans_proregular", "Calibri", "Candara", "Segoe", "Segoe" "UI", "Optima", Arial, sans-serif;
            opacity: 1;
            -webkit-print-color-adjust: exact !important;
            -moz-print-color-adjust: exact !important;
            -ms-print-color-adjust: exact !important;
            print-color-adjust: exact !important;
        }

        .header-info {
            margin-left: 25%;
            font-size: 10pt;
        }

        .footer-info {
            position: absolute;
            bottom: 0px;
            left: 190px;
            width: 100%;
            font-size: 9pt;
        }

        .main {
            font-size: 12pt;
            text-align: justify;
        }

        .main p {
            font-size: 9pt;
        }

        .TablaDetallesEntrada {
            padding-top: 25px;
            max-width: 130%;
            text-align: left;
            font-size: 10pt;
            word-wrap: break-word; 
            word-break: break-all;
        }

        table.TablaDetallesEntrada tr td{
            
        }
        .titulo{
            padding-top: 8px;
            word-wrap: break-word; 
            word-break: break-all;
            margin-left: 5px;
            margin-top: 2px;
            margin-bottom: 2px;
            column-span: 2;
        }

        .TablaDetallesMercancias {
            /* page-break-inside: avoid; */
            margin-top: 10px;
            width: 112%;
            border-collapse: collapse; 
            max-height: 90%
            /* table-layout: fixed;  */
        } 

        .DetalleMercancia {
            font-size: 7pt; 
            text-align: center;
            word-wrap: break-word; 
            word-break: break-all;
        } 


        table.TablaDetallesMercancias tbody tr td {
            word-wrap: break-word; 
            word-break: break-all;
            padding-top: 6px;
            max-width: 5px;
            border-collapse: collapse; 
        }

        table.TablaDetallesMercancias thead tr th {
            font-size: 7pt;
            text-align: center;
            word-wrap: break-word; 
            white-space: normal;
            min-width: 1em;
            max-width: 1em;
        }

        .CeldaContenido {
            font-size: 9pt;
            vertical-align: top;
            padding-top: 0;
        }
        td.CeldaNota  {
            font-size: 9pt;
            vertical-align: top; 
            padding-top: 0; 
            width: 10em;
        }
        .tablaNota {
            padding-top: 10px;
        }
        #watermark {
            margin-top: -80px !important;
            position: fixed;
            top:   0px;
            left:  0px;
            /** The width and height may change 
                according to the dimensions of your letterhead
            **/
            width:    790px;
            height:   950px;

            /** Your watermark should be behind every content**/
            z-index:  -1000;
        }

        .encabezado-pagina-adicional {
            margin-top: 30px; /* Ajusta la cantidad de espacio según tus necesidades */
        }
    </style>
</head>
<body >
    <div id="watermark">
        <img src="https://refis360movildev.s3.us-west-1.amazonaws.com/PlantillasImg/PlantillaPDF_1.png" height="100%" width="100%" />
    </div>

    <div style="text-align: center; font-size: 10pt;"><strong>Detalles de Carga</strong></div>
    
    <div class='main' >
        <table class='TablaDetallesEntrada'>
            <tr>
                <td class="titulo"><strong>Entrada</strong></td>
                <td style='color : red;'>{{$entrada}}</td>
                <td class="titulo"><strong>Referencia</strong></td>
                <td>{{$refenrencia}}</td>
                <td class="titulo"><strong>F. de Entrada</strong></td>
                <td>{{$fechaEntrada}}</td>
            </tr>
            <tr>
                <td class="titulo"><strong>Contenedor</strong></td>
                <td>{{$Contenedor}}</td>
                <td class="titulo"><strong>&Aacute;rea</strong></td>
                <td>{{$area}}</td>
                <td class="titulo"><strong>Sello</strong></td>
            </tr>
            <tr>
                <td class="titulo"><strong>Buque(Viaje)</strong></td>
                <td>{{$buqueViaje}}</td>
                <td class="titulo"><strong>F. Arribo</strong></td>
                <td>{{$fechaArribo}}</td>
            </tr>
            <tr>
                <td class="titulo"><strong>Puerto de <br> Procedencia</strong></td>
                <td>{{$puertoProcedencia}}</td>
                <td class="titulo"><strong>L&iacute;nea Naviera</strong></td>
                <td>{{$lineaNaviera}}</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="titulo"><strong>Patente</strong></td>
                <td>{{$patente}}</td>
                <td class="titulo"><strong>Agencia Aduanal</strong></td>
                <td>{{$agenciaAduanal}}</td>
            </tr>
            <tr>
                <td class="titulo"><strong>Manifiesto</strong></td>
                <td>{{$Manifiesto}}</td>
                <td class="titulo"><strong>BL</strong></td>
                <td>{{$BL}}</td>
            </tr>
            <tr>
                <td><strong>F. Inicio <br> desconsolidación</strong></td>
                <td>{{$fehcaInicioD}}</td>
                <td><strong>F. Término <br> desconsolidación</strong></td>
                <td>{{$fTerminoD}}</td>
            </tr>
        </table>
    </div>

    <div class="main" >
        <table class="TablaDetallesMercancias" >
            <thead style="border-bottom: 2px solid; padding-top: 80px;">
                <tr>
                    <th>Entrada</th>
                    <th>HBL</th>
                    <th>Marca</th>
                    <th>Mercancia</th>
                    <th>Embalaje</th>
                    <th>Bultos</th>
                    <th>Peso</th>
                    <th>Volumen</th>
                    <th>Faltan</th>
                    <th>Sobran</th>
                    <th>Averiados</th>
                    <th>UN</th>
                    <th>IMDG</th>
                    <th>SGA</th>
                    <th>Obs.</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datosTabla as $detalle)
                <tr class="DetalleMercancia">
                    <td>{{ $detalle['Entrada'] }}</td>
                    <td>{{ $detalle['HBL'] }}</td>
                    <td>{{ $detalle['Marca'] }}</td>
                    <td>{{ $detalle['Mercancia'] }}</td>
                    <td>{{ $detalle['Embalaje'] }}</td>
                    <td>{{ $detalle['Bultos'] }}</td>
                    <td>{{ $detalle['Peso'] }}</td>
                    <td>{{ $detalle['Volumen'] }}</td>
                    <td>{{ $detalle['Faltan'] }}</td>
                    <td>{{ $detalle['Sobran'] }}</td>
                    <td>{{ $detalle['Averiados'] }}</td>
                    <td>{{ $detalle['UN'] }}</td>
                    <td>{{ $detalle['IMDG'] }}</td>
                    <td>{{ $detalle['SGA'] }}</td>
                    <td>{{ $detalle['Obs'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="main">
        <table class="tablaNota" >
            <tr>
                <td class='CeldaNota' nowrap style='word-wrap: break-word; word-break: break-all;'>
                    <div >
                        <p> <strong>Nota Importante:</strong> </p>
                    </div>
                </td>
                <td class='CeldaContenido'>
                    <div class='main'>
                        <p> Les pedimos realizar el examen previo de las mercancías amparadas en el presente documento
                            de conformidad con lo establecido en los art. 25 y 42 de la Ley Aduanera vigente, antes de
                            efectuar el despacho de aduanal de estas mercancías TAP LA JUNTA SA DE CV se deslinda de
                            cualquier responsabilidad derivada de las diferencias en las clases, tipo, cantidad, pesos y
                            medidas de mercancías depositados en el recinto fiscalizado y/o amparada con la presente
                            liberación. </p>
                        <p> *Clasificación de Averías: <strong>A</strong> – Daño solo embalaje; <strong>B</strong> –
                            Daño a embalaje y posible daño de mercancía; <strong>C</strong> – Daño a embalaje y
                            mercancía. </p>
                    </div>
                </td>
            </tr>
        </table>
    </div>
<!-- 
    <div class="footer-info"> Comercializadora la Junta, S.A. de C.V., Todos los Derechos Reservados </div> -->
</body>
</html>
