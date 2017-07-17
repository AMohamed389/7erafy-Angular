<?php
/**
 * Class that operate on table 'tech_offr'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:18
 */
class TechOffrMySqlDAO implements TechOffrDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TechOffrMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tech_offr WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tech_offr';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tech_offr ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param techOffr primary key
 	 */
	public function delete($ID){
		$sql = 'DELETE FROM tech_offr WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($ID);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TechOffrMySql techOffr
 	 */
	public function insert($techOffr){
		$sql = 'INSERT INTO tech_offr (CREATED, CREATED_BY, LAST_UPD, LAST_UPD_BY, TECH_ID, OFFR_ID, START_DT, END_DT, TECH_OFFR_STAT) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($techOffr->cREATED);
		$sqlQuery->set($techOffr->cREATEDBY);
		$sqlQuery->set($techOffr->lASTUPD);
		$sqlQuery->set($techOffr->lASTUPDBY);
		$sqlQuery->setNumber($techOffr->tECHID);
		$sqlQuery->setNumber($techOffr->oFFRID);
		$sqlQuery->set($techOffr->sTARTDT);
		$sqlQuery->set($techOffr->eNDDT);
		$sqlQuery->set($techOffr->tECHOFFRSTAT);

		$id = $this->executeInsert($sqlQuery);	
		$techOffr->iD = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TechOffrMySql techOffr
 	 */
	public function update($techOffr){
		$sql = 'UPDATE tech_offr SET CREATED = ?, CREATED_BY = ?, LAST_UPD = ?, LAST_UPD_BY = ?, TECH_ID = ?, OFFR_ID = ?, START_DT = ?, END_DT = ?, TECH_OFFR_STAT = ? WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($techOffr->cREATED);
		$sqlQuery->set($techOffr->cREATEDBY);
		$sqlQuery->set($techOffr->lASTUPD);
		$sqlQuery->set($techOffr->lASTUPDBY);
		$sqlQuery->setNumber($techOffr->tECHID);
		$sqlQuery->setNumber($techOffr->oFFRID);
		$sqlQuery->set($techOffr->sTARTDT);
		$sqlQuery->set($techOffr->eNDDT);
		$sqlQuery->set($techOffr->tECHOFFRSTAT);

		$sqlQuery->setNumber($techOffr->iD);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tech_offr';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCREATED($value){
		$sql = 'SELECT * FROM tech_offr WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCREATEDBY($value){
		$sql = 'SELECT * FROM tech_offr WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPD($value){
		$sql = 'SELECT * FROM tech_offr WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPDBY($value){
		$sql = 'SELECT * FROM tech_offr WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTECHID($value){
		$sql = 'SELECT * FROM tech_offr WHERE TECH_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByOFFRID($value){
		$sql = 'SELECT * FROM tech_offr WHERE OFFR_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySTARTDT($value){
		$sql = 'SELECT * FROM tech_offr WHERE START_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByENDDT($value){
		$sql = 'SELECT * FROM tech_offr WHERE END_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTECHOFFRSTAT($value){
		$sql = 'SELECT * FROM tech_offr WHERE TECH_OFFR_STAT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCREATED($value){
		$sql = 'DELETE FROM tech_offr WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCREATEDBY($value){
		$sql = 'DELETE FROM tech_offr WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPD($value){
		$sql = 'DELETE FROM tech_offr WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPDBY($value){
		$sql = 'DELETE FROM tech_offr WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTECHID($value){
		$sql = 'DELETE FROM tech_offr WHERE TECH_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByOFFRID($value){
		$sql = 'DELETE FROM tech_offr WHERE OFFR_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySTARTDT($value){
		$sql = 'DELETE FROM tech_offr WHERE START_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByENDDT($value){
		$sql = 'DELETE FROM tech_offr WHERE END_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTECHOFFRSTAT($value){
		$sql = 'DELETE FROM tech_offr WHERE TECH_OFFR_STAT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TechOffrMySql 
	 */
	protected function readRow($row){
		$techOffr = new TechOffr();
		
		$techOffr->iD = $row['ID'];
		$techOffr->cREATED = $row['CREATED'];
		$techOffr->cREATEDBY = $row['CREATED_BY'];
		$techOffr->lASTUPD = $row['LAST_UPD'];
		$techOffr->lASTUPDBY = $row['LAST_UPD_BY'];
		$techOffr->tECHID = $row['TECH_ID'];
		$techOffr->oFFRID = $row['OFFR_ID'];
		$techOffr->sTARTDT = $row['START_DT'];
		$techOffr->eNDDT = $row['END_DT'];
		$techOffr->tECHOFFRSTAT = $row['TECH_OFFR_STAT'];

		return $techOffr;
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
	 * @return TechOffrMySql 
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