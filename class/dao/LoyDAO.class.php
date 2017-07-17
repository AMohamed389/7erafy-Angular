<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:18
 */
interface LoyDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Loy 
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
 	 * @param loy primary key
 	 */
	public function delete($ID);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Loy loy
 	 */
	public function insert($loy);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Loy loy
 	 */
	public function update($loy);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCREATED($value);

	public function queryByCREATEDBY($value);

	public function queryByLASTUPD($value);

	public function queryByLASTUPDBY($value);

	public function queryByCSTID($value);

	public function queryByCSTHITID($value);

	public function queryByCSTSGMNTID($value);

	public function queryByGCSTGRPID($value);

	public function queryByCSTTYPEID($value);

	public function queryByLOYPRGID($value);

	public function queryByENRLMNTDT($value);

	public function queryByLOYSTAT($value);

	public function queryByLOYENDDT($value);

	public function queryByLOYCOMMENT($value);


	public function deleteByCREATED($value);

	public function deleteByCREATEDBY($value);

	public function deleteByLASTUPD($value);

	public function deleteByLASTUPDBY($value);

	public function deleteByCSTID($value);

	public function deleteByCSTHITID($value);

	public function deleteByCSTSGMNTID($value);

	public function deleteByGCSTGRPID($value);

	public function deleteByCSTTYPEID($value);

	public function deleteByLOYPRGID($value);

	public function deleteByENRLMNTDT($value);

	public function deleteByLOYSTAT($value);

	public function deleteByLOYENDDT($value);

	public function deleteByLOYCOMMENT($value);


}
?>