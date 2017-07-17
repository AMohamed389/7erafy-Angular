<?php
/**
 * Class that operate on table 'cst_usr'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:17
 */
class CstUsrMySqlDAO implements CstUsrDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return CstUsrMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM cst_usr WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM cst_usr';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM cst_usr ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param cstUsr primary key
 	 */
	public function delete($ID){
		$sql = 'DELETE FROM cst_usr WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($ID);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CstUsrMySql cstUsr
 	 */
	public function insert($cstUsr){
		$sql = 'INSERT INTO cst_usr (CREATED, CREATED_BY, LAST_UPD, LAST_UPD_BY, CST_ID, USR_STAT, USR_NAME, PSWD) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($cstUsr->cREATED);
		$sqlQuery->set($cstUsr->cREATEDBY);
		$sqlQuery->set($cstUsr->lASTUPD);
		$sqlQuery->set($cstUsr->lASTUPDBY);
		$sqlQuery->setNumber($cstUsr->cSTID);
		$sqlQuery->set($cstUsr->uSRSTAT);
		$sqlQuery->set($cstUsr->uSRNAME);
		$sqlQuery->set($cstUsr->pSWD);

		$id = $this->executeInsert($sqlQuery);	
		$cstUsr->iD = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param CstUsrMySql cstUsr
 	 */
	public function update($cstUsr){
		$sql = 'UPDATE cst_usr SET CREATED = ?, CREATED_BY = ?, LAST_UPD = ?, LAST_UPD_BY = ?, CST_ID = ?, USR_STAT = ?, USR_NAME = ?, PSWD = ? WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($cstUsr->cREATED);
		$sqlQuery->set($cstUsr->cREATEDBY);
		$sqlQuery->set($cstUsr->lASTUPD);
		$sqlQuery->set($cstUsr->lASTUPDBY);
		$sqlQuery->setNumber($cstUsr->cSTID);
		$sqlQuery->set($cstUsr->uSRSTAT);
		$sqlQuery->set($cstUsr->uSRNAME);
		$sqlQuery->set($cstUsr->pSWD);

		$sqlQuery->setNumber($cstUsr->iD);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM cst_usr';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCREATED($value){
		$sql = 'SELECT * FROM cst_usr WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCREATEDBY($value){
		$sql = 'SELECT * FROM cst_usr WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPD($value){
		$sql = 'SELECT * FROM cst_usr WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPDBY($value){
		$sql = 'SELECT * FROM cst_usr WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCSTID($value){
		$sql = 'SELECT * FROM cst_usr WHERE CST_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUSRSTAT($value){
		$sql = 'SELECT * FROM cst_usr WHERE USR_STAT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUSRNAME($value){
		$sql = 'SELECT * FROM cst_usr WHERE USR_NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPSWD($value){
		$sql = 'SELECT * FROM cst_usr WHERE PSWD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCREATED($value){
		$sql = 'DELETE FROM cst_usr WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCREATEDBY($value){
		$sql = 'DELETE FROM cst_usr WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPD($value){
		$sql = 'DELETE FROM cst_usr WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPDBY($value){
		$sql = 'DELETE FROM cst_usr WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCSTID($value){
		$sql = 'DELETE FROM cst_usr WHERE CST_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUSRSTAT($value){
		$sql = 'DELETE FROM cst_usr WHERE USR_STAT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUSRNAME($value){
		$sql = 'DELETE FROM cst_usr WHERE USR_NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPSWD($value){
		$sql = 'DELETE FROM cst_usr WHERE PSWD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return CstUsrMySql 
	 */
	protected function readRow($row){
		$cstUsr = new CstUsr();
		
		$cstUsr->iD = $row['ID'];
		$cstUsr->cREATED = $row['CREATED'];
		$cstUsr->cREATEDBY = $row['CREATED_BY'];
		$cstUsr->lASTUPD = $row['LAST_UPD'];
		$cstUsr->lASTUPDBY = $row['LAST_UPD_BY'];
		$cstUsr->cSTID = $row['CST_ID'];
		$cstUsr->uSRSTAT = $row['USR_STAT'];
		$cstUsr->uSRNAME = $row['USR_NAME'];
		$cstUsr->pSWD = $row['PSWD'];

		return $cstUsr;
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
	 * @return CstUsrMySql 
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