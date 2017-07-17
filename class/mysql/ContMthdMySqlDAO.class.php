<?php
/**
 * Class that operate on table 'cont_mthd'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:17
 */
class ContMthdMySqlDAO implements ContMthdDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return ContMthdMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM cont_mthd WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM cont_mthd';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM cont_mthd ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param contMthd primary key
 	 */
	public function delete($ID){
		$sql = 'DELETE FROM cont_mthd WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($ID);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ContMthdMySql contMthd
 	 */
	public function insert($contMthd){
		$sql = 'INSERT INTO cont_mthd (CREATED, CREATED_BY, LAST_UPD, LAST_UPD_BY, CONT_MTHD_TYPE) VALUES (?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($contMthd->cREATED);
		$sqlQuery->set($contMthd->cREATEDBY);
		$sqlQuery->set($contMthd->lASTUPD);
		$sqlQuery->set($contMthd->lASTUPDBY);
		$sqlQuery->set($contMthd->cONTMTHDTYPE);

		$id = $this->executeInsert($sqlQuery);	
		$contMthd->iD = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ContMthdMySql contMthd
 	 */
	public function update($contMthd){
		$sql = 'UPDATE cont_mthd SET CREATED = ?, CREATED_BY = ?, LAST_UPD = ?, LAST_UPD_BY = ?, CONT_MTHD_TYPE = ? WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($contMthd->cREATED);
		$sqlQuery->set($contMthd->cREATEDBY);
		$sqlQuery->set($contMthd->lASTUPD);
		$sqlQuery->set($contMthd->lASTUPDBY);
		$sqlQuery->set($contMthd->cONTMTHDTYPE);

		$sqlQuery->setNumber($contMthd->iD);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM cont_mthd';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCREATED($value){
		$sql = 'SELECT * FROM cont_mthd WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCREATEDBY($value){
		$sql = 'SELECT * FROM cont_mthd WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPD($value){
		$sql = 'SELECT * FROM cont_mthd WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPDBY($value){
		$sql = 'SELECT * FROM cont_mthd WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCONTMTHDTYPE($value){
		$sql = 'SELECT * FROM cont_mthd WHERE CONT_MTHD_TYPE = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCREATED($value){
		$sql = 'DELETE FROM cont_mthd WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCREATEDBY($value){
		$sql = 'DELETE FROM cont_mthd WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPD($value){
		$sql = 'DELETE FROM cont_mthd WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPDBY($value){
		$sql = 'DELETE FROM cont_mthd WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCONTMTHDTYPE($value){
		$sql = 'DELETE FROM cont_mthd WHERE CONT_MTHD_TYPE = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return ContMthdMySql 
	 */
	protected function readRow($row){
		$contMthd = new ContMthd();
		
		$contMthd->iD = $row['ID'];
		$contMthd->cREATED = $row['CREATED'];
		$contMthd->cREATEDBY = $row['CREATED_BY'];
		$contMthd->lASTUPD = $row['LAST_UPD'];
		$contMthd->lASTUPDBY = $row['LAST_UPD_BY'];
		$contMthd->cONTMTHDTYPE = $row['CONT_MTHD_TYPE'];

		return $contMthd;
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
	 * @return ContMthdMySql 
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