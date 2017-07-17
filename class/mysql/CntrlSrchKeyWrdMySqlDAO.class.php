<?php
/**
 * Class that operate on table 'cntrl_srch_key_wrd'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:17
 */
class CntrlSrchKeyWrdMySqlDAO implements CntrlSrchKeyWrdDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return CntrlSrchKeyWrdMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM cntrl_srch_key_wrd WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM cntrl_srch_key_wrd';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM cntrl_srch_key_wrd ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param cntrlSrchKeyWrd primary key
 	 */
	public function delete($ID){
		$sql = 'DELETE FROM cntrl_srch_key_wrd WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($ID);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CntrlSrchKeyWrdMySql cntrlSrchKeyWrd
 	 */
	public function insert($cntrlSrchKeyWrd){
		$sql = 'INSERT INTO cntrl_srch_key_wrd (CREATED, CREATED_BY, LAST_UPD, LAST_UPD_BY, SRCH_KEY_WRD, CITY_ID, STATE_ID, SRCH_SERV_ID, COUNTRY_ID) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($cntrlSrchKeyWrd->cREATED);
		$sqlQuery->set($cntrlSrchKeyWrd->cREATEDBY);
		$sqlQuery->set($cntrlSrchKeyWrd->lASTUPD);
		$sqlQuery->set($cntrlSrchKeyWrd->lASTUPDBY);
		$sqlQuery->set($cntrlSrchKeyWrd->sRCHKEYWRD);
		$sqlQuery->setNumber($cntrlSrchKeyWrd->cITYID);
		$sqlQuery->setNumber($cntrlSrchKeyWrd->sTATEID);
		$sqlQuery->setNumber($cntrlSrchKeyWrd->sRCHSERVID);
		$sqlQuery->setNumber($cntrlSrchKeyWrd->cOUNTRYID);

		$id = $this->executeInsert($sqlQuery);	
		$cntrlSrchKeyWrd->iD = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param CntrlSrchKeyWrdMySql cntrlSrchKeyWrd
 	 */
	public function update($cntrlSrchKeyWrd){
		$sql = 'UPDATE cntrl_srch_key_wrd SET CREATED = ?, CREATED_BY = ?, LAST_UPD = ?, LAST_UPD_BY = ?, SRCH_KEY_WRD = ?, CITY_ID = ?, STATE_ID = ?, SRCH_SERV_ID = ?, COUNTRY_ID = ? WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($cntrlSrchKeyWrd->cREATED);
		$sqlQuery->set($cntrlSrchKeyWrd->cREATEDBY);
		$sqlQuery->set($cntrlSrchKeyWrd->lASTUPD);
		$sqlQuery->set($cntrlSrchKeyWrd->lASTUPDBY);
		$sqlQuery->set($cntrlSrchKeyWrd->sRCHKEYWRD);
		$sqlQuery->setNumber($cntrlSrchKeyWrd->cITYID);
		$sqlQuery->setNumber($cntrlSrchKeyWrd->sTATEID);
		$sqlQuery->setNumber($cntrlSrchKeyWrd->sRCHSERVID);
		$sqlQuery->setNumber($cntrlSrchKeyWrd->cOUNTRYID);

		$sqlQuery->setNumber($cntrlSrchKeyWrd->iD);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM cntrl_srch_key_wrd';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCREATED($value){
		$sql = 'SELECT * FROM cntrl_srch_key_wrd WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCREATEDBY($value){
		$sql = 'SELECT * FROM cntrl_srch_key_wrd WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPD($value){
		$sql = 'SELECT * FROM cntrl_srch_key_wrd WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPDBY($value){
		$sql = 'SELECT * FROM cntrl_srch_key_wrd WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySRCHKEYWRD($value){
		$sql = 'SELECT * FROM cntrl_srch_key_wrd WHERE SRCH_KEY_WRD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCITYID($value){
		$sql = 'SELECT * FROM cntrl_srch_key_wrd WHERE CITY_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySTATEID($value){
		$sql = 'SELECT * FROM cntrl_srch_key_wrd WHERE STATE_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySRCHSERVID($value){
		$sql = 'SELECT * FROM cntrl_srch_key_wrd WHERE SRCH_SERV_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCOUNTRYID($value){
		$sql = 'SELECT * FROM cntrl_srch_key_wrd WHERE COUNTRY_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCREATED($value){
		$sql = 'DELETE FROM cntrl_srch_key_wrd WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCREATEDBY($value){
		$sql = 'DELETE FROM cntrl_srch_key_wrd WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPD($value){
		$sql = 'DELETE FROM cntrl_srch_key_wrd WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPDBY($value){
		$sql = 'DELETE FROM cntrl_srch_key_wrd WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySRCHKEYWRD($value){
		$sql = 'DELETE FROM cntrl_srch_key_wrd WHERE SRCH_KEY_WRD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCITYID($value){
		$sql = 'DELETE FROM cntrl_srch_key_wrd WHERE CITY_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySTATEID($value){
		$sql = 'DELETE FROM cntrl_srch_key_wrd WHERE STATE_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySRCHSERVID($value){
		$sql = 'DELETE FROM cntrl_srch_key_wrd WHERE SRCH_SERV_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCOUNTRYID($value){
		$sql = 'DELETE FROM cntrl_srch_key_wrd WHERE COUNTRY_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return CntrlSrchKeyWrdMySql 
	 */
	protected function readRow($row){
		$cntrlSrchKeyWrd = new CntrlSrchKeyWrd();
		
		$cntrlSrchKeyWrd->iD = $row['ID'];
		$cntrlSrchKeyWrd->cREATED = $row['CREATED'];
		$cntrlSrchKeyWrd->cREATEDBY = $row['CREATED_BY'];
		$cntrlSrchKeyWrd->lASTUPD = $row['LAST_UPD'];
		$cntrlSrchKeyWrd->lASTUPDBY = $row['LAST_UPD_BY'];
		$cntrlSrchKeyWrd->sRCHKEYWRD = $row['SRCH_KEY_WRD'];
		$cntrlSrchKeyWrd->cITYID = $row['CITY_ID'];
		$cntrlSrchKeyWrd->sTATEID = $row['STATE_ID'];
		$cntrlSrchKeyWrd->sRCHSERVID = $row['SRCH_SERV_ID'];
		$cntrlSrchKeyWrd->cOUNTRYID = $row['COUNTRY_ID'];

		return $cntrlSrchKeyWrd;
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
	 * @return CntrlSrchKeyWrdMySql 
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