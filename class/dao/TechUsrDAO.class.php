<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:18
 */
interface TechUsrDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TechUsr 
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
 	 * @param techUsr primary key
 	 */
	public function delete($ID);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TechUsr techUsr
 	 */
	public function insert($techUsr);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TechUsr techUsr
 	 */
	public function update($techUsr);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCREATED($value);

	public function queryByCREATEDBY($value);

	public function queryByLASTUPD($value);

	public function queryByLASTUPDBY($value);

	public function queryByTECHID($value);

	public function queryByTECHUSRNAME($value);

	public function queryByTECHPSWD($value);

	public function queryByTECHUSRSTAT($value);


	public function deleteByCREATED($value);

	public function deleteByCREATEDBY($value);

	public function deleteByLASTUPD($value);

	public function deleteByLASTUPDBY($value);

	public function deleteByTECHID($value);

	public function deleteByTECHUSRNAME($value);

	public function deleteByTECHPSWD($value);

	public function deleteByTECHUSRSTAT($value);


}
?>