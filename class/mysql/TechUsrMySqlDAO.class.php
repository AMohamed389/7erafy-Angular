<?php
/**
 * Class that operate on table 'tech_usr'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:18
 */
class TechUsrMySqlDAO implements TechUsrDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TechUsrMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tech_usr WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tech_usr';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tech_usr ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param techUsr primary key
 	 */
	public function delete($ID){
		$sql = 'DELETE FROM tech_usr WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($ID);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TechUsrMySql techUsr
 	 */
	public function insert($techUsr){
		$sql = 'INSERT INTO tech_usr (CREATED, CREATED_BY, LAST_UPD, LAST_UPD_BY, TECH_ID, TECH_USR_NAME, TECH_PSWD, TECH_USR_STAT) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($techUsr->cREATED);
		$sqlQuery->set($techUsr->cREATEDBY);
		$sqlQuery->set($techUsr->lASTUPD);
		$sqlQuery->set($techUsr->lASTUPDBY);
		$sqlQuery->setNumber($techUsr->tECHID);
		$sqlQuery->set($techUsr->tECHUSRNAME);
		$sqlQuery->set($techUsr->tECHPSWD);
		$sqlQuery->set($techUsr->tECHUSRSTAT);

		$id = $this->executeInsert($sqlQuery);	
		$techUsr->iD = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TechUsrMySql techUsr
 	 */
	public function update($techUsr){
		$sql = 'UPDATE tech_usr SET CREATED = ?, CREATED_BY = ?, LAST_UPD = ?, LAST_UPD_BY = ?, TECH_ID = ?, TECH_USR_NAME = ?, TECH_PSWD = ?, TECH_USR_STAT = ? WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($techUsr->cREATED);
		$sqlQuery->set($techUsr->cREATEDBY);
		$sqlQuery->set($techUsr->lASTUPD);
		$sqlQuery->set($techUsr->lASTUPDBY);
		$sqlQuery->setNumber($techUsr->tECHID);
		$sqlQuery->set($techUsr->tECHUSRNAME);
		$sqlQuery->set($techUsr->tECHPSWD);
		$sqlQuery->set($techUsr->tECHUSRSTAT);

		$sqlQuery->setNumber($techUsr->iD);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tech_usr';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCREATED($value){
		$sql = 'SELECT * FROM tech_usr WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCREATEDBY($value){
		$sql = 'SELECT * FROM tech_usr WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPD($value){
		$sql = 'SELECT * FROM tech_usr WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPDBY($value){
		$sql = 'SELECT * FROM tech_usr WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTECHID($value){
		$sql = 'SELECT * FROM tech_usr WHERE TECH_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTECHUSRNAME($value){
		$sql = 'SELECT * FROM tech_usr WHERE TECH_USR_NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTECHPSWD($value){
		$sql = 'SELECT * FROM tech_usr WHERE TECH_PSWD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTECHUSRSTAT($value){
		$sql = 'SELECT * FROM tech_usr WHERE TECH_USR_STAT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCREATED($value){
		$sql = 'DELETE FROM tech_usr WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCREATEDBY($value){
		$sql = 'DELETE FROM tech_usr WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPD($value){
		$sql = 'DELETE FROM tech_usr WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPDBY($value){
		$sql = 'DELETE FROM tech_usr WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTECHID($value){
		$sql = 'DELETE FROM tech_usr WHERE TECH_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTECHUSRNAME($value){
		$sql = 'DELETE FROM tech_usr WHERE TECH_USR_NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTECHPSWD($value){
		$sql = 'DELETE FROM tech_usr WHERE TECH_PSWD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTECHUSRSTAT($value){
		$sql = 'DELETE FROM tech_usr WHERE TECH_USR_STAT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TechUsrMySql 
	 */
	protected function readRow($row){
		$techUsr = new TechUsr();
		
		$techUsr->iD = $row['ID'];
		$techUsr->cREATED = $row['CREATED'];
		$techUsr->cREATEDBY = $row['CREATED_BY'];
		$techUsr->lASTUPD = $row['LAST_UPD'];
		$techUsr->lASTUPDBY = $row['LAST_UPD_BY'];
		$techUsr->tECHID = $row['TECH_ID'];
		$techUsr->tECHUSRNAME = $row['TECH_USR_NAME'];
		$techUsr->tECHPSWD = $row['TECH_PSWD'];
		$techUsr->tECHUSRSTAT = $row['TECH_USR_STAT'];

		return $techUsr;
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
	 * @return TechUsrMySql 
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