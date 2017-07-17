<?php
/**
 * Class that operate on table 'offr'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:17
 */
class OffrMySqlDAO implements OffrDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return OffrMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM offr WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM offr';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM offr ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param offr primary key
 	 */
	public function delete($ID){
		$sql = 'DELETE FROM offr WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($ID);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param OffrMySql offr
 	 */
	public function insert($offr){
		$sql = 'INSERT INTO offr (CREATED, CREATED_BY, LAST_UPD, LAST_UPD_BY, OFFR_NAME, OFFR_STAT, OFFR_SART_DT, OFFR_END_DT, OFFR_COMMENT) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($offr->cREATED);
		$sqlQuery->set($offr->cREATEDBY);
		$sqlQuery->set($offr->lASTUPD);
		$sqlQuery->set($offr->lASTUPDBY);
		$sqlQuery->set($offr->oFFRNAME);
		$sqlQuery->set($offr->oFFRSTAT);
		$sqlQuery->set($offr->oFFRSARTDT);
		$sqlQuery->set($offr->oFFRENDDT);
		$sqlQuery->set($offr->oFFRCOMMENT);

		$id = $this->executeInsert($sqlQuery);	
		$offr->iD = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param OffrMySql offr
 	 */
	public function update($offr){
		$sql = 'UPDATE offr SET CREATED = ?, CREATED_BY = ?, LAST_UPD = ?, LAST_UPD_BY = ?, OFFR_NAME = ?, OFFR_STAT = ?, OFFR_SART_DT = ?, OFFR_END_DT = ?, OFFR_COMMENT = ? WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($offr->cREATED);
		$sqlQuery->set($offr->cREATEDBY);
		$sqlQuery->set($offr->lASTUPD);
		$sqlQuery->set($offr->lASTUPDBY);
		$sqlQuery->set($offr->oFFRNAME);
		$sqlQuery->set($offr->oFFRSTAT);
		$sqlQuery->set($offr->oFFRSARTDT);
		$sqlQuery->set($offr->oFFRENDDT);
		$sqlQuery->set($offr->oFFRCOMMENT);

		$sqlQuery->setNumber($offr->iD);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM offr';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCREATED($value){
		$sql = 'SELECT * FROM offr WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCREATEDBY($value){
		$sql = 'SELECT * FROM offr WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPD($value){
		$sql = 'SELECT * FROM offr WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPDBY($value){
		$sql = 'SELECT * FROM offr WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByOFFRNAME($value){
		$sql = 'SELECT * FROM offr WHERE OFFR_NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByOFFRSTAT($value){
		$sql = 'SELECT * FROM offr WHERE OFFR_STAT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByOFFRSARTDT($value){
		$sql = 'SELECT * FROM offr WHERE OFFR_SART_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByOFFRENDDT($value){
		$sql = 'SELECT * FROM offr WHERE OFFR_END_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByOFFRCOMMENT($value){
		$sql = 'SELECT * FROM offr WHERE OFFR_COMMENT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCREATED($value){
		$sql = 'DELETE FROM offr WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCREATEDBY($value){
		$sql = 'DELETE FROM offr WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPD($value){
		$sql = 'DELETE FROM offr WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPDBY($value){
		$sql = 'DELETE FROM offr WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByOFFRNAME($value){
		$sql = 'DELETE FROM offr WHERE OFFR_NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByOFFRSTAT($value){
		$sql = 'DELETE FROM offr WHERE OFFR_STAT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByOFFRSARTDT($value){
		$sql = 'DELETE FROM offr WHERE OFFR_SART_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByOFFRENDDT($value){
		$sql = 'DELETE FROM offr WHERE OFFR_END_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByOFFRCOMMENT($value){
		$sql = 'DELETE FROM offr WHERE OFFR_COMMENT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return OffrMySql 
	 */
	protected function readRow($row){
		$offr = new Offr();
		
		$offr->iD = $row['ID'];
		$offr->cREATED = $row['CREATED'];
		$offr->cREATEDBY = $row['CREATED_BY'];
		$offr->lASTUPD = $row['LAST_UPD'];
		$offr->lASTUPDBY = $row['LAST_UPD_BY'];
		$offr->oFFRNAME = $row['OFFR_NAME'];
		$offr->oFFRSTAT = $row['OFFR_STAT'];
		$offr->oFFRSARTDT = $row['OFFR_SART_DT'];
		$offr->oFFRENDDT = $row['OFFR_END_DT'];
		$offr->oFFRCOMMENT = $row['OFFR_COMMENT'];

		return $offr;
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
	 * @return OffrMySql 
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