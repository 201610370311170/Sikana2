l>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/style2.css')?>">
  </head>
  <body>
    <form>
      <div id="printableTable">
        <body bgcolor="white">
      <hr>

      <font face="Arial" color="black" size="6"> <p align="center"> <u> <b> Surat Rujukan </b></u></font><br>
      <font face="Arial" color="black" size="4"> </p></font>



        <pre>
        NIK Pasien  :<?php echo $id_bayi[0]['id_bayi']; ?>

        Nama        :<?php echo $id_bayi[0]['Nama'];?>

        NIK Ibu     :<?php echo $id_bayi[0]['NIK_Ibu'];?>

        Keluhan     :<?php echo $Keluhan_sekarang ?>

        Diagnosa    :<?php echo $diagnosa; ?>

        Rumah Sakit :<?php echo $Rumah_sakit; ?>

        Tanggal     :<?php echo "" . date("d-m-Y") . "<br>";?>
        </pre>
     </body>
    </div>
    </form>

    <div>
    <center><button class="btn dento-btn" onclick="printDiv()">Print</button></center>
      <script>
        function printDiv() {
          // body...
          window.frames["print_frame"].document.body.innerHTML = document.getElementById("printableTable").innerHTML;
             window.frames["print_frame"].window.focus();
             window.frames["print_frame"].window.print();
        }
      </script>
      <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>

  </body>
</html>
