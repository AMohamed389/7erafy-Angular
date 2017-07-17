<?php
/**
 * Class that operate on table 'cst_profile'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:17
 */
class CstProfileMySqlDAO implements CstProfileDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return CstProfileMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM cst_profile WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM cst_profile';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM cst_profile ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param cstProfile primary key
 	 */
	public function delete($ID){
		$sql = 'DELETE FROM cst_profile WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($ID);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CstProfileMySql cstProfile
 	 */
	public function insert($cstProfile){
		$sql = 'INSERT INTO cst_profile (CREATED, CREATED_BY, LAST_UPD, LAST_UPD_BY, CST_STAT, CST_HIT_ID, CST_SGMNT_ID, CST_GRP_ID, CST_TYPE_ID, CST_LOY_ID, CST_PROFILE_COMMENT, email) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($cstProfile->cREATED);
		$sqlQuery->set($cstProfile->cREATEDBY);
		$sqlQuery->set($cstProfile->lASTUPD);
		$sqlQuery->set($cstProfile->lASTUPDBY);
		$sqlQuery->set($cstProfile->cSTSTAT);
		$sqlQuery->setNumber($cstProfile->cSTHITID);
		$sqlQuery->setNumber($cstProfile->cSTSGMNTID);
		$sqlQuery->setNumber($cstProfile->cSTGRPID);
		$sqlQuery->setNumber($cstProfile->cSTTYPEID);
		$sqlQuery->setNumber($cstProfile->cSTLOYID);
		$sqlQuery->set($cstProfile->cSTPROFILECOMMENT);
		$sqlQuery->set($cstProfile->email);

		$id = $this->executeInsert($sqlQuery);	
		$cstProfile->iD = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param CstProfileMySql cstProfile
 	 */
	public function update($cstProfile){
		$sql = 'UPDATE cst_profile SET CREATED = ?, CREATED_BY = ?, LAST_UPD = ?, LAST_UPD_BY = ?, CST_STAT = ?, CST_HIT_ID = ?, CST_SGMNT_ID = ?, CST_GRP_ID = ?, CST_TYPE_ID = ?, CST_LOY_ID = ?, CST_PROFILE_COMMENT = ?, email = ? WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($cstProfile->cREATED);
		$sqlQuery->set($cstProfile->cREATEDBY);
		$sqlQuery->set($cstProfile->lASTUPD);
		$sqlQuery->set($cstProfile->lASTUPDBY);
		$sqlQuery->set($cstProfile->cSTSTAT);
		$sqlQuery->setNumber($cstProfile->cSTHITID);
		$sqlQuery->setNumber($cstProfile->cSTSGMNTID);
		$sqlQuery->setNumber($cstProfile->cSTGRPID);
		$sqlQuery->setNumber($cstProfile->cSTTYPEID);
		$sqlQuery->setNumber($cstProfile->cSTLOYID);
		$sqlQuery->set($cstProfile->cSTPROFILECOMMENT);
		$sqlQuery->set($cstProfile->email);

		$sqlQuery->setNumber($cstProfile->iD);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM cst_profile';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCREATED($value){
		$sql = 'SELECT * FROM cst_profile WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCREATEDBY($value){
		$sql = 'SELECT * FROM cst_profile WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPD($value){
		$sql = 'SELECT * FROM cst_profile WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPDBY($value){
		$sql = 'SELECT * FROM cst_profile WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCSTSTAT($value){
		$sql = 'SELECT * FROM cst_profile WHERE CST_STAT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCSTHITID($value){
		$sql = 'SELECT * FROM cst_profile WHERE CST_HIT_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCSTSGMNTID($value){
		$sql = 'SELECT * FROM cst_profile WHERE CST_SGMNT_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCSTGRPID($value){
		$sql = 'SELECT * FROM cst_profile WHERE CST_GRP_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCSTTYPEID($value){
		$sql = 'SELECT * FROM cst_profile WHERE CST_TYPE_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCSTLOYID($value){
		$sql = 'SELECT * FROM cst_profile WHERE CST_LOY_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCSTPROFILECOMMENT($value){
		$sql = 'SELECT * FROM cst_profile WHERE CST_PROFILE_COMMENT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEmail($value){
		$sql = 'SELECT * FROM cst_profile WHERE email = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCREATED($value){
		$sql = 'DELETE FROM cst_profile WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCREATEDBY($value){
		$sql = 'DELETE FROM cst_profile WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPD($value){
		$sql = 'DELETE FROM cst_profile WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPDBY($value){
		$sql = 'DELETE FROM cst_profile WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCSTSTAT($value){
		$sql = 'DELETE FROM cst_profile WHERE CST_STAT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCSTHITID($value){
		$sql = 'DELETE FROM cst_profile WHERE CST_HIT_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCSTSGMNTID($value){
		$sql = 'DELETE FROM cst_profile WHERE CST_SGMNT_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCSTGRPID($value){
		$sql = 'DELETE FROM cst_profile WHERE CST_GRP_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCSTTYPEID($value){
		$sql = 'DELETE FROM cst_profile WHERE CST_TYPE_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCSTLOYID($value){
		$sql = 'DELETE FROM cst_profile WHERE CST_LOY_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCSTPROFILECOMMENT($value){
		$sql = 'DELETE FROM cst_profile WHERE CST_PROFILE_COMMENT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEmail($value){
		$sql = 'DELETE FROM cst_profile WHERE email = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return CstProfileMySql 
	 */
	protected function readRow($row){
		$cstProfile = new CstProfile();
		
		$cstProfile->iD = $row['ID'];
		$cstProfile->cREATED = $row['CREATED'];
		$cstProfile->cREATEDBY = $row['CREATED_BY'];
		$cstProfile->lASTUPD = $row['LAST_UPD'];
		$cstProfile->lASTUPDBY = $row['LAST_UPD_BY'];
		$cstProfile->cSTSTAT = $row['CST_STAT'];
		$cstProfile->cSTHITID = $row['CST_HIT_ID'];
		$cstProfile->cSTSGMNTID = $row['CST_SGMNT_ID'];
		$cstProfile->cSTGRPID = $row['CST_GRP_ID'];
		$cstProfile->cSTTYPEID = $row['CST_TYPE_ID'];
		$cstProfile->cSTLOYID = $row['CST_LOY_ID'];
		$cstProfile->cSTPROFILECOMMENT = $row['CST_PROFILE_COMMENT'];
		$cstProfile->email = $row['email'];

		return $cstProfile;
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
	 * @return CstProfileMySql 
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