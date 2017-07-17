<?php
/**
 * Class that operate on table 'cst_tech_req_log'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:17
 */
class CstTechReqLogMySqlDAO implements CstTechReqLogDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return CstTechReqLogMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM cst_tech_req_log WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM cst_tech_req_log';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM cst_tech_req_log ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param cstTechReqLog primary key
 	 */
	public function delete($ID){
		$sql = 'DELETE FROM cst_tech_req_log WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($ID);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CstTechReqLogMySql cstTechReqLog
 	 */
	public function insert($cstTechReqLog){
		$sql = 'INSERT INTO cst_tech_req_log (CREATED, CREATED_BY, LAST_UPD, LAST_UPD_BY, CST_TECH_REQ_ID, TECH_ID, TECH_REQ_APPRV, TECH_REQ_APPRV_DT, END_DT, TECH_REQ_APPRV_PRICE) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($cstTechReqLog->cREATED);
		$sqlQuery->set($cstTechReqLog->cREATEDBY);
		$sqlQuery->set($cstTechReqLog->lASTUPD);
		$sqlQuery->set($cstTechReqLog->lASTUPDBY);
		$sqlQuery->setNumber($cstTechReqLog->cSTTECHREQID);
		$sqlQuery->setNumber($cstTechReqLog->tECHID);
		$sqlQuery->set($cstTechReqLog->tECHREQAPPRV);
		$sqlQuery->set($cstTechReqLog->tECHREQAPPRVDT);
		$sqlQuery->set($cstTechReqLog->eNDDT);
		$sqlQuery->setNumber($cstTechReqLog->tECHREQAPPRVPRICE);

		$id = $this->executeInsert($sqlQuery);	
		$cstTechReqLog->iD = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param CstTechReqLogMySql cstTechReqLog
 	 */
	public function update($cstTechReqLog){
		$sql = 'UPDATE cst_tech_req_log SET CREATED = ?, CREATED_BY = ?, LAST_UPD = ?, LAST_UPD_BY = ?, CST_TECH_REQ_ID = ?, TECH_ID = ?, TECH_REQ_APPRV = ?, TECH_REQ_APPRV_DT = ?, END_DT = ?, TECH_REQ_APPRV_PRICE = ? WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($cstTechReqLog->cREATED);
		$sqlQuery->set($cstTechReqLog->cREATEDBY);
		$sqlQuery->set($cstTechReqLog->lASTUPD);
		$sqlQuery->set($cstTechReqLog->lASTUPDBY);
		$sqlQuery->setNumber($cstTechReqLog->cSTTECHREQID);
		$sqlQuery->setNumber($cstTechReqLog->tECHID);
		$sqlQuery->set($cstTechReqLog->tECHREQAPPRV);
		$sqlQuery->set($cstTechReqLog->tECHREQAPPRVDT);
		$sqlQuery->set($cstTechReqLog->eNDDT);
		$sqlQuery->setNumber($cstTechReqLog->tECHREQAPPRVPRICE);

		$sqlQuery->setNumber($cstTechReqLog->iD);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM cst_tech_req_log';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCREATED($value){
		$sql = 'SELECT * FROM cst_tech_req_log WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCREATEDBY($value){
		$sql = 'SELECT * FROM cst_tech_req_log WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPD($value){
		$sql = 'SELECT * FROM cst_tech_req_log WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPDBY($value){
		$sql = 'SELECT * FROM cst_tech_req_log WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCSTTECHREQID($value){
		$sql = 'SELECT * FROM cst_tech_req_log WHERE CST_TECH_REQ_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTECHID($value){
		$sql = 'SELECT * FROM cst_tech_req_log WHERE TECH_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTECHREQAPPRV($value){
		$sql = 'SELECT * FROM cst_tech_req_log WHERE TECH_REQ_APPRV = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTECHREQAPPRVDT($value){
		$sql = 'SELECT * FROM cst_tech_req_log WHERE TECH_REQ_APPRV_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByENDDT($value){
		$sql = 'SELECT * FROM cst_tech_req_log WHERE END_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTECHREQAPPRVPRICE($value){
		$sql = 'SELECT * FROM cst_tech_req_log WHERE TECH_REQ_APPRV_PRICE = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCREATED($value){
		$sql = 'DELETE FROM cst_tech_req_log WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCREATEDBY($value){
		$sql = 'DELETE FROM cst_tech_req_log WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPD($value){
		$sql = 'DELETE FROM cst_tech_req_log WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPDBY($value){
		$sql = 'DELETE FROM cst_tech_req_log WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCSTTECHREQID($value){
		$sql = 'DELETE FROM cst_tech_req_log WHERE CST_TECH_REQ_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTECHID($value){
		$sql = 'DELETE FROM cst_tech_req_log WHERE TECH_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTECHREQAPPRV($value){
		$sql = 'DELETE FROM cst_tech_req_log WHERE TECH_REQ_APPRV = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTECHREQAPPRVDT($value){
		$sql = 'DELETE FROM cst_tech_req_log WHERE TECH_REQ_APPRV_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByENDDT($value){
		$sql = 'DELETE FROM cst_tech_req_log WHERE END_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTECHREQAPPRVPRICE($value){
		$sql = 'DELETE FROM cst_tech_req_log WHERE TECH_REQ_APPRV_PRICE = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return CstTechReqLogMySql 
	 */
	protected function readRow($row){
		$cstTechReqLog = new CstTechReqLog();
		
		$cstTechReqLog->iD = $row['ID'];
		$cstTechReqLog->cREATED = $row['CREATED'];
		$cstTechReqLog->cREATEDBY = $row['CREATED_BY'];
		$cstTechReqLog->lASTUPD = $row['LAST_UPD'];
		$cstTechReqLog->lASTUPDBY = $row['LAST_UPD_BY'];
		$cstTechReqLog->cSTTECHREQID = $row['CST_TECH_REQ_ID'];
		$cstTechReqLog->tECHID = $row['TECH_ID'];
		$cstTechReqLog->tECHREQAPPRV = $row['TECH_REQ_APPRV'];
		$cstTechReqLog->tECHREQAPPRVDT = $row['TECH_REQ_APPRV_DT'];
		$cstTechReqLog->eNDDT = $row['END_DT'];
		$cstTechReqLog->tECHREQAPPRVPRICE = $row['TECH_REQ_APPRV_PRICE'];

		return $cstTechReqLog;
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
	 * @return CstTechReqLogMySql 
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