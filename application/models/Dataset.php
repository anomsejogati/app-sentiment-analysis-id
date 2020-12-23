<?php
    
    class Dataset extends CI_Model {        
    
        function __construct(){
            parent::__construct();
        }
        

        function readByRangeNumber($start, $end){

            $sql = "SELECT a.id, a.comment FROM _dataset_youtube a WHERE a.id BETWEEN $start AND $end";
            $result = $this->db->query($sql)->result_array();

            return $result;

        }


        function readStemmingByRangeNumber($start, $end){

            $sql = "SELECT a.id, a.stemming FROM _dataset_youtube a WHERE a.id BETWEEN $start AND $end";
            $result = $this->db->query($sql)->result_array();

            return $result;

        }


        function readStemmingByRangeNumber2($start, $end){

            $sql = "SELECT a.id, a.stemming FROM _dataset_youtube a WHERE a.label IN(-1,0,1) AND a.id BETWEEN $start AND $end";
            $result = $this->db->query($sql)->result_array();

            return $result;

        }


        function countRows(){

            $sql = "SELECT COUNT(a.id) as total_row FROM _dataset_youtube a 
                    JOIN _sources b ON a.source_id=b.source_id 
                    JOIN _cases c ON b.case_id=c.case_id 
                    WHERE c.case_id=1";
            $result = $this->db->query($sql)->row_array();

            return $result['total_row'];

        }

        
        function readRawData($start = 1){

            $sql = "SELECT a.id, a.name, a.comment, a.time FROM _dataset_youtube a 
                    JOIN _sources b ON a.source_id=b.source_id 
                    JOIN _cases c ON b.case_id=c.case_id LIMIT 10 OFFSET $start";
            $result['data'] = $this->db->query($sql)->result_array();

            $sql = "SELECT COUNT(a.id) as total_row FROM _dataset_youtube a 
                    JOIN _sources b ON a.source_id=b.source_id 
                    JOIN _cases c ON b.case_id=c.case_id 
                    WHERE c.case_id=1";
            $result['rowCount'] = $this->db->query($sql)->row_array();

            return $result;

        }


        function readPreprocessing($start = 1){

            $sql = "SELECT a.* FROM _dataset_youtube a 
                    JOIN _sources b ON a.source_id=b.source_id 
                    JOIN _cases c ON b.case_id=c.case_id LIMIT 10 OFFSET $start";
            $result['data'] = $this->db->query($sql)->result_array();

            $sql = "SELECT COUNT(a.id) FROM _dataset_youtube a 
                    JOIN _sources b ON a.source_id=b.source_id 
                    JOIN _cases c ON b.case_id=c.case_id 
                    WHERE c.case_id=1";
            $result['rowCount'] = $this->db->query($sql)->row_array();

            return $result;

        }


        function readTFIDF($start = 1){

            $sql = "SELECT a.* FROM _index a 
                    LIMIT 10 OFFSET $start";
            $result['data'] = $this->db->query($sql)->result_array();

            return $result;

        }


        function countRowsTFIDF(){

            $sql = "SELECT COUNT(a.id) as total_row FROM _index a";
            $result = $this->db->query($sql)->row_array();

            return $result['total_row'];

        }


        function readNaiveBayes($start = 1){

            $sql = "SELECT a.id, a.name, a.time, a.cleansing, a.stemming, a.label, a.value FROM _dataset_youtube a 
                    JOIN _sources b ON a.source_id=b.source_id 
                    JOIN _cases c ON b.case_id=c.case_id 
                    WHERE a.label IN (-1,1,2,3) LIMIT 10 OFFSET $start";
            $result['data'] = $this->db->query($sql)->result_array();

            return $result;

        }


        function countRowsLabelled(){

            $sql = "SELECT COUNT(a.id) as total_row FROM _dataset_youtube a 
                    JOIN _sources b ON a.source_id=b.source_id 
                    JOIN _cases c ON b.case_id=c.case_id 
                    WHERE c.case_id=1 AND a.label IN (-1,1,2,3)";
            $result = $this->db->query($sql)->row_array();

            return $result['total_row'];

        }


        function update($id, $data){            

            $this->db->where('id', $id);
            $this->db->update('_dataset_youtube', $data);

            // return $this->db->affected_rows();

        }


        function updatePreprocessing($data){            
            $this->db->update_batch('_dataset_youtube', $data, 'id');

            return $this->db->affected_rows();
        }


        function updateLabelValue($data){            
            $this->db->update_batch('_dataset_youtube', $data, 'id');

            return $this->db->affected_rows();
        }


        function create(){    

            $data = [
                'school_id' => $this->input->post('school_id'),
                'academic_year' => $this->input->post('academic_year')
            ];

            $this->db->insert('so_academic_years', $data);

            return $this->db->affected_rows();

        }


        function delete($ay_id){      

            $this->db->where('ay_id', $ay_id);
            $this->db->delete('so_academic_years');

            return $this->db->affected_rows();

        }
        
    }
?>

