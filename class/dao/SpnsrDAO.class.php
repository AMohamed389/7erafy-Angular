<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:18
 */
interface SpnsrDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Spnsr 
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
 	 * @param spnsr primary key
 	 */
	public function delete($ID);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Spnsr spnsr
 	 */
	public function insert($spnsr);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Spnsr spnsr
 	 */
	public function update($spnsr);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCREATED($value);

	public function queryByCREATEDBY($value);

	public function queryByLASTUPD($value);

	public function queryByLASTUPDBY($value);

	public function queryBySPNSRNAME($value);

	public function queryByINDSTRY($value);

	public function queryByMOBNUM($value);

	public function queryByCONTPRSNNAME($value);

	public function queryByADDR($value);

	public function queryByEMAIL($value);

	public function queryByLLNUM($value);

	public function queryBySPNSRCONTRSTARTDT($value);

	public function queryBySPNSRCONTRENDDT($value);

	public function queryBySPNSRCOMMENT($value);


	public function deleteByCREATED($value);

	public function deleteByCREATEDBY($value);

	public function deleteByLASTUPD($value);

	public function deleteByLASTUPDBY($value);

	public function deleteBySPNSRNAME($value);

	public function deleteByINDSTRY($value);

	public function deleteByMOBNUM($value);

	public function deleteByCONTPRSNNAME($value);

	public function deleteByADDR($value);

	public function deleteByEMAIL($value);

	public function deleteByLLNUM($value);

	public function deleteBySPNSRCONTRSTARTDT($value);

	public function deleteBySPNSRCONTRENDDT($value);

	public function deleteBySPNSRCOMMENT($value);


}
?>