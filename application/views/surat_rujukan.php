
<link rel="stylesheet" href="<?php echo base_url('assets/style2.css')?>">
	<form>
		<div id="printableTable">
	    <body bgcolor="white">
	  <hr>

	  <font face="Arial" color="black" size="6"> <p align="center"> <u> <b> Surat Rujukan </b></u></font><br>
	  <font face="Arial" color="black" size="4"> Nomor:<?php echo $_POST['noRujuk']?></p></font>



	    <pre>
	    Nama        :<?php echo $_POST['namaIbu']; ?>

	    Alamat      :<?php echo $_POST['alamat']; ?>

	    No. Telp    :<?php echo $_POST['ntelp']; ?>

	    Keluhan     :<?php echo $_POST['keluhan']; ?>

	    Diagnosa    :<?php echo $_POST['diagnosa']; ?>

	    Dokter      :<?php echo $_POST['nmaDokter']; ?>

	    Rumah Sakit :<?php echo $_POST['rs']; ?>

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
