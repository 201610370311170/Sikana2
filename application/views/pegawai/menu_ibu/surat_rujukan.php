<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/style2.css')?>">
  </head>
  <body>
    <style type="text/css" media="print">
      @page
      {
          size:  auto;   /* auto is the initial value */
          margin: 0mm;  /* this affects the margin in the printer settings */
      }

      html
      {
          background-color: #FFFFFF;
          margin: 0px;  /* this affects the margin on the html before sending to printer */
      }

      body
      {
          border: solid 1px black ;
          margin: 10mm 15mm 10mm 15mm; /* margin you want for the content */
      }
      </style>
      <div id="printableTable" style="border: solid 1px black; width:700px; margin-left:400px; padding-bottom:150px;" >
        <body bgcolor="white">


      <div>
        <h2 align="center"> SURAT RUJUKAN </h2>
        <table style="margin-left: 30px;">
        <tr>
        <td valign="top">NIK Pasien</td>
        <td valign="top">:&nbsp;&nbsp;</td>
        <td>  <?php echo $NIK_Ibu[0]['NIK'];  ?></td>


        </tr>
        <tr>
        <td valign="top">Nama</td>
        <td valign="top">:&nbsp;&nbsp;</td>
        <td valign="top"><?php echo $NIK_Ibu[0]['Nama']; ?></td>
        </tr>
        <tr>
        <td valign="top">Alamat</td>
        <td valign="top">:</td>
        <td valign="top"><?php echo $NIK_Ibu[0]['Alamat']; ?></td>
        </tr>
        <tr>
        <td valign="top">No. Telp</td>
        <td valign="top">:</td>
        <td valign="top"><?php echo $NIK_Ibu[0]['Nomor_Telefon']; ?></td>
        </tr>
        <tr>
        <td valign="top">Keluhan</td>
        <td valign="top">:</td>
        <td valign="top"><?php echo $Keluhan_sekarang; ?></td>
        </tr>
        <tr>
        <td valign="top">Diagnosa</td>
        <td valign="top">:</td>
        <td valign="top"><?php echo $diagnosa; ?></td>
        </tr>
        <tr>
        <td valign="top">Rumah Sakit</td>
        <td valign="top">:</td>
        <td valign="top"><?php echo $Rumah_sakit; ?></td>
        </tr>
        <tr>
        <td valign="top">Tanggal</td>
        <td valign="top">:</td>
        <td valign="top"><?php echo "" . date("d-m-Y") . "<br>";?></td>
        </tr>
      </table>
      <p style="color:black; margin-left:10px;">atas ketersidaanya saya ucapkan terimakasih</p>
      <br><br><br>
      <div>
      <p style="color:black; text-align: right; margin-right: 20px;">
        ..............,<?php echo "" . date("d-m-Y") . "<br>";?>
        <br><br><br>
        ......................................
      </p>
    </div>
      </div>
     </body>
    </div>

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
