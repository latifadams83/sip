<?php
	/**
	* 
	*/
	class DbModel
	{
		protected $tblname;
		protected $tblfields;
		protected $tblvalues;

		
		function __construct($db)
		{
			try {
            $this->db = $db;
		        } catch (PDOException $e) {
		            exit('Database connection could not be established.');
		        }
		}

		public function insert($artist, $track, $link)
    {
        $sql = "INSERT INTO song (artist, track, link) VALUES (:artist, :track, :link)";
        $query = $this->db->prepare($sql);
        $parameters = array(':artist' => $artist, ':track' => $track, ':link' => $link);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    private function get_fields()
    {
    	
    }
	}