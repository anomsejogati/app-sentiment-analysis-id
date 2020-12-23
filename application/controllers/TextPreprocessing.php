<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TextPreprocessing extends CI_Controller {
    
    public function __construct(){
		parent::__construct();
		
		$this->load->model('Dataset');
	}


	function execute(){
		set_time_limit(0);

		$post = $this->input->post();
		$rows = $this->Dataset->readByRangeNumber($post['start'], $post['end']);

		foreach($rows as $row):

			$updateID	= $row['id'];
			$comment	= $row['comment'];

			$case_folding	= $this->case_folding($comment);
			$cleansing		= $this->cleansing($case_folding);
			$slangword		= $this->slangword($cleansing);
			$filtering		= $this->filtering($slangword);
			$stemming		= $this->stemming($filtering);
			$tokenization	= $this->tokenization($stemming);

			$data = [
				'id' => $updateID,
				'case_folding' => $case_folding,
				'cleansing' => $cleansing,
				'slangword' => $slangword,                
                'filtering' => $filtering,
				'stemming' => $stemming,
				'tokenization' => $tokenization
			];

			$updateData[] = $data;

		endforeach;

		if($this->Dataset->updatePreprocessing($updateData) > 0){
            $data['msg'] = 'success';
        }else{
            $data['msg'] = 'failed';
		}
		
        echo json_encode($data);

	}


	function test(){

		$comment		= "mengumpat umpatan";
		$case_folding	= $this->case_folding($comment);
		$cleansing		= $this->cleansing($case_folding);
		$slangword		= $this->slangword($cleansing);
		$filtering		= $this->filtering($slangword);
		$stemming		= $this->stemming($filtering);
		$tokenization	= $this->tokenization($stemming);

		echo $case_folding."<br><br>";
		echo $cleansing."<br><br>";
		echo $slangword."<br><br>";		
		echo $filtering."<br><br>";
		echo $stemming."<br><br>";
		echo $tokenization."<br><br>";
		
	}


	function case_folding($string){
	
		// Mengubah text menjadi lowercase
		$newstr = strtolower($string);

		return $newstr;

	}


	function cleansing($string){

		// 1. Menghapus html entity & tag
		$newstr = html_entity_decode($string);
		$newstr = strip_tags($newstr);

		// 2. Menghapus angka (including Western Arabic)
		$newstr = preg_replace('/\d+/u', ' ', $newstr);

		// 3. Menghapus tanda baca (punctuation)
		$newstr = preg_replace('/\p{P}/', ' ', $newstr);

		// 4. Menghapus whitepace (karakter kosong)
		$newstr = preg_replace('/\s/', ' ', $newstr);

		return $newstr;

	}


	function slangword($string){
		$slangword = ["@"];
		$newstr = preg_replace('/\b('.implode('|',$slangword).')\b/','di', $string);

		$slangword = ["abis"];
		$newstr = preg_replace('/\b('.implode('|',$slangword).')\b/','habis', $newstr);

		$slangword = ["ad"];
		$newstr = preg_replace('/\b('.implode('|',$slangword).')\b/','ada', $newstr);

		$slangword = ["adl", "adlh"];
		$newstr = preg_replace('/\b('.implode('|',$slangword).')\b/','adalah', $newstr);

		$slangword = ["ahaha", "hahaha"];
		$newstr = preg_replace('/\b('.implode('|',$slangword).')\b/','haha', $newstr);

		$slangword = ["aj", "aje", "saj"];
		$newstr = preg_replace('/\b('.implode('|',$slangword).')\b/','saja', $newstr);

		$slangword = ["ajep-ajep", "ajep2"];
		$newstr = preg_replace('/\b('.implode('|',$slangword).')\b/','dunia gemerlap', $newstr);

		$slangword = ["ak","akika","akkoh","akuwh","aq","aquwh","ku", "sy"];
		$newstr = preg_replace('/\b('.implode('|',$slangword).')\b/','saya', $newstr);

		$slangword = ["alay"];
		$newstr = preg_replace('/\b('.implode('|',$slangword).')\b/','norak', $newstr);

		$slangword = ["ambilin"];
		$newstr = preg_replace('/\b('.implode('|',$slangword).')\b/','ambilkan', $newstr);

		$slangword = ["ancur"];
		$newstr = preg_replace('/\b('.implode('|',$slangword).')\b/','hancur', $newstr);

		$slangword = ["anjrit"];
		$newstr = preg_replace('/\b('.implode('|',$slangword).')\b/','anjing', $newstr);

		$slangword = ["anter"];
		$newstr = preg_replace('/\b('.implode('|',$slangword).')\b/','antar', $newstr);

		$slangword = ["aseek", "asik"];
		$newstr = preg_replace('/\b('.implode('|',$slangword).')\b/','asyik', $newstr);

		$slangword = ["bacot", "bacott", "bacoot"];
		$newstr = preg_replace('/\b('.implode('|',$slangword).')\b/','kata-kata kasar', $newstr);

		$slangword = ["bgt"];
		$newstr = preg_replace('/\b('.implode('|',$slangword).')\b/','banget', $newstr);

		$slangword = ["bhs", "bhsa"];
		$newstr = preg_replace('/\b('.implode('|',$slangword).')\b/','bahasa', $newstr);

		$slangword = ["bkn"];
		$newstr = preg_replace('/\b('.implode('|',$slangword).')\b/','bukan', $newstr);

		$slangword = ["blg"];
		$newstr = preg_replace('/\b('.implode('|',$slangword).')\b/','bilang', $newstr);

		$slangword = ["bullshit"];
		$newstr = preg_replace('/\b('.implode('|',$slangword).')\b/','omong kosong', $newstr);

		$slangword = ["byk"];
		$newstr = preg_replace('/\b('.implode('|',$slangword).')\b/','banyak', $newstr);

		$slangword = ["dgn", "dg"];
		$newstr = preg_replace('/\b('.implode('|',$slangword).')\b/','dengan', $newstr);

		$slangword = ["dlm"];
		$newstr = preg_replace('/\b('.implode('|',$slangword).')\b/','dalam', $newstr);

		$slangword = ["emg"];
		$newstr = preg_replace('/\b('.implode('|',$slangword).')\b/','emang', $newstr);

		$slangword = ["gk", "gak", "ga", "tdk"];
		$newstr = preg_replace('/\b('.implode('|',$slangword).')\b/','tidak', $newstr);

		$slangword = ["gblk", "geblek", "goblok", "stupid"];
		$newstr = preg_replace('/\b('.implode('|',$slangword).')\b/','bodoh', $newstr);

		$slangword = ["kl", "klo"];
		$newstr = preg_replace('/\b('.implode('|',$slangword).')\b/','kalau', $newstr);

		$slangword = ["kmu", "km"];
		$newstr = preg_replace('/\b('.implode('|',$slangword).')\b/','kamu', $newstr);

		$slangword = ["kmrn"];
		$newstr = preg_replace('/\b('.implode('|',$slangword).')\b/','kemarin', $newstr);

		$slangword = ["knp"];
		$newstr = preg_replace('/\b('.implode('|',$slangword).')\b/','kenapa', $newstr);

		$slangword = ["lbh"];
		$newstr = preg_replace('/\b('.implode('|',$slangword).')\b/','lebih', $newstr);

		$slangword = ["mgkn"];
		$newstr = preg_replace('/\b('.implode('|',$slangword).')\b/','mungkin', $newstr);

		$slangword = ["seneng"];
		$newstr = preg_replace('/\b('.implode('|',$slangword).')\b/','senang', $newstr);

		$slangword = ["shit"];
		$newstr = preg_replace('/\b('.implode('|',$slangword).')\b/','sial', $newstr);

		$slangword = ["taik", "taek", "taiik", "taeek"];
		$newstr = preg_replace('/\b('.implode('|',$slangword).')\b/','tai', $newstr);

		$slangword = ["tetep"];
		$newstr = preg_replace('/\b('.implode('|',$slangword).')\b/','tetap', $newstr);

		$slangword = ["tp"];
		$newstr = preg_replace('/\b('.implode('|',$slangword).')\b/','tapi', $newstr);

		$slangword = ["sm"];
		$newstr = preg_replace('/\b('.implode('|',$slangword).')\b/','sama', $newstr);

		$slangword = ["yg"];
		$newstr = preg_replace('/\b('.implode('|',$slangword).')\b/','yang', $newstr);

		return $newstr;

	}


	function filtering($string){
		// stop word removal
		$filter  = [
			"a", "ada", "adalah", "adanya", "adapun", "agak", "agaknya", "agar", "akan", "akankah", "akhir",
			"akhiri", "aku", "akulah", "amatlah", "anda", "andalah", "antar", "antara",
			"antaranya", "apa", "apaan", "apabila", "apakah", "apalagi", "apatah", "arti", "artinya", "asal",
			"asalkan", "atas", "atau", "ataukah", "ataupun", "awal", "awalnya", "b", "bagai", "bagaikan",
			"bagaimana", "bagaimanakah", "bagaimanapun", "bagainamakah", "bagi", "bagian", "bahkan", "bahwa",
			"bahwasannya", "bahwasanya", "baiklah", "bakal", "bakalan", "balik", "bapak",
			"baru", "bawah", "beberapa", "begini", "beginian", "beginikah", "beginilah", "begitu", "begitukah",
			"begitulah", "begitupun", "belakang", "belakangan", "belum", "belumlah",
			"benarkah", "benarlah", "berada", "berakhirlah", "berakhirnya", "berapa", "berapakah",
			"berapalah", "berapapun", "berawal", "berbagai", "berdatangan", "beri", "berikan",
			"berkali-kali", "berkata", "berkehendak",
			"berkenaan", "berlainan", "berlalu", "berlangsung", "bermacam", "bermacam-macam",
			"bermaksud", "bermula", "bersama", "bersama-sama", "bersiap", "bersiap-siap", "bertanya",
			"bertanya-tanya", "berturut", "berturut-turut", "bertutur", "berujar", "berupa",
			"betul", "betulkah", "biasanya", "bila", "bilakah", "bisa", "bisakah", "boleh", "bolehkah",
			"bolehlah", "buat", "bukankah", "bukanlah", "bukannya", "bulan", "bung", "c",
			"caranya", "cukupkah", "cuma", "d", "dahulu", "dan", "dari", "daring",
			"daripada", "datang", "dekat", "demi", "demikian", "demikianlah", "depan", "di", "dia",
			"diakhiri", "diakhirinya", "dialah", "diantara", "diantaranya", "diberi", "diberikannya",
			"dibuat", "dibuatnya", "didapat", "didatangkan", "diibaratkan", "diibaratkannya",
			"diingat", "diingatkan", "dijawab", "dijelaskannya", "dikarenakan",
			"dikatakan", "dikatakannya", "dikerjakan", "diketahui", "diketahuinya", "dikira", "dilakukan",
			"dilalui", "dimaksud", "dimaksudkan", "dimaksudkannya", "dimaksudnya", "diminta",
			"dimintai", "dimisalkan", "dimulai", "dimulailah", "dimulainya", "dimungkinkan", "dini", "dipastikan",
			"diperbuat", "diperbuatnya", "dipergunakan", "diperkirakan", "diperlihatkan", "diperlukan",
			"diperlukannya", "dipersoalkan", "dipunyai", "diri", "dirinya", "disampaikan",
			"disebut", "disebutkan", "disebutkannya", "disini", "disinilah", "ditambahkan", "ditandaskan",
			"ditanya", "ditanyai", "ditanyakan", "ditegaskan", "ditujukan", "ditunjuk", "ditunjuki", "ditunjukkan",
			"ditunjukkannya", "ditunjuknya", "dituturkan", "dituturkannya", "diucapkan", "diucapkannya",
			"diungkapkan", "dong", "dunk", "dua", "dulu", "e", "empat", "enggak", "enggaknya", "entah", "entahlah",
			"f", "g", "guna", "gunakan", "h", "hadap", "hai", "halo", "hallo", "hanya", "hanyalah",
			"hari", "harus", "haruslah", "harusnya", "helo", "hello", "hendak", "hendaklah", "hendaknya", "hingga",
			"i", "ia", "ialah", "ibarat", "ibaratkan", "ibaratnya", "ibu", "ikut", "ingat", "ingat-ingat", "ingin",
			"inginkah", "inginkan", "ini", "inikah", "inilah", "itu", "itukah", "itulah", "j", "jadi", "jadilah",
			"jadinya", "jangan", "jangankan", "janganlah", "jawab", "jawaban", "jawabnya",
			"jika", "jikalau", "justru",
			"k", "kadar", "kala", "kalau", "kalaulah", "kalaupun", "kali", "kalian", "kami", "kamilah", "kamu",
			"kamulah", "kan", "kapan", "kapankah", "kapanpun", "karena", "karenanya", "kasus", "kata", "katakan",
			"katakanlah", "katanya", "ke", "keadaan", "kedua", "keduanya",
			"kelamaan", "kelihatan", "kelihatannya", "kelima", "kemudian",
			"kemungkinannya", "kena", "kenapa", "kepada", "kepadanya", "kerja", "kesampaian", "keseluruhan",
			"keseluruhannya", "ketika", "khususnya", "kini", "kinilah", "kira",
			"kira-kira", "kiranya", "kita", "kitalah", "kok", "l", "lagi", "lagian", "lah", "lain",
			"lainnya", "laku", "lalu", "lamanya", "langsung", "lanjut", "lanjutnya", "lewat",
			"lihat", "lima", "luar", "m", "macam", "maka", "makanya", "malah", "malahan",
			"mampukah", "mana", "manakala", "manalagi", "masa", "masalahnya", "masih",
			"masihkah", "masing", "masing-masing", "masuk", "mata", "mau", "maupun", "melainkan", "melakukan",
			"melalui", "melihatnya", "memang", "memberi", "memberikan",
			"memerlukan", "meminta", "memintakan", "memisalkan", "memperbuat", "mempergunakan",
			"memperkirakan", "memperlihatkan", "mempersoalkan", "mempertanyakan", "mempunyai",
			"memulai", "memungkinkan", "menaiki", "menambahkan", "menandaskan", "menanti", "menanti-nanti",
			"menantikan", "menanya", "menanyai", "menanyakan", "mendapat", "mendatangi",
			"mengakhiri", "mengapa", "mengatakannya", "mengenai",
			"mengerjakan", "mengetahui", "menggunakan", "menghendaki", "mengibaratkan", "mengibaratkannya",
			"mengingat", "mengingatkan", "mengira", "mengucapkan", "mengucapkannya",
			"menjadi", "menjawab", "menuju", "menunjuk", "menunjuki", "menunjuknya",
			"menurut", "menuturkan", "menyampaikan", "menyangkut", "menyebutkan", "menyeluruh",
			"menyiapkan", "mereka", "merekalah", "merupakan", "meski", "meskipun", "meyakini",
			"minta", "mirip", "misal", "misalkan", "misalnya", "mohon", "mula", "mulai", "mulailah", "mulanya",
			"mungkinkah", "n", "nah", "naik", "namun", "nanti", "nantinya", "nya", "nyaris", "nyatanya",
			"o", "oleh", "olehnya", "orang", "p", "pada", "padahal", "padanya", "pak", "paling",
			"para", "pastilah", "pentingnya", "per", "percuma", "perlukah", "perlunya",
			"persoalan", "pertama", "pertama-tama", "pertanyaan", "pertanyakan", "pihak", "pihaknya",
			"pukul", "pula", "pun", "punya", "q", "r", "rasanya", "rupa", "rupanya", "s", "saat", "saatnya", "saja",
			"sajalah", "salam", "saling", "sama-sama", "sambil", "sampai", "sampai-sampai", "sampaikan", "sana",
			"sangatlah", "sangkut", "satu", "saya", "sayalah", "se", "sebab", "sebabnya", "sebagai",
			"sebagaimana", "sebagainya", "sebagian", "sebaik", "sebaik-baiknya", "sebaiknya", "sebaliknya",
			"sebanyak", "sebegini", "sebegitu", "sebelum", "sebelumnya", "seberapa", "sebesar",
			"sebetulnya", "sebisanya", "sebuah", "sebut", "sebutlah", "sebutnya", "secara", "secukupnya", "sedang",
			"sedangkan", "sedemikian", "sedikitnya", "seenaknya", "segala", "segalanya",
			"sehingga", "seingat", "sejak", "sejauh", "sejenak", "sejumlah", "sekadar", "sekadarnya",
			"sekali", "sekali-kali", "sekalian", "sekalipun", "sekarang", "sekaranglah", "sekecil",
			"seketika", "sekiranya", "sekitar", "sekitarnya", "sekurang-kurangnya", "sekurangnya", "sela", "selain",
			"selaku", "selalu", "selama", "selama-lamanya", "selamanya", "selanjutnya", "seluruhnya",
			"semacam", "semakin", "semampu", "semampunya", "semasa", "semasih", "semata", "semata-mata", "semaunya",
			"semisal", "semisalnya", "sempat", "semua", "semula", "sendiri",
			"sendirinya", "seolah", "seolah-olah", "seorang", "sepanjang", "sepantasnyalah",
			"seperlunya", "sepertinya", "sepihak", "seringnya", "serta", "serupa", "sesaat",
			"sesama", "sesampai", "sesegera", "sesekali", "seseorang", "sesuatu", "sesuatunya", "sesudah",
			"sesudahnya", "setelah", "setempat", "seterusnya", "setiap", "setiba", "setibanya",
			"setidak-tidaknya", "setidaknya", "setinggi", "seusai", "sewaktu", "siapa", "siapakah",
			"siapapun", "sini", "sinilah", "soal", "soalnya", "suatu", "sudah", "sudahkah", "sudahlah", "supaya",
			"t", "tadi", "tadinya", "tambahnya", "tandas", "tandasnya",
			"tanya", "tanyakan", "tanyanya", "tapi", "tegasnya", "telah", "tempat", "tentang", "tentu",
			"tentulah", "tentunya", "terakhir", "terbanyak", "terdahulu", "terdapat", "terdiri",
			"terhadap", "terhadapnya", "teringat", "teringat-ingat", "terjadi", "terjadilah", "terjadinya", "terkira",
			"terlebih", "terlihat", "termasuk", "ternyata", "tersampaikan", "tersebut", "tersebutlah",
			"tertentu", "tertuju", "terus", "tetapi", "tiap", "tiba", 
			"tidakkah", "tidaklah", "tiga", "toh", "tuju", "tunjuk", "turut", "tutur", "tuturnya", "u", "ucap", "ucapnya",
			"ujar", "ujarnya", "umumnya", "ungkap", "ungkapnya", "untuk", "usah", "usai", "v", "w", "waduh", "wahai",
			"waktunya", "walau", "walaupun", "wong", "x", "y", "ya", "yaitu", "yakni", "yang", "z",
			"dimana", "dimana", "kemana","kah","selagi","kecuali","seraya","dsb","dst","dll","dulunya","anu","nggak","mari","oh","ok","tolong",
			"gw", "gue", "lo", "loe", "loh", "si", "sih", "tsb"
		];

		$newstr = str_replace(',' , ' ', $string);
		$newstr = preg_replace('/\b('.implode('|',$filter).')\b/','', $newstr);
		$newstr = trim(preg_replace('/\s\s+/', ' ', str_replace("\n", " ", $newstr)));		

		return $newstr;

	}


	function stemming($sentence){

		$stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
		$stemmer = $stemmerFactory->createStemmer();

		return $stemmer->stem($sentence);

	}


	function tokenization($string) {
	 
		$newstr	= preg_replace('/-+/', ' ', $string); // Replaces multiple hyphens with single one.
		$newstr	= str_replace(' ' , ',', $newstr);
		$newstr	= str_replace(',,' , ',', $newstr);

		return rtrim($newstr, ", ");

	}
	
    
	// $fastfind = array_diff($arraystr,$filter);


}

?>