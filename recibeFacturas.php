<?php 

    session_start();

    function logout() {
      $_SESSION['usuario'] = NULL;
      session_destroy();
      header("Location: login.php ");
    }

    if(
      isset($_FILES['pdf-upload']) && $_FILES['pdf-upload'] != null && $_SESSION['usuario'] != '' &&
      isset($_FILES['xml-upload']) && $_FILES['xml-upload'] != null && $_SESSION['usuario'] != ''
    ) {

      $xml = simplexml_load_file($_FILES['xml-upload']['tmp_name']);
      $ns = $xml->getNamespaces(true);
      $xml->registerXPathNamespace('cfdi', $ns['cfdi']);
      $xml->registerXPathNamespace('tfd', $ns['tfd']);
      $xml->registerXPathNamespace('advans', $ns['advans']);
      $xml->registerXPathNamespace('xsi', $ns['xsi']);

      $factura = [];

      echo '<pre>';
    
      echo '<h2>XML DATA</h2>';
      //EMPIEZO A LEER LA INFORMACION DEL CFDI E IMPRIMIRLA 
      echo '<h2>Comprobante</h2>';
      foreach ($xml->xpath('//cfdi:Comprobante') as $cfdiComprobante){
        // Ver los datos que contiene en Comprobante
        var_dump($cfdiComprobante);

        // Insertar los datos al arreglo
        $factura['fecha_emision'] = strval($cfdiComprobante['Fecha']);
        $factura['serie_folio'] = $cfdiComprobante['Serie'] . '-' . $cfdiComprobante['Folio'];
        $factura['total'] = strval($cfdiComprobante['Total']);
      }

      echo '<h2>Emisor</h2>';
      foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Emisor') as $Emisor){ 
        echo $Emisor['Nombre'];
        echo "<br />";
        echo $Emisor['Rfc'];
        echo "<br />";
        echo $Emisor['UsoCFDI'];
        echo "<br />";
      }

      echo '<h2>Receptor</h2>';
      foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Receptor') as $Receptor){
        // RFC receptor
        echo $Receptor['Rfc'];
        echo "<br />";
        // Nombre receptor
        echo $Receptor['Nombre'];
        echo "<br />";
      }

      echo '<h2>Conceptos</h2>';
      var_dump($xml->xpath('//cfdi:Comprobante//cfdi:Conceptos//cfdi:Concepto'));
      foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Conceptos//cfdi:Concepto') as $Concepto){
        echo $Concepto['Cantidad'];
        echo "<br />";
        echo $Concepto['ClaveProdServ'];
        echo "<br />";
        echo $Concepto['ClaveUnidad'];
        echo "<br />";
        echo $Concepto['Descripcion'];
        echo "<br />";
        // Subtotal
        echo $Concepto['Importe'];
        echo "<br />";
        echo $Concepto['NoIdentificacion'];
        echo "<br />";
        echo $Concepto['Unidad'];
        echo "<br />";
        echo $Concepto['ValorUnitario'];
        echo "<br />";
      }

      echo '<h2>Impuestos - Total</h2>';
      foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Impuestos') as $Impuestos){ 
        // Imp. Trasladados
        echo $Impuestos['TotalImpuestosTrasladados'];
        echo "<br />";
      }

      echo '<h2>Impuestos - Traslados</h2>';
      foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Impuestos//cfdi:Traslados//cfdi:Traslado') as $Traslado){ 
        echo $Traslado['Base'];
        echo "<br />";
        echo $Traslado['Importe'];
        echo "<br />";
        echo $Traslado['Impuesto']; 
        echo "<br />";
        echo $Traslado['TasaOCuota']; 
        echo "<br />";
        echo $Traslado['TipoFactor']; 
        echo "<br />";
      }

      echo '<h2>Timbre Fiscal</h2>';
      foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Complemento//tfd:TimbreFiscalDigital') as $tfd) {
        echo $tfd['Version'];
        echo "<br />";
        echo $tfd['FechaTimbrado'];
        echo "<br />";
        echo $tfd['SelloCFD'];
        echo "<br />";
        echo $tfd['UUID'];
        echo "<br />";
        echo $tfd['NoCertificadoSAT'];
        echo "<br />";
        echo $tfd['RfcProvCertif'];
        echo "<br />";
        echo $tfd['SelloSAT'];
        echo "<br />";
      }

      echo '<h2>Adicionales</h2>';
      foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Addenda//advans:Adicionales') as $Adicional){ 
        echo $Adicional['Version'];
        echo "<br />";
        echo $Adicional['InformacionAdicional'];
        echo "<br />";
        echo $Adicional['ReceptorDireccion'];
        echo "<br />";
        echo $Adicional['EmisorDireccion']; 
        echo "<br />";
     } 

      print "</pre>";

      die();
    } else {
      header('location: formFactura.php');
    }

    if(isset($_SESSION['usuario']) && $_SESSION['usuario'] != null && $_SESSION['usuario'] != ''){
      header('location: home.php');
      die();
    }else{
      header('location: login.php');
      die();
    }


?>