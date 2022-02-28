<?php

require 'includes/config/database.php';

$db = conectarDB();


//Arreglo con mensajes de errores

$errores = [];

$RFC = '';
$RazonSocial = '';
$CorreoElectronico = '';
$RegimenFiscal = '';
$UsoCFDI = '';
$Calle = '';
$CP = '';
$Colonia = '';
$Ciudad = '';
$Estado = '';


//Ejecutar el codigo despues de que el usuario envia el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";

    $RFC = $_POST['RFC'];
    $RazonSocial = $_POST['Razonsocial'];
    $CorreoElectronico = $_POST['Correoelectronico'];
    $RegimenFiscal = $_POST['Regimenfiscal'];
    $UsoCFDI = $_POST['UsoCFDI'];
    $Calle = $_POST['calle'];
    $CP = $_POST['CP'];
    $Colonia = $_POST['colonia'];
    $Ciudad = $_POST['ciudad'];
    $Estado = $_POST['estado'];

    if (strlen($RFC) != 13) {
        $errores[] = "Debes añadir un RFC valido";
    }

    if (!$RazonSocial) {
        $errores[] = "Debes añadir una Razon Social";
    }

    if (!$CorreoElectronico) {
        $errores[] = "Ingresa tu correo electronico";
    }

    if (!$RegimenFiscal) {
        $errores[] = "Selecciona un Regimen Fiscal";
    }

    if (!$UsoCFDI) {
        $errores[] = "Selecciona un uso de CFDI";
    }

    if (!$Calle) {
        $errores[] = "Por favor ingresa una calle";
    }

    if (!$CP) {
        $errores[] = "Ingresa un Codigo Postal";
    }

    if (!$Colonia) {
        $errores[] = "Ingresa una Colonia";
    }

    if (!$Ciudad) {
        $errores[] = "Ingresa una Ciudad";
    }

    if (!$Estado) {
        $errores[] = "Selecciona un Estado";
    }


    // var_dump($errores);

    // exit;
    // revisar arreglo de errores vacios

    if (empty($errores)) {
        //insertar en la bd
        $query = "INSERT INTO Clientes VALUES('$RFC', '$RazonSocial', '$CorreoElectronico', '$RegimenFiscal', '$UsoCFDI', '$Calle', '$CP', '$Colonia', '$Ciudad', '$Estado'); ";

        // echo $query;

        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            // echo "Insertado Correctamente";
            echo '<script type="text/javascript">
        alert("Gracias por rellenar el formulario");
        window.location.href="index.php";
        </script>';
        }
    }
}

require 'includes/funciones.php';

incluirTemplate('header');

?>

<main class="contenedor seccion">
    <h1>Facturacion</h1>

    <picture>
        <source srcset="build/img/factura.webp" type="image/webp">
        <source srcset="build/img/factura.jpg" type="image/jpeg">
        <img src="build/img/factura.jpg" alt="Imagen facturacion" loading="lazy">
    </picture>

    <h2>Captura de datos fiscales para clientes de GCB Electric</h2>

    <p>De acuerdo con la nueva regulación que entró en vigor a partir del 1 de enero de 2022 las facturas deberán
        incluir:</p>
    <p> a) Nombre o razón social en ambos casos. </p>
    <p> b) Régimen fiscal, código postal del domicilio fiscal del receptor. </p>
    <p> c) Clave del uso fiscal del CFDI del receptor. </p>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error ?>
        </div>
    <?php endforeach; ?>

    <form class="formulario" method="POST" action="facturacion.php">
        <legend>Favor de incluir los datos en los siguientes campos:</legend>

        <label for="RFC">RFC</label>
        <input type="text" name="RFC" id="RFC" value="<?php echo "$RFC" ?>">

        <label for="Razonsocial">Razon social</label>
        <input type="text" name="Razonsocial" id="Razonsocial" value="<?php echo "$RazonSocial" ?>">

        <label for="Correoelectronico">Correo electronico</label>
        <input type="email" name="Correoelectronico" id="Correoelectronico" value="<?php echo "$CorreoElectronico" ?>">

        <label for="Regimenfiscal">Regimen fiscal</label>
        <select id="Regimenfiscal" name="Regimenfiscal" value="<?php echo "$RegimenFiscal" ?>">
            <option value="0">Selecione...</option>
            <option value="601">601 - General de Ley Personas Morales</option>
            <option value="603">603 - Personas Morales con Fines no Lucrativos</option>
            <option value="605">605 - Sueldos y Salarios e Ingresos Asimilados a Salarios</option>
            <option value="606">606 - Arrendamiento</option>
            <option value="607">607 - Régimen de Enajenación o Adquisición de Bienes</option>
            <option value="608">608 - Demás ingresos</option>
            <option value="610">610 - Residentes en el Extranjero sin Establecimiento Permanente en México</option>
            <option value="611">611 - Ingresos por Dividendos (socios y accionistas)</option>
            <option value="612">612 - Personas Físicas con Actividades Empresariales y Profesionales</option>
            <option value="614">614 - Ingresos por intereses</option>
            <option value="615">615 - Régimen de los ingresos por obtención de premios</option>
            <option value="616">616 - Sin obligaciones fiscales</option>
            <option value="620">620 - Sociedades Cooperativas de Producción que optan por diferir sus ingresos
            </option>
            <option value="621">621 - Incorporación Fiscal</option>
            <option value="622">622 - Actividades Agrícolas, Ganaderas, Silvícolas y Pesqueras</option>
            <option value="623">623 - Opcional para Grupos de Sociedades</option>
            <option value="624">624 - Coordinados</option>
            <option value="625">625 - Régimen de las Actividades Empresariales con ingresos a través de Plataformas
                Tecnológicas</option>
            <option value="626">626 - Régimen Simplificado de Confianza</option>
        </select>
        <label for="UsoCFDI">Uso CFDI</label>
        <select id="UsoCFDI" name="UsoCFDI" value="<?php echo "$UsoCFDI" ?>">
            <option value="0">Selecione...</option>
            <option value="G01">G01 - Adquisición de mercancías.</option>
            <option value="G03">G03 - Gastos en general.</option>
            <option value="I05">I05 - Dados, troqueles, moldes, matrices y herramental.</option>
            <option value="I08">I08 - Otra maquinaria y equipo.</option>
        </select>

        <fieldset>
            <legend>Domicilio Fiscal</legend>

            <label for="calle">Calle</label>
            <input type="text" name="calle" id="calle" value="<?php echo "$Calle" ?>">

            <label for="CP">Codigo Postal</label>
            <input type="number" name="CP" id="CP" value="<?php echo "$CP" ?>">

            <label for="colonia">Colonia</label>
            <input type="text" name="colonia" id="colonia" value="<?php echo "$Colonia" ?>">

            <label for="ciudad">Ciudad</label>
            <input type="text" name="ciudad" id="ciudad" value="<?php echo "$Ciudad" ?>">

            <label for="estado">Estado</label>
            <select id="estado" name="estado" class="form-control " value="<?php echo "$Estado" ?>">
                <option value="0">Selecione...</option>
                <option value="AGS">AGUASCALIENTES</option>
                <option value="BCN">BAJA CALIFORNIA</option>
                <option value="BCS">BAJA CALIFORNIA SUR</option>
                <option value="CAM">CAMPECHE</option>
                <option value="CHS">CHIAPAS</option>
                <option value="COA">COAHUILA DE ZARAGOZA</option>
                <option value="COL">COLIMA</option>
                <option value="CHI">CHIHUAHUA</option>
                <option value="CDMX">CIUDAD DE MÉXICO</option>
                <option value="DGO">DURANGO</option>
                <option value="GTO">GUANAJUATO</option>
                <option value="GRO">GUERRERO</option>
                <option value="HGO">HIDALGO</option>
                <option value="JAL">JALISCO</option>
                <option value="MEX">MÉXICO</option>
                <option value="MIC">MICHOACÁN DE OCAMPO</option>
                <option value="MOR">MORELOS</option>
                <option value="NAY">NAYARIT</option>
                <option value="NL">NUEVO LEÓN</option>
                <option value="OAX">OAXACA</option>
                <option value="PUE">PUEBLA</option>
                <option value="QRO">QUERÉTARO</option>
                <option value="QIR">QUINTANA ROO</option>
                <option value="SIN">SINALOA</option>
                <option value="SLP">SAN LUIS POTOSÍ</option>
                <option value="SON">SONORA</option>
                <option value="TAB">TABASCO</option>
                <option value="TAM">TAMAULIPAS</option>
                <option value="TLX">TLAXCALA</option>
                <option value="VER">VERACRUZ DE IGNACIO DE LA LLAVE</option>
                <option value="YUC">YUCATÁN</option>
                <option value="ZAC">ZACATECAS</option>
            </select>
        </fieldset>

        <input type="submit" value="Enviar" class="boton-verde">
    </form>

</main>

<?php
incluirTemplate('footer');
?>