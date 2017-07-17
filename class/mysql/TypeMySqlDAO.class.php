<?php
/**
 * Class that operate on table 'type'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:18
 */
class TypeMySqlDAO implements TypeDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TypeMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM type WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM type';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM type ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param type primary key
 	 */
	public function delete($ID){
		$sql = 'DELETE FROM type WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($ID);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TypeMySql type
 	 */
	public function insert($type){
		$sql = 'INSERT INTO type (CREATED, CREATED_BY, LAST_UPD, LAST_UPD_BY, TYPE_NAME, TYPE_STAT, TYPE_START_DT, TYPE_END_DT, TYPE_COMMENT) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($type->cREATED);
		$sqlQuery->set($type->cREATEDBY);
		$sqlQuery->set($type->lASTUPD);
		$sqlQuery->set($type->lASTUPDBY);
		$sqlQuery->set($type->tYPENAME);
		$sqlQuery->set($type->tYPESTAT);
		$sqlQuery->set($type->tYPESTARTDT);
		$sqlQuery->set($type->tYPEENDDT);
		$sqlQuery->set($type->tYPECOMMENT);

		$id = $this->executeInsert($sqlQuery);	
		$type->iD = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TypeMySql type
 	 */
	public function update($type){
		$sql = 'UPDATE type SET CREATED = ?, CREATED_BY = ?, LAST_UPD = ?, LAST_UPD_BY = ?, TYPE_NAME = ?, TYPE_STAT = ?, TYPE_START_DT = ?, TYPE_END_DT = ?, TYPE_COMMENT = ? WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($type->cREATED);
		$sqlQuery->set($type->cREATEDBY);
		$sqlQuery->set($type->lASTUPD);
		$sqlQuery->set($type->lASTUPDBY);
		$sqlQuery->set($type->tYPENAME);
		$sqlQuery->set($type->tYPESTAT);
		$sqlQuery->set($type->tYPESTARTDT);
		$sqlQuery->set($type->tYPEENDDT);
		$sqlQuery->set($type->tYPECOMMENT);

		$sqlQuery->setNumber($type->iD);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM type';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCREATED($value){
		$sql = 'SELECT * FROM type WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCREATEDBY($value){
		$sql = 'SELECT * FROM type WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPD($value){
		$sql = 'SELECT * FROM type WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPDBY($value){
		$sql = 'SELECT * FROM type WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTYPENAME($value){
		$sql = 'SELECT * FROM type WHERE TYPE_NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTYPESTAT($value){
		$sql = 'SELECT * FROM type WHERE TYPE_STAT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTYPESTARTDT($value){
		$sql = 'SELECT * FROM type WHERE TYPE_START_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTYPEENDDT($value){
		$sql = 'SELECT * FROM type WHERE TYPE_END_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTYPECOMMENT($value){
		$sql = 'SELECT * FROM type WHERE TYPE_COMMENT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCREATED($value){
		$sql = 'DELETE FROM type WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCREATEDBY($value){
		$sql = 'DELETE FROM type WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPD($value){
		$sql = 'DELETE FROM type WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPDBY($value){
		$sql = 'DELETE FROM type WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTYPENAME($value){
		$sql = 'DELETE FROM type WHERE TYPE_NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTYPESTAT($value){
		$sql = 'DELETE FROM type WHERE TYPE_STAT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTYPESTARTDT($value){
		$sql = 'DELETE FROM type WHERE TYPE_START_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTYPEENDDT($value){
		$sql = 'DELETE FROM type WHERE TYPE_END_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTYPECOMMENT($value){
		$sql = 'DELETE FROM type WHERE TYPE_COMMENT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TypeMySql 
	 */
	protected function readRow($row){
		$type = new Type();
		
		$type->iD = $row['ID'];
		$type->cREATED = $row['CREATED'];
		$type->cREATEDBY = $row['CREATED_BY'];
		$type->lASTUPD = $row['LAST_UPD'];
		$type->lASTUPDBY = $row['LAST_UPD_BY'];
		$type->tYPENAME = $row['TYPE_NAME'];
		$type->tYPESTAT = $row['TYPE_STAT'];
		$type->tYPESTARTDT = $row['TYPE_START_DT'];
		$type->tYPEENDDT = $row['TYPE_END_DT'];
		$type->tYPECOMMENT = $row['TYPE_COMMENT'];

		return $type;
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
	 * @return TypeMySql 
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