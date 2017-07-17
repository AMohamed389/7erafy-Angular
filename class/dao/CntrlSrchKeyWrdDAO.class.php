<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:18
 */
interface CntrlSrchKeyWrdDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return CntrlSrchKeyWrd 
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
 	 * @param cntrlSrchKeyWrd primary key
 	 */
	public function delete($ID);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CntrlSrchKeyWrd cntrlSrchKeyWrd
 	 */
	public function insert($cntrlSrchKeyWrd);
	
	/**
 	 * Update record in table
 	 *
 	 * @param CntrlSrchKeyWrd cntrlSrchKeyWrd
 	 */
	public function update($cntrlSrchKeyWrd);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCREATED($value);

	public function queryByCREATEDBY($value);

	public function queryByLASTUPD($value);

	public function queryByLASTUPDBY($value);

	public function queryBySRCHKEYWRD($value);

	public function queryByCITYID($value);

	public function queryBySTATEID($value);

	public function queryBySRCHSERVID($value);

	public function queryByCOUNTRYID($value);


	public function deleteByCREATED($value);

	public function deleteByCREATEDBY($value);

	public function deleteByLASTUPD($value);

	public function deleteByLASTUPDBY($value);

	public function deleteBySRCHKEYWRD($value);

	public function deleteByCITYID($value);

	public function deleteBySTATEID($value);

	public function deleteBySRCHSERVID($value);

	public function deleteByCOUNTRYID($value);


}
?>