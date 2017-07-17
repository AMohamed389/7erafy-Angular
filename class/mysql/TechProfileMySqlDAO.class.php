<?php
/**
 * Class that operate on table 'tech_profile'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:18
 */
class TechProfileMySqlDAO implements TechProfileDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TechProfileMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tech_profile WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tech_profile';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tech_profile ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param techProfile primary key
 	 */
	public function delete($ID){
		$sql = 'DELETE FROM tech_profile WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($ID);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TechProfileMySql techProfile
 	 */
	public function insert($techProfile){
		$sql = 'INSERT INTO tech_profile (CREATED, CREATED_BY, LAST_UPD, LAST_UPD_BY, TECH_STAT, TECH_HIT_ID, TECH_SGMNT_ID, TECH_GRP_ID, TECH_TYPE_ID, TECH_LOY_ID, SERV_ID, TECH_PROFILE_COMMENT, TECH_PRICE_AVG, email) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($techProfile->cREATED);
		$sqlQuery->set($techProfile->cREATEDBY);
		$sqlQuery->set($techProfile->lASTUPD);
		$sqlQuery->set($techProfile->lASTUPDBY);
		$sqlQuery->set($techProfile->tECHSTAT);
		$sqlQuery->setNumber($techProfile->tECHHITID);
		$sqlQuery->setNumber($techProfile->tECHSGMNTID);
		$sqlQuery->setNumber($techProfile->tECHGRPID);
		$sqlQuery->setNumber($techProfile->tECHTYPEID);
		$sqlQuery->setNumber($techProfile->tECHLOYID);
		$sqlQuery->setNumber($techProfile->sERVID);
		$sqlQuery->set($techProfile->tECHPROFILECOMMENT);
		$sqlQuery->setNumber($techProfile->tECHPRICEAVG);
		$sqlQuery->set($techProfile->email);

		$id = $this->executeInsert($sqlQuery);	
		$techProfile->iD = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TechProfileMySql techProfile
 	 */
	public function update($techProfile){
		$sql = 'UPDATE tech_profile SET CREATED = ?, CREATED_BY = ?, LAST_UPD = ?, LAST_UPD_BY = ?, TECH_STAT = ?, TECH_HIT_ID = ?, TECH_SGMNT_ID = ?, TECH_GRP_ID = ?, TECH_TYPE_ID = ?, TECH_LOY_ID = ?, SERV_ID = ?, TECH_PROFILE_COMMENT = ?, TECH_PRICE_AVG = ?, email = ? WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($techProfile->cREATED);
		$sqlQuery->set($techProfile->cREATEDBY);
		$sqlQuery->set($techProfile->lASTUPD);
		$sqlQuery->set($techProfile->lASTUPDBY);
		$sqlQuery->set($techProfile->tECHSTAT);
		$sqlQuery->setNumber($techProfile->tECHHITID);
		$sqlQuery->setNumber($techProfile->tECHSGMNTID);
		$sqlQuery->setNumber($techProfile->tECHGRPID);
		$sqlQuery->setNumber($techProfile->tECHTYPEID);
		$sqlQuery->setNumber($techProfile->tECHLOYID);
		$sqlQuery->setNumber($techProfile->sERVID);
		$sqlQuery->set($techProfile->tECHPROFILECOMMENT);
		$sqlQuery->setNumber($techProfile->tECHPRICEAVG);
		$sqlQuery->set($techProfile->email);

		$sqlQuery->setNumber($techProfile->iD);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tech_profile';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCREATED($value){
		$sql = 'SELECT * FROM tech_profile WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCREATEDBY($value){
		$sql = 'SELECT * FROM tech_profile WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPD($value){
		$sql = 'SELECT * FROM tech_profile WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPDBY($value){
		$sql = 'SELECT * FROM tech_profile WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTECHSTAT($value){
		$sql = 'SELECT * FROM tech_profile WHERE TECH_STAT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTECHHITID($value){
		$sql = 'SELECT * FROM tech_profile WHERE TECH_HIT_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTECHSGMNTID($value){
		$sql = 'SELECT * FROM tech_profile WHERE TECH_SGMNT_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTECHGRPID($value){
		$sql = 'SELECT * FROM tech_profile WHERE TECH_GRP_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTECHTYPEID($value){
		$sql = 'SELECT * FROM tech_profile WHERE TECH_TYPE_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTECHLOYID($value){
		$sql = 'SELECT * FROM tech_profile WHERE TECH_LOY_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySERVID($value){
		$sql = 'SELECT * FROM tech_profile WHERE SERV_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTECHPROFILECOMMENT($value){
		$sql = 'SELECT * FROM tech_profile WHERE TECH_PROFILE_COMMENT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTECHPRICEAVG($value){
		$sql = 'SELECT * FROM tech_profile WHERE TECH_PRICE_AVG = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEmail($value){
		$sql = 'SELECT * FROM tech_profile WHERE email = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCREATED($value){
		$sql = 'DELETE FROM tech_profile WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCREATEDBY($value){
		$sql = 'DELETE FROM tech_profile WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPD($value){
		$sql = 'DELETE FROM tech_profile WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPDBY($value){
		$sql = 'DELETE FROM tech_profile WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTECHSTAT($value){
		$sql = 'DELETE FROM tech_profile WHERE TECH_STAT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTECHHITID($value){
		$sql = 'DELETE FROM tech_profile WHERE TECH_HIT_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTECHSGMNTID($value){
		$sql = 'DELETE FROM tech_profile WHERE TECH_SGMNT_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTECHGRPID($value){
		$sql = 'DELETE FROM tech_profile WHERE TECH_GRP_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTECHTYPEID($value){
		$sql = 'DELETE FROM tech_profile WHERE TECH_TYPE_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTECHLOYID($value){
		$sql = 'DELETE FROM tech_profile WHERE TECH_LOY_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySERVID($value){
		$sql = 'DELETE FROM tech_profile WHERE SERV_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTECHPROFILECOMMENT($value){
		$sql = 'DELETE FROM tech_profile WHERE TECH_PROFILE_COMMENT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTECHPRICEAVG($value){
		$sql = 'DELETE FROM tech_profile WHERE TECH_PRICE_AVG = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEmail($value){
		$sql = 'DELETE FROM tech_profile WHERE email = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TechProfileMySql 
	 */
	protected function readRow($row){
		$techProfile = new TechProfile();
		
		$techProfile->iD = $row['ID'];
		$techProfile->cREATED = $row['CREATED'];
		$techProfile->cREATEDBY = $row['CREATED_BY'];
		$techProfile->lASTUPD = $row['LAST_UPD'];
		$techProfile->lASTUPDBY = $row['LAST_UPD_BY'];
		$techProfile->tECHSTAT = $row['TECH_STAT'];
		$techProfile->tECHHITID = $row['TECH_HIT_ID'];
		$techProfile->tECHSGMNTID = $row['TECH_SGMNT_ID'];
		$techProfile->tECHGRPID = $row['TECH_GRP_ID'];
		$techProfile->tECHTYPEID = $row['TECH_TYPE_ID'];
		$techProfile->tECHLOYID = $row['TECH_LOY_ID'];
		$techProfile->sERVID = $row['SERV_ID'];
		$techProfile->tECHPROFILECOMMENT = $row['TECH_PROFILE_COMMENT'];
		$techProfile->tECHPRICEAVG = $row['TECH_PRICE_AVG'];
		$techProfile->email = $row['email'];

		return $techProfile;
	}
	
	protected function getList($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRow($tab[$i]);
		}
		return $ret;
	}
	
	/**
	 * Get row
	 *
	 * @return TechProfileMySql 
	 */
	protected function getRow($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		if(count($tab)==0){
			return null;
		}
		return $this->readRow($tab[0]);		
	}
	
	/**
	 * Execute sql query
	 */
	protected function execute($sqlQuery){
		return QueryExecutor::execute($sqlQuery);
	}
	
		
	/**
	 * Execute sql query
	 */
	protected function executeUpdate($sqlQuery){
		return QueryExecutor::executeUpdate($sqlQuery);
	}

	/**
	 * Query for one row and one column
	 */
	protected function querySingleResult($sqlQuery){
		return QueryExecutor::queryForString($sqlQuery);
	}

	/**
	 * Insert row to table
	 */
	protected function executeInsert($sqlQuery){
		return QueryExecutor::executeInsert($sqlQuery);
	}
}
?>