<?php
/**
 * Class that operate on table 'tech_email'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:18
 */
class TechEmailMySqlDAO implements TechEmailDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TechEmailMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tech_email WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tech_email';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tech_email ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param techEmail primary key
 	 */
	public function delete($ID){
		$sql = 'DELETE FROM tech_email WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($ID);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TechEmailMySql techEmail
 	 */
	public function insert($techEmail){
		$sql = 'INSERT INTO tech_email (CREATED, CREATED_BY, LAST_UPD, LAST_UPD_BY, TECH_ID, EMAIL) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($techEmail->cREATED);
		$sqlQuery->set($techEmail->cREATEDBY);
		$sqlQuery->set($techEmail->lASTUPD);
		$sqlQuery->set($techEmail->lASTUPDBY);
		$sqlQuery->setNumber($techEmail->tECHID);
		$sqlQuery->set($techEmail->eMAIL);

		$id = $this->executeInsert($sqlQuery);	
		$techEmail->iD = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TechEmailMySql techEmail
 	 */
	public function update($techEmail){
		$sql = 'UPDATE tech_email SET CREATED = ?, CREATED_BY = ?, LAST_UPD = ?, LAST_UPD_BY = ?, TECH_ID = ?, EMAIL = ? WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($techEmail->cREATED);
		$sqlQuery->set($techEmail->cREATEDBY);
		$sqlQuery->set($techEmail->lASTUPD);
		$sqlQuery->set($techEmail->lASTUPDBY);
		$sqlQuery->setNumber($techEmail->tECHID);
		$sqlQuery->set($techEmail->eMAIL);

		$sqlQuery->setNumber($techEmail->iD);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tech_email';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCREATED($value){
		$sql = 'SELECT * FROM tech_email WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCREATEDBY($value){
		$sql = 'SELECT * FROM tech_email WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPD($value){
		$sql = 'SELECT * FROM tech_email WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPDBY($value){
		$sql = 'SELECT * FROM tech_email WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTECHID($value){
		$sql = 'SELECT * FROM tech_email WHERE TECH_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEMAIL($value){
		$sql = 'SELECT * FROM tech_email WHERE EMAIL = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCREATED($value){
		$sql = 'DELETE FROM tech_email WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCREATEDBY($value){
		$sql = 'DELETE FROM tech_email WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPD($value){
		$sql = 'DELETE FROM tech_email WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPDBY($value){
		$sql = 'DELETE FROM tech_email WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTECHID($value){
		$sql = 'DELETE FROM tech_email WHERE TECH_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEMAIL($value){
		$sql = 'DELETE FROM tech_email WHERE EMAIL = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TechEmailMySql 
	 */
	protected function readRow($row){
		$techEmail = new TechEmail();
		
		$techEmail->iD = $row['ID'];
		$techEmail->cREATED = $row['CREATED'];
		$techEmail->cREATEDBY = $row['CREATED_BY'];
		$techEmail->lASTUPD = $row['LAST_UPD'];
		$techEmail->lASTUPDBY = $row['LAST_UPD_BY'];
		$techEmail->tECHID = $row['TECH_ID'];
		$techEmail->eMAIL = $row['EMAIL'];

		return $techEmail;
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
	 * @return TechEmailMySql 
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