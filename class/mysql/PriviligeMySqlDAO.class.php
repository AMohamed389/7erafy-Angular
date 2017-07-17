<?php
/**
 * Class that operate on table 'privilige'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:17
 */
class PriviligeMySqlDAO implements PriviligeDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return PriviligeMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM privilige WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM privilige';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM privilige ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param privilige primary key
 	 */
	public function delete($ID){
		$sql = 'DELETE FROM privilige WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($ID);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param PriviligeMySql privilige
 	 */
	public function insert($privilige){
		$sql = 'INSERT INTO privilige (CREATED, CREATED_BY, LAST_UPD, LAST_UPD_BY, ADM_USR_ID, PRIVLEGE_TYPE, PRIVLEGE_TYPE_COMMENT) VALUES (?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($privilige->cREATED);
		$sqlQuery->set($privilige->cREATEDBY);
		$sqlQuery->set($privilige->lASTUPD);
		$sqlQuery->set($privilige->lASTUPDBY);
		$sqlQuery->setNumber($privilige->aDMUSRID);
		$sqlQuery->set($privilige->pRIVLEGETYPE);
		$sqlQuery->set($privilige->pRIVLEGETYPECOMMENT);

		$id = $this->executeInsert($sqlQuery);	
		$privilige->iD = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param PriviligeMySql privilige
 	 */
	public function update($privilige){
		$sql = 'UPDATE privilige SET CREATED = ?, CREATED_BY = ?, LAST_UPD = ?, LAST_UPD_BY = ?, ADM_USR_ID = ?, PRIVLEGE_TYPE = ?, PRIVLEGE_TYPE_COMMENT = ? WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($privilige->cREATED);
		$sqlQuery->set($privilige->cREATEDBY);
		$sqlQuery->set($privilige->lASTUPD);
		$sqlQuery->set($privilige->lASTUPDBY);
		$sqlQuery->setNumber($privilige->aDMUSRID);
		$sqlQuery->set($privilige->pRIVLEGETYPE);
		$sqlQuery->set($privilige->pRIVLEGETYPECOMMENT);

		$sqlQuery->setNumber($privilige->iD);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM privilige';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCREATED($value){
		$sql = 'SELECT * FROM privilige WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCREATEDBY($value){
		$sql = 'SELECT * FROM privilige WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPD($value){
		$sql = 'SELECT * FROM privilige WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPDBY($value){
		$sql = 'SELECT * FROM privilige WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByADMUSRID($value){
		$sql = 'SELECT * FROM privilige WHERE ADM_USR_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPRIVLEGETYPE($value){
		$sql = 'SELECT * FROM privilige WHERE PRIVLEGE_TYPE = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPRIVLEGETYPECOMMENT($value){
		$sql = 'SELECT * FROM privilige WHERE PRIVLEGE_TYPE_COMMENT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCREATED($value){
		$sql = 'DELETE FROM privilige WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCREATEDBY($value){
		$sql = 'DELETE FROM privilige WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPD($value){
		$sql = 'DELETE FROM privilige WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPDBY($value){
		$sql = 'DELETE FROM privilige WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByADMUSRID($value){
		$sql = 'DELETE FROM privilige WHERE ADM_USR_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPRIVLEGETYPE($value){
		$sql = 'DELETE FROM privilige WHERE PRIVLEGE_TYPE = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPRIVLEGETYPECOMMENT($value){
		$sql = 'DELETE FROM privilige WHERE PRIVLEGE_TYPE_COMMENT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return PriviligeMySql 
	 */
	protected function readRow($row){
		$privilige = new Privilige();
		
		$privilige->iD = $row['ID'];
		$privilige->cREATED = $row['CREATED'];
		$privilige->cREATEDBY = $row['CREATED_BY'];
		$privilige->lASTUPD = $row['LAST_UPD'];
		$privilige->lASTUPDBY = $row['LAST_UPD_BY'];
		$privilige->aDMUSRID = $row['ADM_USR_ID'];
		$privilige->pRIVLEGETYPE = $row['PRIVLEGE_TYPE'];
		$privilige->pRIVLEGETYPECOMMENT = $row['PRIVLEGE_TYPE_COMMENT'];

		return $privilige;
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
	 * @return PriviligeMySql 
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