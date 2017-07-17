<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:18
 */
interface CstContDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return CstCont 
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
 	 * @param cstCont primary key
 	 */
	public function delete($ID);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CstCont cstCont
 	 */
	public function insert($cstCont);
	
	/**
 	 * Update record in table
 	 *
 	 * @param CstCont cstCont
 	 */
	public function update($cstCont);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCREATED($value);

	public function queryByCREATEDBY($value);

	public function queryByLASTUPD($value);

	public function queryByLASTUPDBY($value);

	public function queryByCSTID($value);

	public function queryByMOBNUM($value);

	public function queryByLLNUM($value);

	public function queryByCONTMTHDID($value);

	public function queryByCSTNAME($value);

	public function queryByNICKNAME($value);

	public function queryByCONTCOMMENT($value);

	public function queryByPREFERCONTDTFROM($value);

	public function queryByPREFERCONTDTTO($value);

	public function queryByGENDER($value);

	public function queryByBIRTHDATE($value);


	public function deleteByCREATED($value);

	public function deleteByCREATEDBY($value);

	public function deleteByLASTUPD($value);

	public function deleteByLASTUPDBY($value);

	public function deleteByCSTID($value);

	public function deleteByMOBNUM($value);

	public function deleteByLLNUM($value);

	public function deleteByCONTMTHDID($value);

	public function deleteByCSTNAME($value);

	public function deleteByNICKNAME($value);

	public function deleteByCONTCOMMENT($value);

	public function deleteByPREFERCONTDTFROM($value);

	public function deleteByPREFERCONTDTTO($value);

	public function deleteByGENDER($value);

	public function deleteByBIRTHDATE($value);


}
?>