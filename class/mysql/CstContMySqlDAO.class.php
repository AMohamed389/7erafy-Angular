<?php
/**
 * Class that operate on table 'cst_cont'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:17
 */
class CstContMySqlDAO implements CstContDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return CstContMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM cst_cont WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM cst_cont';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM cst_cont ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param cstCont primary key
 	 */
	public function delete($ID){
		$sql = 'DELETE FROM cst_cont WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($ID);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CstContMySql cstCont
 	 */
	public function insert($cstCont){
		$sql = 'INSERT INTO cst_cont (CREATED, CREATED_BY, LAST_UPD, LAST_UPD_BY, CST_ID, MOB_NUM, LL_NUM, CONT_MTHD_ID, CST_NAME, NICK_NAME, CONT_COMMENT, PREFER_CONT_DT_FROM, PREFER_CONT_DT_TO, GENDER, BIRTH_DATE) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($cstCont->cREATED);
		$sqlQuery->set($cstCont->cREATEDBY);
		$sqlQuery->set($cstCont->lASTUPD);
		$sqlQuery->set($cstCont->lASTUPDBY);
		$sqlQuery->setNumber($cstCont->cSTID);
		$sqlQuery->set($cstCont->mOBNUM);
		$sqlQuery->set($cstCont->lLNUM);
		$sqlQuery->setNumber($cstCont->cONTMTHDID);
		$sqlQuery->set($cstCont->cSTNAME);
		$sqlQuery->set($cstCont->nICKNAME);
		$sqlQuery->set($cstCont->cONTCOMMENT);
		$sqlQuery->set($cstCont->pREFERCONTDTFROM);
		$sqlQuery->set($cstCont->pREFERCONTDTTO);
		$sqlQuery->set($cstCont->gENDER);
		$sqlQuery->set($cstCont->bIRTHDATE);

		$id = $this->executeInsert($sqlQuery);	
		$cstCont->iD = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param CstContMySql cstCont
 	 */
	public function update($cstCont){
		$sql = 'UPDATE cst_cont SET CREATED = ?, CREATED_BY = ?, LAST_UPD = ?, LAST_UPD_BY = ?, CST_ID = ?, MOB_NUM = ?, LL_NUM = ?, CONT_MTHD_ID = ?, CST_NAME = ?, NICK_NAME = ?, CONT_COMMENT = ?, PREFER_CONT_DT_FROM = ?, PREFER_CONT_DT_TO = ?, GENDER = ?, BIRTH_DATE = ? WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($cstCont->cREATED);
		$sqlQuery->set($cstCont->cREATEDBY);
		$sqlQuery->set($cstCont->lASTUPD);
		$sqlQuery->set($cstCont->lASTUPDBY);
		$sqlQuery->setNumber($cstCont->cSTID);
		$sqlQuery->set($cstCont->mOBNUM);
		$sqlQuery->set($cstCont->lLNUM);
		$sqlQuery->setNumber($cstCont->cONTMTHDID);
		$sqlQuery->set($cstCont->cSTNAME);
		$sqlQuery->set($cstCont->nICKNAME);
		$sqlQuery->set($cstCont->cONTCOMMENT);
		$sqlQuery->set($cstCont->pREFERCONTDTFROM);
		$sqlQuery->set($cstCont->pREFERCONTDTTO);
		$sqlQuery->set($cstCont->gENDER);
		$sqlQuery->set($cstCont->bIRTHDATE);

		$sqlQuery->setNumber($cstCont->iD);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM cst_cont';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCREATED($value){
		$sql = 'SELECT * FROM cst_cont WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCREATEDBY($value){
		$sql = 'SELECT * FROM cst_cont WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPD($value){
		$sql = 'SELECT * FROM cst_cont WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPDBY($value){
		$sql = 'SELECT * FROM cst_cont WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCSTID($value){
		$sql = 'SELECT * FROM cst_cont WHERE CST_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMOBNUM($value){
		$sql = 'SELECT * FROM cst_cont WHERE MOB_NUM = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLLNUM($value){
		$sql = 'SELECT * FROM cst_cont WHERE LL_NUM = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCONTMTHDID($value){
		$sql = 'SELECT * FROM cst_cont WHERE CONT_MTHD_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCSTNAME($value){
		$sql = 'SELECT * FROM cst_cont WHERE CST_NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNICKNAME($value){
		$sql = 'SELECT * FROM cst_cont WHERE NICK_NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCONTCOMMENT($value){
		$sql = 'SELECT * FROM cst_cont WHERE CONT_COMMENT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPREFERCONTDTFROM($value){
		$sql = 'SELECT * FROM cst_cont WHERE PREFER_CONT_DT_FROM = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPREFERCONTDTTO($value){
		$sql = 'SELECT * FROM cst_cont WHERE PREFER_CONT_DT_TO = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByGENDER($value){
		$sql = 'SELECT * FROM cst_cont WHERE GENDER = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByBIRTHDATE($value){
		$sql = 'SELECT * FROM cst_cont WHERE BIRTH_DATE = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCREATED($value){
		$sql = 'DELETE FROM cst_cont WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCREATEDBY($value){
		$sql = 'DELETE FROM cst_cont WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPD($value){
		$sql = 'DELETE FROM cst_cont WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPDBY($value){
		$sql = 'DELETE FROM cst_cont WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCSTID($value){
		$sql = 'DELETE FROM cst_cont WHERE CST_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMOBNUM($value){
		$sql = 'DELETE FROM cst_cont WHERE MOB_NUM = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLLNUM($value){
		$sql = 'DELETE FROM cst_cont WHERE LL_NUM = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCONTMTHDID($value){
		$sql = 'DELETE FROM cst_cont WHERE CONT_MTHD_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCSTNAME($value){
		$sql = 'DELETE FROM cst_cont WHERE CST_NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNICKNAME($value){
		$sql = 'DELETE FROM cst_cont WHERE NICK_NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCONTCOMMENT($value){
		$sql = 'DELETE FROM cst_cont WHERE CONT_COMMENT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPREFERCONTDTFROM($value){
		$sql = 'DELETE FROM cst_cont WHERE PREFER_CONT_DT_FROM = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPREFERCONTDTTO($value){
		$sql = 'DELETE FROM cst_cont WHERE PREFER_CONT_DT_TO = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByGENDER($value){
		$sql = 'DELETE FROM cst_cont WHERE GENDER = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByBIRTHDATE($value){
		$sql = 'DELETE FROM cst_cont WHERE BIRTH_DATE = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return CstContMySql 
	 */
	protected function readRow($row){
		$cstCont = new CstCont();
		
		$cstCont->iD = $row['ID'];
		$cstCont->cREATED = $row['CREATED'];
		$cstCont->cREATEDBY = $row['CREATED_BY'];
		$cstCont->lASTUPD = $row['LAST_UPD'];
		$cstCont->lASTUPDBY = $row['LAST_UPD_BY'];
		$cstCont->cSTID = $row['CST_ID'];
		$cstCont->mOBNUM = $row['MOB_NUM'];
		$cstCont->lLNUM = $row['LL_NUM'];
		$cstCont->cONTMTHDID = $row['CONT_MTHD_ID'];
		$cstCont->cSTNAME = $row['CST_NAME'];
		$cstCont->nICKNAME = $row['NICK_NAME'];
		$cstCont->cONTCOMMENT = $row['CONT_COMMENT'];
		$cstCont->pREFERCONTDTFROM = $row['PREFER_CONT_DT_FROM'];
		$cstCont->pREFERCONTDTTO = $row['PREFER_CONT_DT_TO'];
		$cstCont->gENDER = $row['GENDER'];
		$cstCont->bIRTHDATE = $row['BIRTH_DATE'];

		return $cstCont;
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
	 * @return CstContMySql 
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