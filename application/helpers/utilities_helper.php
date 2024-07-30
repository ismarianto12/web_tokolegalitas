<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function parsing_rs_select()
{
	$CI      = &get_instance();
	$rs_id   = $CI->session->userdata('RS_ID');
	$rs_nama = rumahsakit_sess($rs_id, 'nama_rumahsakit');
	$CI->load->view('layouts/select_rs_sess', [
		'id_rs' => $rs_id,
		'nama_rs' => $rs_nama
	]);
}
function rumahsakit_sess($id_rs, $column)
{
	$CI = &get_instance();
	$par = 	$CI->db->select('*')
		->from('rumah_sakit')
		->where('id_rumahsakit', $id_rs)
		->get();
	if ($par->num_rows() > 0) {
		return $par->row()->$column;
	} else {
		return NULL;
	}
}

// end function add by rian

function panjangStr($input, $len = 100)	//digunakan untuk memotong string.....
{
	if (strlen($input) > $len)
		$ret = mb_substr($input, 0, $len - 4) . "....";
	else
		$ret = $input;
	return $ret;
}

function tgl_indo($date)
{
	// format asal 2014-12-25
	$day = date('N', strtotime($date));
	$tgl = date('d-m-Y', strtotime($date));
	$gabungan = kodeHari($day) . ', ' . $tgl;
	return $gabungan;
}

function DateToIndo($date)
{ // fungsi atau method untuk mengubah tanggal ke format indonesia
	// variabel BulanIndo merupakan variabel array yang menyimpan nama-nama bulan
	$BulanIndo = array(
		"Januari", "Februari", "Maret",
		"April", "Mei", "Juni",
		"Juli", "Agustus", "September",
		"Oktober", "November", "Desember"
	);
	$tahun = substr($date, 0, 4); // memisahkan format tahun menggunakan substring
	$bulan = substr($date, 5, 2); // memisahkan format bulan menggunakan substring
	$tgl   = substr($date, 8, 2); // memisahkan format tanggal menggunakan substring
	$result = $tgl . " " . $BulanIndo[(int)$bulan - 1] . " " . $tahun;
	return ($result);
}
//echo(DateToIndo("2011-08-25")); //Akan menghasilkan 25 Agustus 2011

function msgbox($jenis = 'ok', $kata = 'Not complete')	//digunakan untuk style pesan seperti alert js......
{
	switch ($jenis) {
		case 'ok':
			$output = '
				     <div class="alert alert-success">
						<button class="close" data-dismiss="alert" type="button">×</button>
						<h4>Sukses!</h4>
						' . $kata . '
					</div>';
			break;
		case 'error':
			$output = '
				     <div class="alert alert-danger">
						<button class="close" data-dismiss="alert" type="button">×</button>
						<h4>Gagal!</h4>
						' . $kata . '
					</div>';
			break;
		case 'warning':
			$output = '
				     <div class="alert alert-warning">
						<button class="close" data-dismiss="alert" type="button">×</button>
						<h4>Perhatian!</h4>
						' . $kata . '
					</div>';
			break;
		default:
			$output = '
				     <div class="alert alert-warning">
						<button class="close" data-dismiss="alert" type="button">×</button>
						<h4>Perhatian!</h4>
						' . $kata . '
					</div>';
			break;
	}
	return $output;
}

function hapus_file($url = '')	// digunakan untuk hapus file.....
{
	$hapus = unlink($url);
	if ($hapus) return true;
	else return false;
}

function statusData($angka)
{
	switch ($angka) {
		case '0':
			$st = "Non Aktif";
			break;
		case '1':
			$st = "Aktif";
			break;
		case '2':
			$st = "Close";
			break;
	}
	return $st;
}

function statusYN($angka)
{
	switch ($angka) {
		case '0':
			$st = "Tidak";
			break;
		case '1':
			$st = "Ya";
			break;
		default:
			$st = "Undefined";
			break;
	}
	return $st;
}

function statusComment($angka)
{
	switch ($angka) {
		case '0':
			$st = "Input";
			break;
		case '1':
			$st = "Approved";
			break;
		case '2':
			$st = "UnApproved";
			break;



		default:
			$st = "Undefined";
			break;
	}
	return $st;
}

function formatAngka($angka = 0, $rp = FALSE)
{
	$str = "";
	$Angka = number_format($angka, 2, ',', '.');
	if ($rp == TRUE) $str = 'Rp ' . $Angka;
	else $str = $Angka;
	return $str;
}

function anti_injection($dat)
{
	$filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($dat, ENT_QUOTES))));
	return $filter;
}


function get_whasappnumber($id_rumahsakit = '')
{

	if ($id_rumahsakit == 'lippo') {
		$fnrs = '+62 856-0408-1560';
	} else if ($id_rumahsakit == 'lippo') {
		$fnrs = '+62 821-1272-2965';
	} else if ($id_rumahsakit == 'lippo') {
		$fnrs = '0822-911-911-99';
	} else {
		$fnrs = '+62 856-0408-1560';
	}

	$isi_index = 	"Nama Lengkap :" . "\r\n" .
		"Tempat/Tanggal lahir :" . "\r\n" .
		"jenis Kelamin : laki-laki/perempuan" . "\r\n" .
		"Status :" . "\r\n" .
		"Dokter yang dituju :" . "\r\n" .
		"Waktu berobat : (pagi/sore)" . "\r\n" .
		"Alamat Domisili :" . "\r\n" .
		"Penjamin : Tunai/Asuransi/Perusahaan/Bpjs Kesehatan" . "\r\n" .
		"No telepon:" . "\r\n" .
		"PASIEN LAMA :" . "\r\n" .
		"Nama Lengkap :" . "\r\n" .
		"Tempat/Tanggal lahir :" . "\r\n" .
		"jenis Kelamin : laki-laki/perempuan" . "\r\n" .
		"Status :" . "\r\n" .
		"Dokter yang dituju :" . "\r\n" .
		"Waktu berobat : (pagi/sore)" . "\r\n" .
		"Alamat Domisili :" . "\r\n" .
		"Penjamin : Tunai/Asuransi/Perusahaan/Bpjs Kesehatan" . "\r\n" .
		"No telepon:" . "\r\n" .
		"";
	$keterangan = 'https://api.whatsapp.com/send?phone=' . $fnrs . '&text=' . $isi_index;
	return $keterangan;
}
