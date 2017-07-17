<?php

/**
 * DAOFactory
 * @author: http://phpdao.com
 * @date: ${date}
 */
class DAOFactory{
	
	/**
	 * @return AdmUsrDAO
	 */
	public static function getAdmUsrDAO(){
		return new AdmUsrMySqlExtDAO();
	}

	/**
	 * @return CitiesDAO
	 */
	public static function getCitiesDAO(){
		return new CitiesMySqlExtDAO();
	}

	/**
	 * @return CntrlBtnDAO
	 */
	public static function getCntrlBtnDAO(){
		return new CntrlBtnMySqlExtDAO();
	}

	/**
	 * @return CntrlSrchKeyWrdDAO
	 */
	public static function getCntrlSrchKeyWrdDAO(){
		return new CntrlSrchKeyWrdMySqlExtDAO();
	}

	/**
	 * @return CntrlUpldDAO
	 */
	public static function getCntrlUpldDAO(){
		return new CntrlUpldMySqlExtDAO();
	}

	/**
	 * @return CntrlViewDAO
	 */
	public static function getCntrlViewDAO(){
		return new CntrlViewMySqlExtDAO();
	}

	/**
	 * @return ContMthdDAO
	 */
	public static function getContMthdDAO(){
		return new ContMthdMySqlExtDAO();
	}

	/**
	 * @return CstAddrDAO
	 */
	public static function getCstAddrDAO(){
		return new CstAddrMySqlExtDAO();
	}

	/**
	 * @return CstContDAO
	 */
	public static function getCstContDAO(){
		return new CstContMySqlExtDAO();
	}

	/**
	 * @return CstHitDAO
	 */
	public static function getCstHitDAO(){
		return new CstHitMySqlExtDAO();
	}

	/**
	 * @return CstHitLogDAO
	 */
	public static function getCstHitLogDAO(){
		return new CstHitLogMySqlExtDAO();
	}

	/**
	 * @return CstOffrDAO
	 */
	public static function getCstOffrDAO(){
		return new CstOffrMySqlExtDAO();
	}

	/**
	 * @return CstProfileDAO
	 */
	public static function getCstProfileDAO(){
		return new CstProfileMySqlExtDAO();
	}

	/**
	 * @return CstSgmntDAO
	 */
	public static function getCstSgmntDAO(){
		return new CstSgmntMySqlExtDAO();
	}

	/**
	 * @return CstTechReqDAO
	 */
	public static function getCstTechReqDAO(){
		return new CstTechReqMySqlExtDAO();
	}

	/**
	 * @return CstTechReqLogDAO
	 */
	public static function getCstTechReqLogDAO(){
		return new CstTechReqLogMySqlExtDAO();
	}

	/**
	 * @return CstUsrDAO
	 */
	public static function getCstUsrDAO(){
		return new CstUsrMySqlExtDAO();
	}

	/**
	 * @return GndrDAO
	 */
	public static function getGndrDAO(){
		return new GndrMySqlExtDAO();
	}

	/**
	 * @return GrpDAO
	 */
	public static function getGrpDAO(){
		return new GrpMySqlExtDAO();
	}

	/**
	 * @return ListOfValuesDAO
	 */
	public static function getListOfValuesDAO(){
		return new ListOfValuesMySqlExtDAO();
	}

	/**
	 * @return LoyDAO
	 */
	public static function getLoyDAO(){
		return new LoyMySqlExtDAO();
	}

	/**
	 * @return LoyPrgDAO
	 */
	public static function getLoyPrgDAO(){
		return new LoyPrgMySqlExtDAO();
	}

	/**
	 * @return OffrDAO
	 */
	public static function getOffrDAO(){
		return new OffrMySqlExtDAO();
	}

	/**
	 * @return PriviligeDAO
	 */
	public static function getPriviligeDAO(){
		return new PriviligeMySqlExtDAO();
	}

	/**
	 * @return ServDAO
	 */
	public static function getServDAO(){
		return new ServMySqlExtDAO();
	}

	/**
	 * @return SpnsrDAO
	 */
	public static function getSpnsrDAO(){
		return new SpnsrMySqlExtDAO();
	}

	/**
	 * @return TechAddrDAO
	 */
	public static function getTechAddrDAO(){
		return new TechAddrMySqlExtDAO();
	}

	/**
	 * @return TechContDAO
	 */
	public static function getTechContDAO(){
		return new TechContMySqlExtDAO();
	}

	/**
	 * @return TechEmailDAO
	 */
	public static function getTechEmailDAO(){
		return new TechEmailMySqlExtDAO();
	}

	/**
	 * @return TechHitDAO
	 */
	public static function getTechHitDAO(){
		return new TechHitMySqlExtDAO();
	}

	/**
	 * @return TechHitLogDAO
	 */
	public static function getTechHitLogDAO(){
		return new TechHitLogMySqlExtDAO();
	}

	/**
	 * @return TechJobsDAO
	 */
	public static function getTechJobsDAO(){
		return new TechJobsMySqlExtDAO();
	}

	/**
	 * @return TechOffrDAO
	 */
	public static function getTechOffrDAO(){
		return new TechOffrMySqlExtDAO();
	}

	/**
	 * @return TechProfileDAO
	 */
	public static function getTechProfileDAO(){
		return new TechProfileMySqlExtDAO();
	}

	/**
	 * @return TechUsrDAO
	 */
	public static function getTechUsrDAO(){
		return new TechUsrMySqlExtDAO();
	}

	/**
	 * @return TypeDAO
	 */
	public static function getTypeDAO(){
		return new TypeMySqlExtDAO();
	}

	/**
	 * @return ZonesDAO
	 */
	public static function getZonesDAO(){
		return new ZonesMySqlExtDAO();
	}


}
?>