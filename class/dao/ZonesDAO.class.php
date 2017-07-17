<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:18
 */
interface ZonesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Zones 
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
 	 * @param zone primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Zones zone
 	 */
	public function insert($zone);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Zones zone
 	 */
	public function update($zone);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCityId($value);

	public function queryByZone($value);

	public function queryByArabicZone($value);


	public function deleteByCityId($value);

	public function deleteByZone($value);

	public function deleteByArabicZone($value);


}
?>