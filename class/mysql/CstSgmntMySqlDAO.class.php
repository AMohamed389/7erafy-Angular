<?php
/**
 * Class that operate on table 'cst_sgmnt'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:17
 */
class CstSgmntMySqlDAO implements CstSgmntDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return CstSgmntMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM cst_sgmnt WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM cst_sgmnt';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM cst_sgmnt ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param cstSgmnt primary key
 	 */
	public function delete($ID){
		$sql = 'DELETE FROM cst_sgmnt WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($ID);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CstSgmntMySql cstSgmnt
 	 */
	public function insert($cstSgmnt){
		$sql = 'INSERT INTO cst_sgmnt (CREATED, CREATED_BY, LAST_UPD, LAST_UPD_BY, SGMNT_NAME, SGMNT_STAT, SGMNT_START_DT, SGMNT_END_DT, SGMNT_COMMENT) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($cstSgmnt->cREATED);
		$sqlQuery->set($cstSgmnt->cREATEDBY);
		$sqlQuery->set($cstSgmnt->lASTUPD);
		$sqlQuery->set($cstSgmnt->lASTUPDBY);
		$sqlQuery->set($cstSgmnt->sGMNTNAME);
		$sqlQuery->set($cstSgmnt->sGMNTSTAT);
		$sqlQuery->set($cstSgmnt->sGMNTSTARTDT);
		$sqlQuery->set($cstSgmnt->sGMNTENDDT);
		$sqlQuery->set($cstSgmnt->sGMNTCOMMENT);

		$id = $this->executeInsert($sqlQuery);	
		$cstSgmnt->iD = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param CstSgmntMySql cstSgmnt
 	 */
	public function update($cstSgmnt){
		$sql = 'UPDATE cst_sgmnt SET CREATED = ?, CREATED_BY = ?, LAST_UPD = ?, LAST_UPD_BY = ?, SGMNT_NAME = ?, SGMNT_STAT = ?, SGMNT_START_DT = ?, SGMNT_END_DT = ?, SGMNT_COMMENT = ? WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($cstSgmnt->cREATED);
		$sqlQuery->set($cstSgmnt->cREATEDBY);
		$sqlQuery->set($cstSgmnt->lASTUPD);
		$sqlQuery->set($cstSgmnt->lASTUPDBY);
		$sqlQuery->set($cstSgmnt->sGMNTNAME);
		$sqlQuery->set($cstSgmnt->sGMNTSTAT);
		$sqlQuery->set($cstSgmnt->sGMNTSTARTDT);
		$sqlQuery->set($cstSgmnt->sGMNTENDDT);
		$sqlQuery->set($cstSgmnt->sGMNTCOMMENT);

		$sqlQuery->setNumber($cstSgmnt->iD);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM cst_sgmnt';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCREATED($value){
		$sql = 'SELECT * FROM cst_sgmnt WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCREATEDBY($value){
		$sql = 'SELECT * FROM cst_sgmnt WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPD($value){
		$sql = 'SELECT * FROM cst_sgmnt WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPDBY($value){
		$sql = 'SELECT * FROM cst_sgmnt WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySGMNTNAME($value){
		$sql = 'SELECT * FROM cst_sgmnt WHERE SGMNT_NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySGMNTSTAT($value){
		$sql = 'SELECT * FROM cst_sgmnt WHERE SGMNT_STAT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySGMNTSTARTDT($value){
		$sql = 'SELECT * FROM cst_sgmnt WHERE SGMNT_START_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySGMNTENDDT($value){
		$sql = 'SELECT * FROM cst_sgmnt WHERE SGMNT_END_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySGMNTCOMMENT($value){
		$sql = 'SELECT * FROM cst_sgmnt WHERE SGMNT_COMMENT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCREATED($value){
		$sql = 'DELETE FROM cst_sgmnt WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCREATEDBY($value){
		$sql = 'DELETE FROM cst_sgmnt WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPD($value){
		$sql = 'DELETE FROM cst_sgmnt WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPDBY($value){
		$sql = 'DELETE FROM cst_sgmnt WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySGMNTNAME($value){
		$sql = 'DELETE FROM cst_sgmnt WHERE SGMNT_NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySGMNTSTAT($value){
		$sql = 'DELETE FROM cst_sgmnt WHERE SGMNT_STAT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySGMNTSTARTDT($value){
		$sql = 'DELETE FROM cst_sgmnt WHERE SGMNT_START_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySGMNTENDDT($value){
		$sql = 'DELETE FROM cst_sgmnt WHERE SGMNT_END_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySGMNTCOMMENT($value){
		$sql = 'DELETE FROM cst_sgmnt WHERE SGMNT_COMMENT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return CstSgmntMySql 
	 */
	protected function readRow($row){
		$cstSgmnt = new CstSgmnt();
		
		$cstSgmnt->iD = $row['ID'];
		$cstSgmnt->cREATED = $row['CREATED'];
		$cstSgmnt->cREATEDBY = $row['CREATED_BY'];
		$cstSgmnt->lASTUPD = $row['LAST_UPD'];
		$cstSgmnt->lASTUPDBY = $row['LAST_UPD_BY'];
		$cstSgmnt->sGMNTNAME = $row['SGMNT_NAME'];
		$cstSgmnt->sGMNTSTAT = $row['SGMNT_STAT'];
		$cstSgmnt->sGMNTSTARTDT = $row['SGMNT_START_DT'];
		$cstSgmnt->sGMNTENDDT = $row['SGMNT_END_DT'];
		$cstSgmnt->sGMNTCOMMENT = $row['SGMNT_COMMENT'];

		return $cstSgmnt;
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
	 * @return CstSgmntMySql 
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