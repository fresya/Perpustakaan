<?php

	function terlambat($tanggal_dateline, $tanggal_pengembalian){

		$tanggal_dateline_pecah = explode("-", $tanggal_dateline);
		$tanggal_dateline_pecah = $tanggal_dateline_pecah[2]."-".$tanggal_dateline_pecah[1]."-".$tanggal_dateline_pecah[0];

		$tanggal_pengembalian_pecah = explode("-", $tanggal_pengembalian);
		$tanggal_pengembalian_pecah = $tanggal_pengembalian_pecah[2]."-".$tanggal_pengembalian_pecah[1]."-".$tanggal_pengembalian_pecah[0];

		$selisih = strtotime($tanggal_pengembalian_pecah) - strtotime($tanggal_dateline_pecah);

		$selisih = $selisih/86400;

		if ($selisih >= 1){
			$hasil_tanggal = floor($selisih);
		}else{
			$hasil_tanggal = 0;
		}
		return $hasil_tanggal;
	}
	?>