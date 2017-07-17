<?php
/**
 * Class that operate on table 'loy'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:17
 */
class LoyMySqlDAO implements LoyDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return LoyMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM loy WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM loy';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM loy ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param loy primary key
 	 */
	public function delete($ID){
		$sql = 'DELETE FROM loy WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($ID);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param LoyMySql loy
 	 */
	public function insert($loy){
		$sql = 'INSERT INTO loy (CREATED, CREATED_BY, LAST_UPD, LAST_UPD_BY, CST_ID, CST_HIT_ID, CST_SGMNT_ID, GCST_GRP_ID, CST_TYPE_ID, LOY_PRG_ID, ENRLMNT_DT, LOY_STAT, LOY_END_DT, LOY_COMMENT) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($loy->cREATED);
		$sqlQuery->set($loy->cREATEDBY);
		$sqlQuery->set($loy->lASTUPD);
		$sqlQuery->set($loy->lASTUPDBY);
		$sqlQuery->setNumber($loy->cSTID);
		$sqlQuery->setNumber($loy->cSTHITID);
		$sqlQuery->setNumber($loy->cSTSGMNTID);
		$sqlQuery->setNumber($loy->gCSTGRPID);
		$sqlQuery->setNumber($loy->cSTTYPEID);
		$sqlQuery->setNumber($loy->lOYPRGID);
		$sqlQuery->set($loy->eNRLMNTDT);
		$sqlQuery->set($loy->lOYSTAT);
		$sqlQuery->set($loy->lOYENDDT);
		$sqlQuery->set($loy->lOYCOMMENT);

		$id = $this->executeInsert($sqlQuery);	
		$loy->iD = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param LoyMySql loy
 	 */
	public function update($loy){
		$sql = 'UPDATE loy SET CREATED = ?, CREATED_BY = ?, LAST_UPD = ?, LAST_UPD_BY = ?, CST_ID = ?, CST_HIT_ID = ?, CST_SGMNT_ID = ?, GCST_GRP_ID = ?, CST_TYPE_ID = ?, LOY_PRG_ID = ?, ENRLMNT_DT = ?, LOY_STAT = ?, LOY_END_DT = ?, LOY_COMMENT = ? WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($loy->cREATED);
		$sqlQuery->set($loy->cREATEDBY);
		$sqlQuery->set($loy->lASTUPD);
		$sqlQuery->set($loy->lASTUPDBY);
		$sqlQuery->setNumber($loy->cSTID);
		$sqlQuery->setNumber($loy->cSTHITID);
		$sqlQuery->setNumber($loy->cSTSGMNTID);
		$sqlQuery->setNumber($loy->gCSTGRPID);
		$sqlQuery->setNumber($loy->cSTTYPEID);
		$sqlQuery->setNumber($loy->lOYPRGID);
		$sqlQuery->set($loy->eNRLMNTDT);
		$sqlQuery->set($loy->lOYSTAT);
		$sqlQuery->set($loy->lOYENDDT);
		$sqlQuery->set($loy->lOYCOMMENT);

		$sqlQuery->setNumber($loy->iD);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM loy';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCREATED($value){
		$sql = 'SELECT * FROM loy WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCREATEDBY($value){
		$sql = 'SELECT * FROM loy WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPD($value){
		$sql = 'SELECT * FROM loy WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPDBY($value){
		$sql = 'SELECT * FROM loy WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCSTID($value){
		$sql = 'SELECT * FROM loy WHERE CST_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCSTHITID($value){
		$sql = 'SELECT * FROM loy WHERE CST_HIT_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCSTSGMNTID($value){
		$sql = 'SELECT * FROM loy WHERE CST_SGMNT_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByGCSTGRPID($value){
		$sql = 'SELECT * FROM loy WHERE GCST_GRP_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCSTTYPEID($value){
		$sql = 'SELECT * FROM loy WHERE CST_TYPE_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLOYPRGID($value){
		$sql = 'SELECT * FROM loy WHERE LOY_PRG_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByENRLMNTDT($value){
		$sql = 'SELECT * FROM loy WHERE ENRLMNT_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLOYSTAT($value){
		$sql = 'SELECT * FROM loy WHERE LOY_STAT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLOYENDDT($value){
		$sql = 'SELECT * FROM loy WHERE LOY_END_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLOYCOMMENT($value){
		$sql = 'SELECT * FROM loy WHERE LOY_COMMENT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCREATED($value){
		$sql = 'DELETE FROM loy WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCREATEDBY($value){
		$sql = 'DELETE FROM loy WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPD($value){
		$sql = 'DELETE FROM loy WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPDBY($value){
		$sql = 'DELETE FROM loy WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCSTID($value){
		$sql = 'DELETE FROM loy WHERE CST_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCSTHITID($value){
		$sql = 'DELETE FROM loy WHERE CST_HIT_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCSTSGMNTID($value){
		$sql = 'DELETE FROM loy WHERE CST_SGMNT_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByGCSTGRPID($value){
		$sql = 'DELETE FROM loy WHERE GCST_GRP_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCSTTYPEID($value){
		$sql = 'DELETE FROM loy WHERE CST_TYPE_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLOYPRGID($value){
		$sql = 'DELETE FROM loy WHERE LOY_PRG_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByENRLMNTDT($value){
		$sql = 'DELETE FROM loy WHERE ENRLMNT_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLOYSTAT($value){
		$sql = 'DELETE FROM loy WHERE LOY_STAT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLOYENDDT($value){
		$sql = 'DELETE FROM loy WHERE LOY_END_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLOYCOMMENT($value){
		$sql = 'DELETE FROM loy WHERE LOY_COMMENT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return LoyMySql 
	 */
	protected function readRow($row){
		$loy = new Loy();
		
		$loy->iD = $row['ID'];
		$loy->cREATED = $row['CREATED'];
		$loy->cREATEDBY = $row['CREATED_BY'];
		$loy->lASTUPD = $row['LAST_UPD'];
		$loy->lASTUPDBY = $row['LAST_UPD_BY'];
		$loy->cSTID = $row['CST_ID'];
		$loy->cSTHITID = $row['CST_HIT_ID'];
		$loy->cSTSGMNTID = $row['CST_SGMNT_ID'];
		$loy->gCSTGRPID = $row['GCST_GRP_ID'];
		$loy->cSTTYPEID = $row['CST_TYPE_ID'];
		$loy->lOYPRGID = $row['LOY_PRG_ID'];
		$loy->eNRLMNTDT = $row['ENRLMNT_DT'];
		$loy->lOYSTAT = $row['LOY_STAT'];
		$loy->lOYENDDT = $row['LOY_END_DT'];
		$loy->lOYCOMMENT = $row['LOY_COMMENT'];

		return $loy;
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
	 * @return LoyMySql 
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