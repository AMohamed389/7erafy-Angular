<?php
/**
 * Class that operate on table 'cntrl_upld'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:17
 */
class CntrlUpldMySqlDAO implements CntrlUpldDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return CntrlUpldMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM cntrl_upld WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM cntrl_upld';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM cntrl_upld ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param cntrlUpld primary key
 	 */
	public function delete($ID){
		$sql = 'DELETE FROM cntrl_upld WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($ID);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CntrlUpldMySql cntrlUpld
 	 */
	public function insert($cntrlUpld){
		$sql = 'INSERT INTO cntrl_upld (CREATED, CREATED_BY, LAST_UPD, LAST_UPD_BY, UPLD_NAME, PAR_VIEW_ID, CNTRL_UPLD_COMMENT) VALUES (?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($cntrlUpld->cREATED);
		$sqlQuery->set($cntrlUpld->cREATEDBY);
		$sqlQuery->set($cntrlUpld->lASTUPD);
		$sqlQuery->set($cntrlUpld->lASTUPDBY);
		$sqlQuery->set($cntrlUpld->uPLDNAME);
		$sqlQuery->setNumber($cntrlUpld->pARVIEWID);
		$sqlQuery->set($cntrlUpld->cNTRLUPLDCOMMENT);

		$id = $this->executeInsert($sqlQuery);	
		$cntrlUpld->iD = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param CntrlUpldMySql cntrlUpld
 	 */
	public function update($cntrlUpld){
		$sql = 'UPDATE cntrl_upld SET CREATED = ?, CREATED_BY = ?, LAST_UPD = ?, LAST_UPD_BY = ?, UPLD_NAME = ?, PAR_VIEW_ID = ?, CNTRL_UPLD_COMMENT = ? WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($cntrlUpld->cREATED);
		$sqlQuery->set($cntrlUpld->cREATEDBY);
		$sqlQuery->set($cntrlUpld->lASTUPD);
		$sqlQuery->set($cntrlUpld->lASTUPDBY);
		$sqlQuery->set($cntrlUpld->uPLDNAME);
		$sqlQuery->setNumber($cntrlUpld->pARVIEWID);
		$sqlQuery->set($cntrlUpld->cNTRLUPLDCOMMENT);

		$sqlQuery->setNumber($cntrlUpld->iD);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM cntrl_upld';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCREATED($value){
		$sql = 'SELECT * FROM cntrl_upld WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCREATEDBY($value){
		$sql = 'SELECT * FROM cntrl_upld WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPD($value){
		$sql = 'SELECT * FROM cntrl_upld WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPDBY($value){
		$sql = 'SELECT * FROM cntrl_upld WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUPLDNAME($value){
		$sql = 'SELECT * FROM cntrl_upld WHERE UPLD_NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPARVIEWID($value){
		$sql = 'SELECT * FROM cntrl_upld WHERE PAR_VIEW_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCNTRLUPLDCOMMENT($value){
		$sql = 'SELECT * FROM cntrl_upld WHERE CNTRL_UPLD_COMMENT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCREATED($value){
		$sql = 'DELETE FROM cntrl_upld WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCREATEDBY($value){
		$sql = 'DELETE FROM cntrl_upld WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPD($value){
		$sql = 'DELETE FROM cntrl_upld WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPDBY($value){
		$sql = 'DELETE FROM cntrl_upld WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUPLDNAME($value){
		$sql = 'DELETE FROM cntrl_upld WHERE UPLD_NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPARVIEWID($value){
		$sql = 'DELETE FROM cntrl_upld WHERE PAR_VIEW_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCNTRLUPLDCOMMENT($value){
		$sql = 'DELETE FROM cntrl_upld WHERE CNTRL_UPLD_COMMENT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return CntrlUpldMySql 
	 */
	protected function readRow($row){
		$cntrlUpld = new CntrlUpld();
		
		$cntrlUpld->iD = $row['ID'];
		$cntrlUpld->cREATED = $row['CREATED'];
		$cntrlUpld->cREATEDBY = $row['CREATED_BY'];
		$cntrlUpld->lASTUPD = $row['LAST_UPD'];
		$cntrlUpld->lASTUPDBY = $row['LAST_UPD_BY'];
		$cntrlUpld->uPLDNAME = $row['UPLD_NAME'];
		$cntrlUpld->pARVIEWID = $row['PAR_VIEW_ID'];
		$cntrlUpld->cNTRLUPLDCOMMENT = $row['CNTRL_UPLD_COMMENT'];

		return $cntrlUpld;
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
	 * @return CntrlUpldMySql 
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