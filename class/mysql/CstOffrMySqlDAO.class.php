<?php
/**
 * Class that operate on table 'cst_offr'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:17
 */
class CstOffrMySqlDAO implements CstOffrDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return CstOffrMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM cst_offr WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM cst_offr';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM cst_offr ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param cstOffr primary key
 	 */
	public function delete($ID){
		$sql = 'DELETE FROM cst_offr WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($ID);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CstOffrMySql cstOffr
 	 */
	public function insert($cstOffr){
		$sql = 'INSERT INTO cst_offr (CREATED, CREATED_BY, LAST_UPD, LAST_UPD_BY, CST_ID, OFFR_ID, START_DT, END_DT, CST_OFFR_STAT) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($cstOffr->cREATED);
		$sqlQuery->set($cstOffr->cREATEDBY);
		$sqlQuery->set($cstOffr->lASTUPD);
		$sqlQuery->set($cstOffr->lASTUPDBY);
		$sqlQuery->setNumber($cstOffr->cSTID);
		$sqlQuery->setNumber($cstOffr->oFFRID);
		$sqlQuery->set($cstOffr->sTARTDT);
		$sqlQuery->set($cstOffr->eNDDT);
		$sqlQuery->set($cstOffr->cSTOFFRSTAT);

		$id = $this->executeInsert($sqlQuery);	
		$cstOffr->iD = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param CstOffrMySql cstOffr
 	 */
	public function update($cstOffr){
		$sql = 'UPDATE cst_offr SET CREATED = ?, CREATED_BY = ?, LAST_UPD = ?, LAST_UPD_BY = ?, CST_ID = ?, OFFR_ID = ?, START_DT = ?, END_DT = ?, CST_OFFR_STAT = ? WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($cstOffr->cREATED);
		$sqlQuery->set($cstOffr->cREATEDBY);
		$sqlQuery->set($cstOffr->lASTUPD);
		$sqlQuery->set($cstOffr->lASTUPDBY);
		$sqlQuery->setNumber($cstOffr->cSTID);
		$sqlQuery->setNumber($cstOffr->oFFRID);
		$sqlQuery->set($cstOffr->sTARTDT);
		$sqlQuery->set($cstOffr->eNDDT);
		$sqlQuery->set($cstOffr->cSTOFFRSTAT);

		$sqlQuery->setNumber($cstOffr->iD);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM cst_offr';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCREATED($value){
		$sql = 'SELECT * FROM cst_offr WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCREATEDBY($value){
		$sql = 'SELECT * FROM cst_offr WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPD($value){
		$sql = 'SELECT * FROM cst_offr WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPDBY($value){
		$sql = 'SELECT * FROM cst_offr WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCSTID($value){
		$sql = 'SELECT * FROM cst_offr WHERE CST_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByOFFRID($value){
		$sql = 'SELECT * FROM cst_offr WHERE OFFR_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySTARTDT($value){
		$sql = 'SELECT * FROM cst_offr WHERE START_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByENDDT($value){
		$sql = 'SELECT * FROM cst_offr WHERE END_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCSTOFFRSTAT($value){
		$sql = 'SELECT * FROM cst_offr WHERE CST_OFFR_STAT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCREATED($value){
		$sql = 'DELETE FROM cst_offr WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCREATEDBY($value){
		$sql = 'DELETE FROM cst_offr WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPD($value){
		$sql = 'DELETE FROM cst_offr WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPDBY($value){
		$sql = 'DELETE FROM cst_offr WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCSTID($value){
		$sql = 'DELETE FROM cst_offr WHERE CST_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByOFFRID($value){
		$sql = 'DELETE FROM cst_offr WHERE OFFR_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySTARTDT($value){
		$sql = 'DELETE FROM cst_offr WHERE START_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByENDDT($value){
		$sql = 'DELETE FROM cst_offr WHERE END_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCSTOFFRSTAT($value){
		$sql = 'DELETE FROM cst_offr WHERE CST_OFFR_STAT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return CstOffrMySql 
	 */
	protected function readRow($row){
		$cstOffr = new CstOffr();
		
		$cstOffr->iD = $row['ID'];
		$cstOffr->cREATED = $row['CREATED'];
		$cstOffr->cREATEDBY = $row['CREATED_BY'];
		$cstOffr->lASTUPD = $row['LAST_UPD'];
		$cstOffr->lASTUPDBY = $row['LAST_UPD_BY'];
		$cstOffr->cSTID = $row['CST_ID'];
		$cstOffr->oFFRID = $row['OFFR_ID'];
		$cstOffr->sTARTDT = $row['START_DT'];
		$cstOffr->eNDDT = $row['END_DT'];
		$cstOffr->cSTOFFRSTAT = $row['CST_OFFR_STAT'];

		return $cstOffr;
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
	 * @return CstOffrMySql 
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