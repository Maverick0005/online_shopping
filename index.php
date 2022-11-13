<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Pharma Life Home Page</title>
    <link href="style.css" rel="stylesheet" />
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Concert+One&family=Fredoka+One&family=Secular+One&display=swap"
        rel="stylesheet" />
    <style type="text/css">
    <!--
    .style8 {
        font-size: 24px
    }

    .style9 {
        font-size: 95%;
        font-weight: bold;
        color: #003300;
        font-family: Verdana, Arial, Helvetica, sans-serif;
    }
    -->
    </style>
</head>

<body>
    <div id="wrapper">

        <?php
  include "Header.php";
  ?>


        <div id="content">
            <h2><span style="color:#003300"> Welcome To Our Online Clothing Store</span></h2>
            <table width="100%" border="0" cellspacing="3" cellpadding="3">
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>
                        <p><img src="img/Ayurvedic.jpg" alt="box" width="100" height="100" hspace="10" align="left"
                                class="imgleft" title="box" /></p>
                    </td>
                    <td>
                        <p><img src="img/honey.jpg" alt="box" width="100" height="100" hspace="10" align="left"
                                class="imgleft" title="box" /></p>
                    </td>
                    <td>
                        <p><img src="img/sanitizer.jpg" alt="box" width="100" height="100" hspace="10" align="left"
                                class="imgleft" title="box" /></p>
                    </td>
                </tr>
                <tr>
                    <td height="26" bgcolor="#BCE0A8">
                        <div align="center" class="style9">Ayurvedic</div>
                    </td>
                    <td bgcolor="#BCE0A8">
                        <div align="center" class="style9">HONEY</div>
                    </td>
                    <td bgcolor="#BCE0A8">
                        <div align="center" class="style9">Sanitizer</div>
                    </td>
                </tr>
            </table>
            <p>&nbsp;</p>
        </div>
        <?php
 include "Right.php";
 ?>
        <div style="clear:both;"></div>
        <?php
 include "Footer.php";
 ?>
    </div>
</body>

</html>