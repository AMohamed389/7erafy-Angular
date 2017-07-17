<?php
/**
 * Class that operate on table 'tech_hit_log'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:18
 */
class TechHitLogMySqlDAO implements TechHitLogDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TechHitLogMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tech_hit_log WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tech_hit_log';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tech_hit_log ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param techHitLog primary key
 	 */
	public function delete($ID){
		$sql = 'DELETE FROM tech_hit_log WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($ID);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TechHitLogMySql techHitLog
 	 */
	public function insert($techHitLog){
		$sql = 'INSERT INTO tech_hit_log (CREATED, CREATED_BY, LAST_UPD, LAST_UPD_BY, TECH_HIT_ID, BTN_ID, SRCH_KEY_WRD_ID, VIEW_ID, UPLD_ID, LOGIN_VIEW_ID, CST_ID) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($techHitLog->cREATED);
		$sqlQuery->set($techHitLog->cREATEDBY);
		$sqlQuery->set($techHitLog->lASTUPD);
		$sqlQuery->set($techHitLog->lASTUPDBY);
		$sqlQuery->setNumber($techHitLog->tECHHITID);
		$sqlQuery->setNumber($techHitLog->bTNID);
		$sqlQuery->setNumber($techHitLog->sRCHKEYWRDID);
		$sqlQuery->setNumber($techHitLog->vIEWID);
		$sqlQuery->setNumber($techHitLog->uPLDID);
		$sqlQuery->setNumber($techHitLog->lOGINVIEWID);
		$sqlQuery->setNumber($techHitLog->cSTID);

		$id = $this->executeInsert($sqlQuery);	
		$techHitLog->iD = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TechHitLogMySql techHitLog
 	 */
	public function update($techHitLog){
		$sql = 'UPDATE tech_hit_log SET CREATED = ?, CREATED_BY = ?, LAST_UPD = ?, LAST_UPD_BY = ?, TECH_HIT_ID = ?, BTN_ID = ?, SRCH_KEY_WRD_ID = ?, VIEW_ID = ?, UPLD_ID = ?, LOGIN_VIEW_ID = ?, CST_ID = ? WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($techHitLog->cREATED);
		$sqlQuery->set($techHitLog->cREATEDBY);
		$sqlQuery->set($techHitLog->lASTUPD);
		$sqlQuery->set($techHitLog->lASTUPDBY);
		$sqlQuery->setNumber($techHitLog->tECHHITID);
		$sqlQuery->setNumber($techHitLog->bTNID);
		$sqlQuery->setNumber($techHitLog->sRCHKEYWRDID);
		$sqlQuery->setNumber($techHitLog->vIEWID);
		$sqlQuery->setNumber($techHitLog->uPLDID);
		$sqlQuery->setNumber($techHitLog->lOGINVIEWID);
		$sqlQuery->setNumber($techHitLog->cSTID);

		$sqlQuery->setNumber($techHitLog->iD);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tech_hit_log';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCREATED($value){
		$sql = 'SELECT * FROM tech_hit_log WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCREATEDBY($value){
		$sql = 'SELECT * FROM tech_hit_log WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPD($value){
		$sql = 'SELECT * FROM tech_hit_log WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPDBY($value){
		$sql = 'SELECT * FROM tech_hit_log WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTECHHITID($value){
		$sql = 'SELECT * FROM tech_hit_log WHERE TECH_HIT_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByBTNID($value){
		$sql = 'SELECT * FROM tech_hit_log WHERE BTN_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySRCHKEYWRDID($value){
		$sql = 'SELECT * FROM tech_hit_log WHERE SRCH_KEY_WRD_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByVIEWID($value){
		$sql = 'SELECT * FROM tech_hit_log WHERE VIEW_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUPLDID($value){
		$sql = 'SELECT * FROM tech_hit_log WHERE UPLD_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLOGINVIEWID($value){
		$sql = 'SELECT * FROM tech_hit_log WHERE LOGIN_VIEW_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCSTID($value){
		$sql = 'SELECT * FROM tech_hit_log WHERE CST_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCREATED($value){
		$sql = 'DELETE FROM tech_hit_log WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCREATEDBY($value){
		$sql = 'DELETE FROM tech_hit_log WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPD($value){
		$sql = 'DELETE FROM tech_hit_log WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPDBY($value){
		$sql = 'DELETE FROM tech_hit_log WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTECHHITID($value){
		$sql = 'DELETE FROM tech_hit_log WHERE TECH_HIT_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByBTNID($value){
		$sql = 'DELETE FROM tech_hit_log WHERE BTN_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySRCHKEYWRDID($value){
		$sql = 'DELETE FROM tech_hit_log WHERE SRCH_KEY_WRD_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByVIEWID($value){
		$sql = 'DELETE FROM tech_hit_log WHERE VIEW_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUPLDID($value){
		$sql = 'DELETE FROM tech_hit_log WHERE UPLD_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLOGINVIEWID($value){
		$sql = 'DELETE FROM tech_hit_log WHERE LOGIN_VIEW_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCSTID($value){
		$sql = 'DELETE FROM tech_hit_log WHERE CST_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TechHitLogMySql 
	 */
	protected function readRow($row){
		$techHitLog = new TechHitLog();
		
		$techHitLog->iD = $row['ID'];
		$techHitLog->cREATED = $row['CREATED'];
		$techHitLog->cREATEDBY = $row['CREATED_BY'];
		$techHitLog->lASTUPD = $row['LAST_UPD'];
		$techHitLog->lASTUPDBY = $row['LAST_UPD_BY'];
		$techHitLog->tECHHITID = $row['TECH_HIT_ID'];
		$techHitLog->bTNID = $row['BTN_ID'];
		$techHitLog->sRCHKEYWRDID = $row['SRCH_KEY_WRD_ID'];
		$techHitLog->vIEWID = $row['VIEW_ID'];
		$techHitLog->uPLDID = $row['UPLD_ID'];
		$techHitLog->lOGINVIEWID = $row['LOGIN_VIEW_ID'];
		$techHitLog->cSTID = $row['CST_ID'];

		return $techHitLog;
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
	 * @return TechHitLogMySql 
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