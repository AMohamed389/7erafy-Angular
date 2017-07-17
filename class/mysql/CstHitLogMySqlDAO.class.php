<?php
/**
 * Class that operate on table 'cst_hit_log'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:17
 */
class CstHitLogMySqlDAO implements CstHitLogDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return CstHitLogMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM cst_hit_log WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM cst_hit_log';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM cst_hit_log ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param cstHitLog primary key
 	 */
	public function delete($ID){
		$sql = 'DELETE FROM cst_hit_log WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($ID);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CstHitLogMySql cstHitLog
 	 */
	public function insert($cstHitLog){
		$sql = 'INSERT INTO cst_hit_log (CREATED, CREATED_BY, LAST_UPD, LAST_UPD_BY, CST_HIT_ID, BTN_ID, SRCH_KEY_WRD_ID, VIEW_ID, UPLD_ID, LOGIN_VIEW_ID, TECH_ID) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($cstHitLog->cREATED);
		$sqlQuery->set($cstHitLog->cREATEDBY);
		$sqlQuery->set($cstHitLog->lASTUPD);
		$sqlQuery->set($cstHitLog->lASTUPDBY);
		$sqlQuery->setNumber($cstHitLog->cSTHITID);
		$sqlQuery->setNumber($cstHitLog->bTNID);
		$sqlQuery->setNumber($cstHitLog->sRCHKEYWRDID);
		$sqlQuery->setNumber($cstHitLog->vIEWID);
		$sqlQuery->setNumber($cstHitLog->uPLDID);
		$sqlQuery->setNumber($cstHitLog->lOGINVIEWID);
		$sqlQuery->setNumber($cstHitLog->tECHID);

		$id = $this->executeInsert($sqlQuery);	
		$cstHitLog->iD = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param CstHitLogMySql cstHitLog
 	 */
	public function update($cstHitLog){
		$sql = 'UPDATE cst_hit_log SET CREATED = ?, CREATED_BY = ?, LAST_UPD = ?, LAST_UPD_BY = ?, CST_HIT_ID = ?, BTN_ID = ?, SRCH_KEY_WRD_ID = ?, VIEW_ID = ?, UPLD_ID = ?, LOGIN_VIEW_ID = ?, TECH_ID = ? WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($cstHitLog->cREATED);
		$sqlQuery->set($cstHitLog->cREATEDBY);
		$sqlQuery->set($cstHitLog->lASTUPD);
		$sqlQuery->set($cstHitLog->lASTUPDBY);
		$sqlQuery->setNumber($cstHitLog->cSTHITID);
		$sqlQuery->setNumber($cstHitLog->bTNID);
		$sqlQuery->setNumber($cstHitLog->sRCHKEYWRDID);
		$sqlQuery->setNumber($cstHitLog->vIEWID);
		$sqlQuery->setNumber($cstHitLog->uPLDID);
		$sqlQuery->setNumber($cstHitLog->lOGINVIEWID);
		$sqlQuery->setNumber($cstHitLog->tECHID);

		$sqlQuery->setNumber($cstHitLog->iD);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM cst_hit_log';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCREATED($value){
		$sql = 'SELECT * FROM cst_hit_log WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCREATEDBY($value){
		$sql = 'SELECT * FROM cst_hit_log WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPD($value){
		$sql = 'SELECT * FROM cst_hit_log WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPDBY($value){
		$sql = 'SELECT * FROM cst_hit_log WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCSTHITID($value){
		$sql = 'SELECT * FROM cst_hit_log WHERE CST_HIT_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByBTNID($value){
		$sql = 'SELECT * FROM cst_hit_log WHERE BTN_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySRCHKEYWRDID($value){
		$sql = 'SELECT * FROM cst_hit_log WHERE SRCH_KEY_WRD_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByVIEWID($value){
		$sql = 'SELECT * FROM cst_hit_log WHERE VIEW_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUPLDID($value){
		$sql = 'SELECT * FROM cst_hit_log WHERE UPLD_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLOGINVIEWID($value){
		$sql = 'SELECT * FROM cst_hit_log WHERE LOGIN_VIEW_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTECHID($value){
		$sql = 'SELECT * FROM cst_hit_log WHERE TECH_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCREATED($value){
		$sql = 'DELETE FROM cst_hit_log WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCREATEDBY($value){
		$sql = 'DELETE FROM cst_hit_log WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPD($value){
		$sql = 'DELETE FROM cst_hit_log WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPDBY($value){
		$sql = 'DELETE FROM cst_hit_log WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCSTHITID($value){
		$sql = 'DELETE FROM cst_hit_log WHERE CST_HIT_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByBTNID($value){
		$sql = 'DELETE FROM cst_hit_log WHERE BTN_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySRCHKEYWRDID($value){
		$sql = 'DELETE FROM cst_hit_log WHERE SRCH_KEY_WRD_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByVIEWID($value){
		$sql = 'DELETE FROM cst_hit_log WHERE VIEW_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUPLDID($value){
		$sql = 'DELETE FROM cst_hit_log WHERE UPLD_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLOGINVIEWID($value){
		$sql = 'DELETE FROM cst_hit_log WHERE LOGIN_VIEW_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTECHID($value){
		$sql = 'DELETE FROM cst_hit_log WHERE TECH_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return CstHitLogMySql 
	 */
	protected function readRow($row){
		$cstHitLog = new CstHitLog();
		
		$cstHitLog->iD = $row['ID'];
		$cstHitLog->cREATED = $row['CREATED'];
		$cstHitLog->cREATEDBY = $row['CREATED_BY'];
		$cstHitLog->lASTUPD = $row['LAST_UPD'];
		$cstHitLog->lASTUPDBY = $row['LAST_UPD_BY'];
		$cstHitLog->cSTHITID = $row['CST_HIT_ID'];
		$cstHitLog->bTNID = $row['BTN_ID'];
		$cstHitLog->sRCHKEYWRDID = $row['SRCH_KEY_WRD_ID'];
		$cstHitLog->vIEWID = $row['VIEW_ID'];
		$cstHitLog->uPLDID = $row['UPLD_ID'];
		$cstHitLog->lOGINVIEWID = $row['LOGIN_VIEW_ID'];
		$cstHitLog->tECHID = $row['TECH_ID'];

		return $cstHitLog;
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
	 * @return CstHitLogMySql 
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