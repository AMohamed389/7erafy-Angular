<?php
/**
 * Class that operate on table 'tech_cont'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:18
 */
class TechContMySqlDAO implements TechContDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TechContMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tech_cont WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tech_cont';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tech_cont ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param techCont primary key
 	 */
	public function delete($ID){
		$sql = 'DELETE FROM tech_cont WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($ID);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TechContMySql techCont
 	 */
	public function insert($techCont){
		$sql = 'INSERT INTO tech_cont (CREATED, CREATED_BY, LAST_UPD, LAST_UPD_BY, TECH_ID, MOB_NUM, LL_NUM, CONT_MTHD_ID, TEC_NAME, MID_NAME, LST_NAME, NICK_NAME, CONT_COMMENT, GENDER_ID, BIRTH_DATE) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($techCont->cREATED);
		$sqlQuery->set($techCont->cREATEDBY);
		$sqlQuery->set($techCont->lASTUPD);
		$sqlQuery->set($techCont->lASTUPDBY);
		$sqlQuery->setNumber($techCont->tECHID);
		$sqlQuery->set($techCont->mOBNUM);
		$sqlQuery->set($techCont->lLNUM);
		$sqlQuery->setNumber($techCont->cONTMTHDID);
		$sqlQuery->set($techCont->tECNAME);
		$sqlQuery->set($techCont->mIDNAME);
		$sqlQuery->set($techCont->lSTNAME);
		$sqlQuery->set($techCont->nICKNAME);
		$sqlQuery->set($techCont->cONTCOMMENT);
		$sqlQuery->setNumber($techCont->gENDERID);
		$sqlQuery->set($techCont->bIRTHDATE);

		$id = $this->executeInsert($sqlQuery);	
		$techCont->iD = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TechContMySql techCont
 	 */
	public function update($techCont){
		$sql = 'UPDATE tech_cont SET CREATED = ?, CREATED_BY = ?, LAST_UPD = ?, LAST_UPD_BY = ?, TECH_ID = ?, MOB_NUM = ?, LL_NUM = ?, CONT_MTHD_ID = ?, TEC_NAME = ?, MID_NAME = ?, LST_NAME = ?, NICK_NAME = ?, CONT_COMMENT = ?, GENDER_ID = ?, BIRTH_DATE = ? WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($techCont->cREATED);
		$sqlQuery->set($techCont->cREATEDBY);
		$sqlQuery->set($techCont->lASTUPD);
		$sqlQuery->set($techCont->lASTUPDBY);
		$sqlQuery->setNumber($techCont->tECHID);
		$sqlQuery->set($techCont->mOBNUM);
		$sqlQuery->set($techCont->lLNUM);
		$sqlQuery->setNumber($techCont->cONTMTHDID);
		$sqlQuery->set($techCont->tECNAME);
		$sqlQuery->set($techCont->mIDNAME);
		$sqlQuery->set($techCont->lSTNAME);
		$sqlQuery->set($techCont->nICKNAME);
		$sqlQuery->set($techCont->cONTCOMMENT);
		$sqlQuery->setNumber($techCont->gENDERID);
		$sqlQuery->set($techCont->bIRTHDATE);

		$sqlQuery->setNumber($techCont->iD);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tech_cont';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCREATED($value){
		$sql = 'SELECT * FROM tech_cont WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCREATEDBY($value){
		$sql = 'SELECT * FROM tech_cont WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPD($value){
		$sql = 'SELECT * FROM tech_cont WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPDBY($value){
		$sql = 'SELECT * FROM tech_cont WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTECHID($value){
		$sql = 'SELECT * FROM tech_cont WHERE TECH_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMOBNUM($value){
		$sql = 'SELECT * FROM tech_cont WHERE MOB_NUM = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLLNUM($value){
		$sql = 'SELECT * FROM tech_cont WHERE LL_NUM = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCONTMTHDID($value){
		$sql = 'SELECT * FROM tech_cont WHERE CONT_MTHD_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTECNAME($value){
		$sql = 'SELECT * FROM tech_cont WHERE TEC_NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMIDNAME($value){
		$sql = 'SELECT * FROM tech_cont WHERE MID_NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLSTNAME($value){
		$sql = 'SELECT * FROM tech_cont WHERE LST_NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNICKNAME($value){
		$sql = 'SELECT * FROM tech_cont WHERE NICK_NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCONTCOMMENT($value){
		$sql = 'SELECT * FROM tech_cont WHERE CONT_COMMENT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByGENDERID($value){
		$sql = 'SELECT * FROM tech_cont WHERE GENDER_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByBIRTHDATE($value){
		$sql = 'SELECT * FROM tech_cont WHERE BIRTH_DATE = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCREATED($value){
		$sql = 'DELETE FROM tech_cont WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCREATEDBY($value){
		$sql = 'DELETE FROM tech_cont WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPD($value){
		$sql = 'DELETE FROM tech_cont WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPDBY($value){
		$sql = 'DELETE FROM tech_cont WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTECHID($value){
		$sql = 'DELETE FROM tech_cont WHERE TECH_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMOBNUM($value){
		$sql = 'DELETE FROM tech_cont WHERE MOB_NUM = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLLNUM($value){
		$sql = 'DELETE FROM tech_cont WHERE LL_NUM = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCONTMTHDID($value){
		$sql = 'DELETE FROM tech_cont WHERE CONT_MTHD_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTECNAME($value){
		$sql = 'DELETE FROM tech_cont WHERE TEC_NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMIDNAME($value){
		$sql = 'DELETE FROM tech_cont WHERE MID_NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLSTNAME($value){
		$sql = 'DELETE FROM tech_cont WHERE LST_NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNICKNAME($value){
		$sql = 'DELETE FROM tech_cont WHERE NICK_NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCONTCOMMENT($value){
		$sql = 'DELETE FROM tech_cont WHERE CONT_COMMENT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByGENDERID($value){
		$sql = 'DELETE FROM tech_cont WHERE GENDER_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByBIRTHDATE($value){
		$sql = 'DELETE FROM tech_cont WHERE BIRTH_DATE = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TechContMySql 
	 */
	protected function readRow($row){
		$techCont = new TechCont();
		
		$techCont->iD = $row['ID'];
		$techCont->cREATED = $row['CREATED'];
		$techCont->cREATEDBY = $row['CREATED_BY'];
		$techCont->lASTUPD = $row['LAST_UPD'];
		$techCont->lASTUPDBY = $row['LAST_UPD_BY'];
		$techCont->tECHID = $row['TECH_ID'];
		$techCont->mOBNUM = $row['MOB_NUM'];
		$techCont->lLNUM = $row['LL_NUM'];
		$techCont->cONTMTHDID = $row['CONT_MTHD_ID'];
		$techCont->tECNAME = $row['TEC_NAME'];
		$techCont->mIDNAME = $row['MID_NAME'];
		$techCont->lSTNAME = $row['LST_NAME'];
		$techCont->nICKNAME = $row['NICK_NAME'];
		$techCont->cONTCOMMENT = $row['CONT_COMMENT'];
		$techCont->gENDERID = $row['GENDER_ID'];
		$techCont->bIRTHDATE = $row['BIRTH_DATE'];

		return $techCont;
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
	 * @return TechContMySql 
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