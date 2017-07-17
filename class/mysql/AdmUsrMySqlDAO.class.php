<?php
/**
 * Class that operate on table 'adm_usr'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:17
 */
class AdmUsrMySqlDAO implements AdmUsrDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AdmUsrMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM adm_usr WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM adm_usr';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM adm_usr ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param admUsr primary key
 	 */
	public function delete($ID){
		$sql = 'DELETE FROM adm_usr WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($ID);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AdmUsrMySql admUsr
 	 */
	public function insert($admUsr){
		$sql = 'INSERT INTO adm_usr (CREATED, CREATED_BY, LAST_UPD, LAST_UPD_BY, NAME, EMAIL, USR_STAT, USR_NAME, PSWD, USR_STAT_DT, USR_END_DT) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($admUsr->cREATED);
		$sqlQuery->set($admUsr->cREATEDBY);
		$sqlQuery->set($admUsr->lASTUPD);
		$sqlQuery->set($admUsr->lASTUPDBY);
		$sqlQuery->set($admUsr->nAME);
		$sqlQuery->set($admUsr->eMAIL);
		$sqlQuery->set($admUsr->uSRSTAT);
		$sqlQuery->set($admUsr->uSRNAME);
		$sqlQuery->set($admUsr->pSWD);
		$sqlQuery->set($admUsr->uSRSTATDT);
		$sqlQuery->set($admUsr->uSRENDDT);

		$id = $this->executeInsert($sqlQuery);	
		$admUsr->iD = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AdmUsrMySql admUsr
 	 */
	public function update($admUsr){
		$sql = 'UPDATE adm_usr SET CREATED = ?, CREATED_BY = ?, LAST_UPD = ?, LAST_UPD_BY = ?, NAME = ?, EMAIL = ?, USR_STAT = ?, USR_NAME = ?, PSWD = ?, USR_STAT_DT = ?, USR_END_DT = ? WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($admUsr->cREATED);
		$sqlQuery->set($admUsr->cREATEDBY);
		$sqlQuery->set($admUsr->lASTUPD);
		$sqlQuery->set($admUsr->lASTUPDBY);
		$sqlQuery->set($admUsr->nAME);
		$sqlQuery->set($admUsr->eMAIL);
		$sqlQuery->set($admUsr->uSRSTAT);
		$sqlQuery->set($admUsr->uSRNAME);
		$sqlQuery->set($admUsr->pSWD);
		$sqlQuery->set($admUsr->uSRSTATDT);
		$sqlQuery->set($admUsr->uSRENDDT);

		$sqlQuery->setNumber($admUsr->iD);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM adm_usr';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCREATED($value){
		$sql = 'SELECT * FROM adm_usr WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCREATEDBY($value){
		$sql = 'SELECT * FROM adm_usr WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPD($value){
		$sql = 'SELECT * FROM adm_usr WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPDBY($value){
		$sql = 'SELECT * FROM adm_usr WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNAME($value){
		$sql = 'SELECT * FROM adm_usr WHERE NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEMAIL($value){
		$sql = 'SELECT * FROM adm_usr WHERE EMAIL = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUSRSTAT($value){
		$sql = 'SELECT * FROM adm_usr WHERE USR_STAT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUSRNAME($value){
		$sql = 'SELECT * FROM adm_usr WHERE USR_NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPSWD($value){
		$sql = 'SELECT * FROM adm_usr WHERE PSWD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUSRSTATDT($value){
		$sql = 'SELECT * FROM adm_usr WHERE USR_STAT_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUSRENDDT($value){
		$sql = 'SELECT * FROM adm_usr WHERE USR_END_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCREATED($value){
		$sql = 'DELETE FROM adm_usr WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCREATEDBY($value){
		$sql = 'DELETE FROM adm_usr WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPD($value){
		$sql = 'DELETE FROM adm_usr WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPDBY($value){
		$sql = 'DELETE FROM adm_usr WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNAME($value){
		$sql = 'DELETE FROM adm_usr WHERE NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEMAIL($value){
		$sql = 'DELETE FROM adm_usr WHERE EMAIL = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUSRSTAT($value){
		$sql = 'DELETE FROM adm_usr WHERE USR_STAT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUSRNAME($value){
		$sql = 'DELETE FROM adm_usr WHERE USR_NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPSWD($value){
		$sql = 'DELETE FROM adm_usr WHERE PSWD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUSRSTATDT($value){
		$sql = 'DELETE FROM adm_usr WHERE USR_STAT_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUSRENDDT($value){
		$sql = 'DELETE FROM adm_usr WHERE USR_END_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AdmUsrMySql 
	 */
	protected function readRow($row){
		$admUsr = new AdmUsr();
		
		$admUsr->iD = $row['ID'];
		$admUsr->cREATED = $row['CREATED'];
		$admUsr->cREATEDBY = $row['CREATED_BY'];
		$admUsr->lASTUPD = $row['LAST_UPD'];
		$admUsr->lASTUPDBY = $row['LAST_UPD_BY'];
		$admUsr->nAME = $row['NAME'];
		$admUsr->eMAIL = $row['EMAIL'];
		$admUsr->uSRSTAT = $row['USR_STAT'];
		$admUsr->uSRNAME = $row['USR_NAME'];
		$admUsr->pSWD = $row['PSWD'];
		$admUsr->uSRSTATDT = $row['USR_STAT_DT'];
		$admUsr->uSRENDDT = $row['USR_END_DT'];

		return $admUsr;
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
	 * @return AdmUsrMySql 
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