<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:18
 */
interface TechContDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TechCont 
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
 	 * @param techCont primary key
 	 */
	public function delete($ID);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TechCont techCont
 	 */
	public function insert($techCont);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TechCont techCont
 	 */
	public function update($techCont);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCREATED($value);

	public function queryByCREATEDBY($value);

	public function queryByLASTUPD($value);

	public function queryByLASTUPDBY($value);

	public function queryByTECHID($value);

	public function queryByMOBNUM($value);

	public function queryByLLNUM($value);

	public function queryByCONTMTHDID($value);

	public function queryByTECNAME($value);

	public function queryByMIDNAME($value);

	public function queryByLSTNAME($value);

	public function queryByNICKNAME($value);

	public function queryByCONTCOMMENT($value);

	public function queryByGENDERID($value);

	public function queryByBIRTHDATE($value);


	public function deleteByCREATED($value);

	public function deleteByCREATEDBY($value);

	public function deleteByLASTUPD($value);

	public function deleteByLASTUPDBY($value);

	public function deleteByTECHID($value);

	public function deleteByMOBNUM($value);

	public function deleteByLLNUM($value);

	public function deleteByCONTMTHDID($value);

	public function deleteByTECNAME($value);

	public function deleteByMIDNAME($value);

	public function deleteByLSTNAME($value);

	public function deleteByNICKNAME($value);

	public function deleteByCONTCOMMENT($value);

	public function deleteByGENDERID($value);

	public function deleteByBIRTHDATE($value);


}
?>