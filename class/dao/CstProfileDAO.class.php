<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:18
 */
interface CstProfileDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return CstProfile 
	 */
	public function load($id);

	/**
	 * Get all records from table
	 */
	public function queryAll();
	
	/**
	 * Get all records from table ordered by field
	 * @Param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn);
	
	/**
 	 * Delete record from table
 	 * @param cstProfile primary key
 	 */
	public function delete($ID);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CstProfile cstProfile
 	 */
	public function insert($cstProfile);
	
	/**
 	 * Update record in table
 	 *
 	 * @param CstProfile cstProfile
 	 */
	public function update($cstProfile);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCREATED($value);

	public function queryByCREATEDBY($value);

	public function queryByLASTUPD($value);

	public function queryByLASTUPDBY($value);

	public function queryByCSTSTAT($value);

	public function queryByCSTHITID($value);

	public function queryByCSTSGMNTID($value);

	public function queryByCSTGRPID($value);

	public function queryByCSTTYPEID($value);

	public function queryByCSTLOYID($value);

	public function queryByCSTPROFILECOMMENT($value);

	public function queryByEmail($value);


	public function deleteByCREATED($value);

	public function deleteByCREATEDBY($value);

	public function deleteByLASTUPD($value);

	public function deleteByLASTUPDBY($value);

	public function deleteByCSTSTAT($value);

	public function deleteByCSTHITID($value);

	public function deleteByCSTSGMNTID($value);

	public function deleteByCSTGRPID($value);

	public function deleteByCSTTYPEID($value);

	public function deleteByCSTLOYID($value);

	public function deleteByCSTPROFILECOMMENT($value);

	public function deleteByEmail($value);


}
?>