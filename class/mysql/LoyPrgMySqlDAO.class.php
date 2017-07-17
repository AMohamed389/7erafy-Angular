<?php
/**
 * Class that operate on table 'loy_prg'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:17
 */
class LoyPrgMySqlDAO implements LoyPrgDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return LoyPrgMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM loy_prg WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM loy_prg';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM loy_prg ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param loyPrg primary key
 	 */
	public function delete($ID){
		$sql = 'DELETE FROM loy_prg WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($ID);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param LoyPrgMySql loyPrg
 	 */
	public function insert($loyPrg){
		$sql = 'INSERT INTO loy_prg (CREATED, CREATED_BY, LAST_UPD, LAST_UPD_BY, LOY_PRG_NAME, LOY_PRG_STAT, LOY_PRG_SATRT_DT, LOY_PRG_END_DT, LOY_PRG_COMMENT) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($loyPrg->cREATED);
		$sqlQuery->set($loyPrg->cREATEDBY);
		$sqlQuery->set($loyPrg->lASTUPD);
		$sqlQuery->set($loyPrg->lASTUPDBY);
		$sqlQuery->set($loyPrg->lOYPRGNAME);
		$sqlQuery->set($loyPrg->lOYPRGSTAT);
		$sqlQuery->set($loyPrg->lOYPRGSATRTDT);
		$sqlQuery->set($loyPrg->lOYPRGENDDT);
		$sqlQuery->set($loyPrg->lOYPRGCOMMENT);

		$id = $this->executeInsert($sqlQuery);	
		$loyPrg->iD = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param LoyPrgMySql loyPrg
 	 */
	public function update($loyPrg){
		$sql = 'UPDATE loy_prg SET CREATED = ?, CREATED_BY = ?, LAST_UPD = ?, LAST_UPD_BY = ?, LOY_PRG_NAME = ?, LOY_PRG_STAT = ?, LOY_PRG_SATRT_DT = ?, LOY_PRG_END_DT = ?, LOY_PRG_COMMENT = ? WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($loyPrg->cREATED);
		$sqlQuery->set($loyPrg->cREATEDBY);
		$sqlQuery->set($loyPrg->lASTUPD);
		$sqlQuery->set($loyPrg->lASTUPDBY);
		$sqlQuery->set($loyPrg->lOYPRGNAME);
		$sqlQuery->set($loyPrg->lOYPRGSTAT);
		$sqlQuery->set($loyPrg->lOYPRGSATRTDT);
		$sqlQuery->set($loyPrg->lOYPRGENDDT);
		$sqlQuery->set($loyPrg->lOYPRGCOMMENT);

		$sqlQuery->setNumber($loyPrg->iD);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM loy_prg';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCREATED($value){
		$sql = 'SELECT * FROM loy_prg WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCREATEDBY($value){
		$sql = 'SELECT * FROM loy_prg WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPD($value){
		$sql = 'SELECT * FROM loy_prg WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPDBY($value){
		$sql = 'SELECT * FROM loy_prg WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLOYPRGNAME($value){
		$sql = 'SELECT * FROM loy_prg WHERE LOY_PRG_NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLOYPRGSTAT($value){
		$sql = 'SELECT * FROM loy_prg WHERE LOY_PRG_STAT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLOYPRGSATRTDT($value){
		$sql = 'SELECT * FROM loy_prg WHERE LOY_PRG_SATRT_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLOYPRGENDDT($value){
		$sql = 'SELECT * FROM loy_prg WHERE LOY_PRG_END_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLOYPRGCOMMENT($value){
		$sql = 'SELECT * FROM loy_prg WHERE LOY_PRG_COMMENT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCREATED($value){
		$sql = 'DELETE FROM loy_prg WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCREATEDBY($value){
		$sql = 'DELETE FROM loy_prg WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPD($value){
		$sql = 'DELETE FROM loy_prg WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPDBY($value){
		$sql = 'DELETE FROM loy_prg WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLOYPRGNAME($value){
		$sql = 'DELETE FROM loy_prg WHERE LOY_PRG_NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLOYPRGSTAT($value){
		$sql = 'DELETE FROM loy_prg WHERE LOY_PRG_STAT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLOYPRGSATRTDT($value){
		$sql = 'DELETE FROM loy_prg WHERE LOY_PRG_SATRT_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLOYPRGENDDT($value){
		$sql = 'DELETE FROM loy_prg WHERE LOY_PRG_END_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLOYPRGCOMMENT($value){
		$sql = 'DELETE FROM loy_prg WHERE LOY_PRG_COMMENT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return LoyPrgMySql 
	 */
	protected function readRow($row){
		$loyPrg = new LoyPrg();
		
		$loyPrg->iD = $row['ID'];
		$loyPrg->cREATED = $row['CREATED'];
		$loyPrg->cREATEDBY = $row['CREATED_BY'];
		$loyPrg->lASTUPD = $row['LAST_UPD'];
		$loyPrg->lASTUPDBY = $row['LAST_UPD_BY'];
		$loyPrg->lOYPRGNAME = $row['LOY_PRG_NAME'];
		$loyPrg->lOYPRGSTAT = $row['LOY_PRG_STAT'];
		$loyPrg->lOYPRGSATRTDT = $row['LOY_PRG_SATRT_DT'];
		$loyPrg->lOYPRGENDDT = $row['LOY_PRG_END_DT'];
		$loyPrg->lOYPRGCOMMENT = $row['LOY_PRG_COMMENT'];

		return $loyPrg;
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
	 * @return LoyPrgMySql 
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