<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:18
 */
interface CstTechReqDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return CstTechReq 
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
 	 * @param cstTechReq primary key
 	 */
	public function delete($ID);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CstTechReq cstTechReq
 	 */
	public function insert($cstTechReq);
	
	/**
 	 * Update record in table
 	 *
 	 * @param CstTechReq cstTechReq
 	 */
	public function update($cstTechReq);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCREATED($value);

	public function queryByCREATEDBY($value);

	public function queryByLASTUPD($value);

	public function queryByLASTUPDBY($value);

	public function queryByCSTID($value);

	public function queryBySERVID($value);

	public function queryByTECHID($value);

	public function queryByPRICEFROM($value);

	public function queryByPRICETO($value);

	public function queryByCITYID($value);

	public function queryBySTATEID($value);

	public function queryByCOUNTRYID($value);

	public function queryByREQSTAT($value);


	public function deleteByCREATED($value);

	public function deleteByCREATEDBY($value);

	public function deleteByLASTUPD($value);

	public function deleteByLASTUPDBY($value);

	public function deleteByCSTID($value);

	public function deleteBySERVID($value);

	public function deleteByTECHID($value);

	public function deleteByPRICEFROM($value);

	public function deleteByPRICETO($value);

	public function deleteByCITYID($value);

	public function deleteBySTATEID($value);

	public function deleteByCOUNTRYID($value);

	public function deleteByREQSTAT($value);


}
?>