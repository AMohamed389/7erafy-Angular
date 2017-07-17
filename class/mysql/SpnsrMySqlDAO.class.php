<?php
/**
 * Class that operate on table 'spnsr'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:17
 */
class SpnsrMySqlDAO implements SpnsrDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return SpnsrMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM spnsr WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM spnsr';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM spnsr ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param spnsr primary key
 	 */
	public function delete($ID){
		$sql = 'DELETE FROM spnsr WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($ID);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param SpnsrMySql spnsr
 	 */
	public function insert($spnsr){
		$sql = 'INSERT INTO spnsr (CREATED, CREATED_BY, LAST_UPD, LAST_UPD_BY, SPNSR_NAME, INDSTRY, MOB_NUM, CONT_PRSN_NAME, ADDR, EMAIL, LL_NUM, SPNSR_CONTR_START_DT, SPNSR_CONTR_END_DT, SPNSR_COMMENT) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($spnsr->cREATED);
		$sqlQuery->set($spnsr->cREATEDBY);
		$sqlQuery->set($spnsr->lASTUPD);
		$sqlQuery->set($spnsr->lASTUPDBY);
		$sqlQuery->set($spnsr->sPNSRNAME);
		$sqlQuery->set($spnsr->iNDSTRY);
		$sqlQuery->set($spnsr->mOBNUM);
		$sqlQuery->set($spnsr->cONTPRSNNAME);
		$sqlQuery->set($spnsr->aDDR);
		$sqlQuery->set($spnsr->eMAIL);
		$sqlQuery->set($spnsr->lLNUM);
		$sqlQuery->set($spnsr->sPNSRCONTRSTARTDT);
		$sqlQuery->set($spnsr->sPNSRCONTRENDDT);
		$sqlQuery->set($spnsr->sPNSRCOMMENT);

		$id = $this->executeInsert($sqlQuery);	
		$spnsr->iD = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param SpnsrMySql spnsr
 	 */
	public function update($spnsr){
		$sql = 'UPDATE spnsr SET CREATED = ?, CREATED_BY = ?, LAST_UPD = ?, LAST_UPD_BY = ?, SPNSR_NAME = ?, INDSTRY = ?, MOB_NUM = ?, CONT_PRSN_NAME = ?, ADDR = ?, EMAIL = ?, LL_NUM = ?, SPNSR_CONTR_START_DT = ?, SPNSR_CONTR_END_DT = ?, SPNSR_COMMENT = ? WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($spnsr->cREATED);
		$sqlQuery->set($spnsr->cREATEDBY);
		$sqlQuery->set($spnsr->lASTUPD);
		$sqlQuery->set($spnsr->lASTUPDBY);
		$sqlQuery->set($spnsr->sPNSRNAME);
		$sqlQuery->set($spnsr->iNDSTRY);
		$sqlQuery->set($spnsr->mOBNUM);
		$sqlQuery->set($spnsr->cONTPRSNNAME);
		$sqlQuery->set($spnsr->aDDR);
		$sqlQuery->set($spnsr->eMAIL);
		$sqlQuery->set($spnsr->lLNUM);
		$sqlQuery->set($spnsr->sPNSRCONTRSTARTDT);
		$sqlQuery->set($spnsr->sPNSRCONTRENDDT);
		$sqlQuery->set($spnsr->sPNSRCOMMENT);

		$sqlQuery->setNumber($spnsr->iD);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM spnsr';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCREATED($value){
		$sql = 'SELECT * FROM spnsr WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCREATEDBY($value){
		$sql = 'SELECT * FROM spnsr WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPD($value){
		$sql = 'SELECT * FROM spnsr WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPDBY($value){
		$sql = 'SELECT * FROM spnsr WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySPNSRNAME($value){
		$sql = 'SELECT * FROM spnsr WHERE SPNSR_NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByINDSTRY($value){
		$sql = 'SELECT * FROM spnsr WHERE INDSTRY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMOBNUM($value){
		$sql = 'SELECT * FROM spnsr WHERE MOB_NUM = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCONTPRSNNAME($value){
		$sql = 'SELECT * FROM spnsr WHERE CONT_PRSN_NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByADDR($value){
		$sql = 'SELECT * FROM spnsr WHERE ADDR = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEMAIL($value){
		$sql = 'SELECT * FROM spnsr WHERE EMAIL = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLLNUM($value){
		$sql = 'SELECT * FROM spnsr WHERE LL_NUM = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySPNSRCONTRSTARTDT($value){
		$sql = 'SELECT * FROM spnsr WHERE SPNSR_CONTR_START_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySPNSRCONTRENDDT($value){
		$sql = 'SELECT * FROM spnsr WHERE SPNSR_CONTR_END_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySPNSRCOMMENT($value){
		$sql = 'SELECT * FROM spnsr WHERE SPNSR_COMMENT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCREATED($value){
		$sql = 'DELETE FROM spnsr WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCREATEDBY($value){
		$sql = 'DELETE FROM spnsr WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPD($value){
		$sql = 'DELETE FROM spnsr WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPDBY($value){
		$sql = 'DELETE FROM spnsr WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySPNSRNAME($value){
		$sql = 'DELETE FROM spnsr WHERE SPNSR_NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByINDSTRY($value){
		$sql = 'DELETE FROM spnsr WHERE INDSTRY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMOBNUM($value){
		$sql = 'DELETE FROM spnsr WHERE MOB_NUM = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCONTPRSNNAME($value){
		$sql = 'DELETE FROM spnsr WHERE CONT_PRSN_NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByADDR($value){
		$sql = 'DELETE FROM spnsr WHERE ADDR = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEMAIL($value){
		$sql = 'DELETE FROM spnsr WHERE EMAIL = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLLNUM($value){
		$sql = 'DELETE FROM spnsr WHERE LL_NUM = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySPNSRCONTRSTARTDT($value){
		$sql = 'DELETE FROM spnsr WHERE SPNSR_CONTR_START_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySPNSRCONTRENDDT($value){
		$sql = 'DELETE FROM spnsr WHERE SPNSR_CONTR_END_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySPNSRCOMMENT($value){
		$sql = 'DELETE FROM spnsr WHERE SPNSR_COMMENT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return SpnsrMySql 
	 */
	protected function readRow($row){
		$spnsr = new Spnsr();
		
		$spnsr->iD = $row['ID'];
		$spnsr->cREATED = $row['CREATED'];
		$spnsr->cREATEDBY = $row['CREATED_BY'];
		$spnsr->lASTUPD = $row['LAST_UPD'];
		$spnsr->lASTUPDBY = $row['LAST_UPD_BY'];
		$spnsr->sPNSRNAME = $row['SPNSR_NAME'];
		$spnsr->iNDSTRY = $row['INDSTRY'];
		$spnsr->mOBNUM = $row['MOB_NUM'];
		$spnsr->cONTPRSNNAME = $row['CONT_PRSN_NAME'];
		$spnsr->aDDR = $row['ADDR'];
		$spnsr->eMAIL = $row['EMAIL'];
		$spnsr->lLNUM = $row['LL_NUM'];
		$spnsr->sPNSRCONTRSTARTDT = $row['SPNSR_CONTR_START_DT'];
		$spnsr->sPNSRCONTRENDDT = $row['SPNSR_CONTR_END_DT'];
		$spnsr->sPNSRCOMMENT = $row['SPNSR_COMMENT'];

		return $spnsr;
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
	 * @return SpnsrMySql 
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