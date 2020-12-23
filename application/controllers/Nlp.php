<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nlp extends CI_Controller {
    
    public function __construct(){
		parent::__construct();
		
		$this->load->model('Dataset');
	}


	function runNaiveBayes(){
        $sentiment = new \PHPInsight\Sentiment();
        
        set_time_limit(0);

		$post = $this->input->post();
        $rows = $this->Dataset->readStemmingByRangeNumber($post['start'], $post['end']);


        foreach($rows as $row):

			$updateID	= $row['id'];
            
            if(empty($row['stemming'])){

            }else if(strpos($row['stemming'], 'http') !== false){
                $data = [
                    'id' => $updateID,
                    'label' => 3,
                    'value' => 0
                ];
    
                $updateData[] = $data;
            }else{

                $strings = [1 => $this->convertWord($row['stemming'])];
        
                $i=1;
                foreach ($strings as $string) {
        
                    // calculations:
                    $scores = $sentiment->score($string);
                    $class = $sentiment->categorise($string);
        
                    if($class == 'positif'){
                        $label = 1;
                    }else if($class == 'negatif'){
                        $label = -1;
                    }else if($class == 'netral'){
                        $label = 2;
                    }
    
                    $data = [
                        'id' => $updateID,
                        'label' => $label,
                        'value' => $scores[$class]
                    ];
    
                    $i++;
                }
    
                $data = [
                    'id' => $updateID,
                    'label' => $label,
                    'value' => $scores[$class]
                ];
    
                $updateData[] = $data;

            }

		endforeach;

		if($this->Dataset->updateLabelValue($updateData) > 0){
            $data['msg'] = 'success';
        }else{
            $data['msg'] = 'failed';
		}
		
        echo json_encode($data);

    }
    

    function convertWord($string){
        $slangword = ["cebong", "kampret", "kamprett", "kampretd", "bacot", "tukang obat"];
        $newstr = preg_replace('/\b('.implode('|',$slangword).')\b/','umpatan', $string);
        
        return $newstr;
    }


    function naiveBayesTest(){
        $sentiment = new \PHPInsight\Sentiment();
        
        $input = $this->input->post('input_text');
        $strings = [
            1 => $this->convertWord($input)
        ];

        
        if(strpos($input, 'http') !== false){

            $result['class'] = "spam";
            $result['score'] = 0;

        }else{

            foreach ($strings as $string) {
    
                // calculations:
                $scores = $sentiment->score($string);
                $class = $sentiment->categorise($string);
    
                $result['class'] = $class;
                $result['score'] = $scores[$class];

                var_dump($scores);
                
                
            }
        }

        echo json_encode($result);

    }
    

    function runTFIDF(){

        $rows = $this->Dataset->readStemmingByRangeNumber2($post['start'], $post['end']);

        foreach($rows as $row):
            $data .= $row['stemming'].'.';
        endforeach;

        $data = rtrim($data, ", ");

        $this->original_data  = $data;

        $this->dokumen = array_filter(explode(".", $data), function ($value) {

            return $value !== '';

        });

        $this->filtering_data = $this->filtering();
        $this->filtering_data =explode(" ", $this->filtering_data);

        $this->word_weighting();
        $this->sentence_weighting();
        $this->pengurutan();
        $this->pengurutan1();
    }


    public function word_weighting(){
        $l=0;
        $table1=array();
        $search=array();
        foreach ($this->filtering_data as $key) {
            if (array_search(trim(strtolower($key)), $search)===false) {
                $dok=0;
                $table1[$l]['term']=trim(strtolower($key));
                $table1[$l]['dok']=array();

                foreach ($this->dokumen as $key1) {
                    array_push($table1[$l]['dok'], substr_count(trim(strtolower($key1)), trim(strtolower($key))));


                    ++$dok;
                }

                $table1[$l]['df']=array_sum($table1[$l]['dok']);
                $table1[$l]['Ddf']=count($table1[$l]['dok'])/$table1[$l]['df'];
                $table1[$l]['idf']=round(log10($table1[$l]['Ddf']), 3);
                $table1[$l]['idf1']= round($table1[$l]['idf']+1, 3);
                ++$l;
            }
            array_push($search, trim(strtolower($key)));
        }
        $this->table1=$table1;
        //  echo json_encode($table1);
    }


    public function sentence_weighting(){

        $bobot_dokumen=array();
        
        $y=0;
        foreach ($this->dokumen as $key1) {

            $bobot_dokumen[$y]['a']=array();
            
            foreach ($this->table1 as $key2) {
                //   echo $key2['dok'][$y] ;
                if ($key2['dok'][$y]>0) {

                    array_push($bobot_dokumen[$y]['a'], $key2['dok'][$y]*$key2['idf1']);

                } else {

                    array_push($bobot_dokumen[$y]['a'], 0);

                }
            }

            $bobot_dokumen[$y]['jml']=round(array_sum($bobot_dokumen[$y]['a']), 3);
            ++$y;
        }
        $this->table2=$bobot_dokumen;
    }


    public function pengurutan(){
        $q=0;
        $urutan=array();

        foreach ($this->table1[0]['dok'] as $key) {//6
            $term=array();
            $df=array();
            $o=0;//40
            foreach ($this->table1 as $key1) { //40
                if ($this->table1[$o]['dok'][$q]>0) {
                    array_push($term, $this->table1[$o]['term']);
                    array_push($df, $this->table1[$o]['df']);
                }
                ++$o;
            }
            $urutan[$q]['term']=$term;
            $urutan[$q]['df']=$df;
            ++$q;//5
        }
        $this->urutan=$urutan;
        //    echo json_encode($urutan);
    }


    public function pengurutan1(){
        $urutan=array();
        $t=0;

        foreach ($this->urutan as $key) {
            $urutan[$t]=array_sum($key['df']);
            ++$t;
        }

        arsort($urutan);
        $this->urutan1 = $urutan;
        
        session_start();

        $array = [
            'table1' => $this->table1,
            'table2' => $this->table2,
            'original_data' => $this->original_data,
            'urutan1' => $this->urutan,
            'urutan2' => $this->urutan1
        ];
        
        $this->session->set_userdata($array);

        $this->load->view('app/analyze/tf-idf/result', $data);
        
    }


    function filtering(){
        $filtering = str_replace("\n", ' ', $this->original_data);
        $filtering = str_replace(",", '', $filtering);
        $filtering = str_replace('"', '', $filtering);
        $filtering = str_replace('.', '', $filtering);
        $filtering = str_replace("'", '', $filtering);
        $filtering = preg_replace('/ ([\'"()*),.:…;?`\n]) /', '', $filtering);
        $filtering = preg_replace('/ +/', ' ', $filtering);
        return $filtering;
    }


    function proses_stopword(){
        $t=0;
        foreach ($this->stopword_remove as $term) {
            $fh = fopen('data/stopword.txt', 'r');
            while ($line = fgets($fh)) {
                if (trim($line)==trim($term)) {
                    unset($this->stopword_remove[$t]);
                    break;
                }
            }

            fclose($fh);
            ++$t;
        }
    }
	
    
	

}

?>

