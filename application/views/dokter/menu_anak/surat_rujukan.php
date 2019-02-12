
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/style2.css')?>">
  </head>
  <body>

      <div id="printableTable" style="border: solid 1px black; width:700px; margin: 50px auto; padding-bottom:80px;" >
        <body bgcolor="white">
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

      <div>
        <h2 align="center"> <br>SURAT RUJUKAN </h2>
        <p style="color: black; margin-left: 10px;">
          <br><br>
          Kepada Yth<br>
          ..............................<br><br>
          Dengan Hormat <br>
          Mohon pemeriksaan dan pengobatan lebih lanjut terhadap pasien :
        </p>
        <table style="margin-left: 30px;">
          <td valign="top">Nama</td>
          <td valign="top">&nbsp:&nbsp;&nbsp;</td>
          <td valign="top"><?php echo $id_bayi[0]['Nama'];?></td>
          </tr>
          <td valign="top">Tanggal Periksa</td>
          <td valign="top">&nbsp:</td>
          <td valign="top"><?php echo "" . date("d-m-Y") . "<br>";?></td>
          </tr>
          <tr>
          <td valign="top">NIK Pasien</td>
          <td valign="top">&nbsp:&nbsp;&nbsp;</td>
          <td valign="top"><?php echo $id_bayi[0]['id_bayi']; ?></td>
          </tr>
          <tr>
          <tr>
          <td valign="top">Keluhan</td>
          <td valign="top">&nbsp:&nbsp;&nbsp;</td>
          <td valign="top"><?php echo $Keluhan_sekarang;  ?></td>
          </tr>
          <tr>
          <td valign="top">Diagnosa</td>
          <td valign="top">&nbsp:&nbsp;&nbsp;</td>
          <td valign="top"><?php echo $diagnosa;  ?></td>
          </tr>
          <tr>
          <td valign="top">Rumah Sakit</td>
          <td valign="top">&nbsp:&nbsp;&nbsp;</td>
          <td valign="top"><?php echo $Rumah_sakit;  ?></td>
          </tr>
          <tr>
          <td valign="top">Kategori</td>
          <td valign="top">&nbsp:&nbsp;&nbsp;</td>
          <td valign="top"><?php echo $id_bayi[0]['Kategori'];  ?></td>
          </tr>
          <tr>
          <td valign="top">NIK Ibu</td>
          <td valign="top">&nbsp:&nbsp;&nbsp;</td>
          <td valign="top"><?php echo $id_bayi[0]['NIK_Ibu'];?></td>
          </tr>
          <tr>
          <td valign="top">Nama Dokter</td>
          <td valign="top">&nbsp:</td>
          <td valign="top"><?php echo $Nama_dokter;?></td>
          </tr>
          <tr>

      </table>
      <br>
      <p style="color:black; margin-left:10px;"> Demikian surat rujukan ini dibuat dan sangat diharapkan balasannya.   Atas ketersediaannya saya ucapkan terimakasih</p>
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
