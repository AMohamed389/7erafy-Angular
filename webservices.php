<?php
$method = $_SERVER['REQUEST_METHOD'];
if($method == "GET")
{
    if(isset($_GET["methodName"]))
    {



 if
         ($_GET["methodName"] == "insertCust")
        {
            include ('class/include_dao.php');

            $custId;
            $name;
            $nickName;
            $mobile;
            $password;
            $cstEmail;
            $birthDate;
            $cityId;
            $zoneId;
            $gender;
            $countryId;

            if(isset($_GET["name"]))
            {
                $name = $_GET["name"];
            }

            if(isset($_GET["nickName"]))
            {
                $nickName = $_GET["nickName"];
            }

            if(isset($_GET["mobile"]))
            {
                $mobile = $_GET["mobile"];
            }

            if(isset($_GET["password"]))
            {
                $password = $_GET["password"];
            }

            if(isset($_GET["cstEmail"]))
            {
                $cstEmail= $_GET["cstEmail"];
            }

            if(isset($_GET["birthDate"]))
            {
                $birthDate = $_GET["birthDate"];
            }

            if(isset($_GET["cityId"]))
            {
                $cityId = $_GET["cityId"];
            }

            if(isset($_GET["zoneId"]))
            {
                $zoneId = $_GET["zoneId"];
            }

            if(isset($_GET["gender"]))
            {
                $gender = $_GET["gender"];
            }

            if(isset($_GET["zoneId"]))
            {
                $zoneId = $_GET["zoneId"];
            }

            if(isset($_GET["countryId"]))
            {
                $countryId = $_GET["countryId"];
            }

            if($name != "" && $nickName != "" && $password != "" && $cstEmail != "" && $mobile != "" && $birthDate != ""
                && $cityId != "" && $zoneId != "" && $gender != "" && $countryId != "")
			{
				$date = date('Y-m-d H:i:s');

				$transaction = new Transaction();
				$CstProfile = new CstProfile();
				$CstProfile->cREATED = $date;
				$CstProfile->lASTUPD = $date;
				$CstProfile->cREATEDBY = "GUEST";
				$CstProfile->lASTUPDBY = "GUEST";
				$CstProfile->cSTSTAT = "New";
				$CstProfile->cSTPROFILECOMMENT = "New";
				$CstProfile->email = $cstEmail;

				DAOFactory::getCstProfileDAO()->insert($CstProfile);

				$custId = $CstProfile->iD;

				$transaction->commit();

				$transaction = new Transaction();
				$cstUsr = new CstUsr();

				$cstUsr->cREATED = $date;
				$cstUsr->lASTUPD = $date;
				$cstUsr->cREATEDBY = "GUEST";
				$cstUsr->lASTUPDBY = "GUEST";
				$cstUsr->cSTID = $custId;
				$cstUsr->uSRSTAT = "New";
				$cstUsr->uSRNAME = $cstEmail;
				$cstUsr->pSWD = $password;

				DAOFactory::getCstUsrDAO()->insert($cstUsr);

				$transaction->commit();


				$transaction = new Transaction();
				$CstCont = new CstCont();

				$CstCont->cREATED = $date;
				$CstCont->lASTUPD = $date;
				$CstCont->cREATEDBY = "GUEST";
				$CstCont->lASTUPDBY = "GUEST";
				$CstCont->cSTID = $custId;
				$CstCont->bIRTHDATE = $birthDate;
				$CstCont->mOBNUM = $mobile;
				$CstCont->cSTNAME = $name;
				$CstCont->nICKNAME = $nickName;
				$CstCont->cONTCOMMENT = "New";
				$CstCont->gENDER = $gender;

				DAOFactory::getCstContDAO()->insert($CstCont);

				$transaction->commit();


				$transaction = new Transaction();
				$CstAddr = new CstAddr();
				//echo '<br><br>'.$custId;
				$CstAddr->cREATED = $date;
				$CstAddr->lASTUPD = $date;
				$CstAddr->cREATEDBY = "GUEST";
				$CstAddr->lASTUPDBY = "GUEST";
				$CstAddr->cSTID = $custId;
				$CstAddr->cOUNTRYID = $countryId;
				$CstAddr->zoneID = $zoneId;
				$CstAddr->aDDRCOMMENT = "New";
				$CstAddr->cITYID = $cityId;

				DAOFactory::getCstAddrDAO()->insert($CstAddr);

				$transaction->commit();

                echo '[{"name":"'.$name.'","custId":"'.$custId.'","nickName":"'.$nickName.'","mobile":"'
                .$mobile.'","cstEmail":"'.$cstEmail.'","birthDate":"'.$birthDate.'","cityId":"'
                .$cityId.'","zoneId":"'.$zoneId.'","gender":"'.$gender.'","countryId":"'.$countryId
                .'","responseCode":"0","responseMessage":"success"}]';

                $custId = null;
                $name = null;
                $nickName = null;
                $mobile = null;
                $password = null;
                $cstEmail = null;
                $birthDate = null;
                $cityId = null;
                $zoneId = null;
                $gender = null;
                $countryId = null;
            }
			else
			{
                echo '{"responseCode":"-1000","responseMessage":"Input Validation Error !"}'; // Error ==> Missing mandatory field
			}
        }
        else if($_GET["methodName"] == "insertTech")
        {

            include ('./class/include_dao.php');

            $techId;
            $name;
            $nickName;
            $service;
            $password;
            $techEmail;
            $mobile;
            $birthDate;
            $cityId;
            $zoneId;
            $countryId;
            $gender;

            if(isset($_GET["name"]))
            {
                $name = $_GET["name"];
            }

            if(isset($_GET["nickName"]))
            {
                $nickName = $_GET["nickName"];
            }

            if(isset($_GET["mobile"]))
            {
                $mobile = $_GET["mobile"];
            }

            if(isset($_GET["password"]))
            {
                $password = $_GET["password"];
            }

            if(isset($_GET["techEmail"]))
            {
                $techEmail= $_GET["techEmail"];
            }

            if(isset($_GET["birthDate"]))
            {
                $birthDate = $_GET["birthDate"];
            }

            if(isset($_GET["cityId"]))
            {
                $cityId = $_GET["cityId"];
            }

            if(isset($_GET["zoneId"]))
            {
                $zoneId = $_GET["zoneId"];
            }

            if(isset($_GET["gender"]))
            {
                $gender = $_GET["gender"];
            }

            if(isset($_GET["service"]))
            {
                $service = $_GET["service"];
            }

            if(isset($_GET["countryId"]))
            {
                $countryId = $_GET["countryId"];
            }

            if($name != "" && $nickName != "" && $service && $password != "" && $techEmail != "" && $mobile != ""
                && $birthDate != "" && $cityId != "" && $zoneId != "" && $countryId != "" && $gender != "")
			{
				$date = date('Y-m-d H:i:s');

				$transaction = new Transaction();
				$TechProfile = new TechProfile();
				$TechProfile->cREATED = $date;
				$TechProfile->lASTUPD = $date;
				$TechProfile->cREATEDBY = "GUEST";
				$TechProfile->lASTUPDBY = "GUEST";
				$TechProfile->tECHSTAT = "New";
				$TechProfile->sERVID = $service;
				$TechProfile->tECHPROFILECOMMENT = "New";
				$TechProfile->email = $techEmail;

				DAOFactory::getTechProfileDAO()->insert($TechProfile);

				$techId = $TechProfile->iD;

				$transaction->commit();

				$transaction = new Transaction();
				$TechUsr = new TechUsr();

				$TechUsr->cREATED = $date;
				$TechUsr->lASTUPD = $date;
				$TechUsr->cREATEDBY = "GUEST";
				$TechUsr->lASTUPDBY = "GUEST";
				$TechUsr->tECHID = $techId;
				$TechUsr->tECHUSRSTAT = "New";
				$TechUsr->tECHUSRNAME = $techEmail;
				$TechUsr->tECHPSWD = $password;

				DAOFactory::getTechUsrDAO()->insert($TechUsr);

				$transaction->commit();

				$transaction = new Transaction();
				$TechEmail = new TechEmail();

				$TechEmail->cREATED = $date;
				$TechEmail->lASTUPD = $date;
				$TechEmail->cREATEDBY = "GUEST";
				$TechEmail->lASTUPDBY = "GUEST";
				$TechEmail->tECHID = $techId;
				$TechEmail->eMAIL = $techEmail;

				DAOFactory::getTechEmailDAO()->insert($TechEmail);

				$transaction->commit();


				$transaction = new Transaction();
				$TechCont = new TechCont();

				$TechCont->cREATED = $date;
				$TechCont->lASTUPD = $date;
				$TechCont->cREATEDBY = "GUEST";
				$TechCont->lASTUPDBY = "GUEST";
				$TechCont->tECHID = $techId;
				$TechCont->bIRTHDATE = $birthDate;
				$TechCont->mOBNUM = $mobile;
				$TechCont->tECNAME = $name;
				$TechCont->nICKNAME = $nickName;
				$TechCont->cONTCOMMENT = "New";

				DAOFactory::getTechContDAO()->insert($TechCont);

				$transaction->commit();


				$transaction = new Transaction();
				$TechAddr = new TechAddr();
				$TechAddr->cREATED = $date;
				$TechAddr->lASTUPD = $date;
				$TechAddr->cREATEDBY = "GUEST";
				$TechAddr->lASTUPDBY = "GUEST";
				$TechAddr->tECHID = $techId;
				$TechAddr->cOUNTRYID = $countryId;
				$TechAddr->zONEID = $zoneId;
				$TechAddr->aDDRCOMMENT = "New";
				$TechAddr->cITYID = $cityId;

				DAOFactory::getTechAddrDAO()->insert($TechAddr);

				$transaction->commit();

                echo '[{"name":"'.$name.'","techId":"'.$techId.'","nickName":"'.$nickName.'","mobile":"'
                .$mobile.'","techEmail":"'.$techEmail.'","birthDate":"'.$birthDate.'","cityId":"'
                .$cityId.'","zoneId":"'.$zoneId.'","gender":"'.$gender.'","countryId":"'.$countryId
                .',"service" : "'.$service
                .'","responseCode":"0","responseMessage":"success"}]';

                $techId = null;
                $name = null;
                $nickName = null;
                $service = null;
                $password = null;
                $techEmail = null;
                $mobile = null;
                $birthDate = null;
                $cityId = null;
                $zoneId = null;
                $countryId = null;
                $gender = null;

            }
            else
			{
                echo '{"responseCode":"-1000","responseMessage":"Input Validation Error !"}'; // Error ==> Missing mandatory field
			}
        }
        else if($_GET["methodName"] == "validateCstEmail")
        {

            include ('./class/include_dao.php');

            $cstEmail;

            if(isset($_GET["cstEmail"]))
            {
                $cstEmail = $_GET["cstEmail"];
            }

            $transaction = new Transaction();
            $existEmail = DAOFactory::getCstProfileDAO()->queryByEmail($cstEmail);

            if(count($existEmail) == "")
            {
                echo '[{"customerState":"new","responseCode":"0","responseMessage":"success"}]';
            }
            else
            {
                echo '[{"customerState":"current","cstEmail":"'.$cstEmail.'","responseCode":"-1001","responseMessage":"Email Already Exist !"}]';
            }

            $cstEmail = null;
        }
        else if($_GET["methodName"] == "validateTechEmail")
        {
            include ('./class/include_dao.php');

            $techEmail;

            if(isset($_GET["techEmail"]))
            {
                $techEmail = $_GET["techEmail"];
            }

            $transaction = new Transaction();
            $existEmail = DAOFactory::getTechProfileDAO()->queryByEmail($techEmail);

            if(count($existEmail) == "")
            {
                echo '[{"customerState":"new","responseCode":"0","responseMessage":"success"}]';
            }
            else
            {
                echo '[{"customerState":"current","techEmail":"'.$techEmail.'","responseCode":"-1001","responseMessage":"Email Already Exist !"}]';
            }

            $techEmail = null;
        }

        else if($_GET["methodName"] == "getAllTech")
        {
            $techId = null;
            $urlImg = null;
            $response = null;

            include ('./class/include_dao.php');

            $allTech = DAOFactory::getTechProfileDAO()->queryAll();

            for($i=0;$i<count($allTech);$i++)
            {
                $row = $allTech[$i];
                $techId = $row->iD;
                $allTech1 = DAOFactory::getTechContDAO()->queryByTECHID($techId);
                $allTech2 = DAOFactory::getServDAO()->load($row->sERVID);
                $allTech3 = DAOFactory::getTechAddrDAO()->queryByTECHID($techId);
                $allTech4 = DAOFactory::getZonesDAO()->load($allTech3[0]->zONEID);
                $allTech5 = DAOFactory::getCitiesDAO()->load($allTech3[0]->cITYID);
                $techName = $allTech1[0]->tECNAME;
                $techNickName = $allTech1[0]->nICKNAME;
                $mobile = $allTech1[0]->mOBNUM;
                $serviceName = $allTech2->sERVNAME;
                $techEmail = $row->email;
                $birthDate = $allTech1[0]->bIRTHDATE;

                if($row->sERVID == "1")
                {
                    $urlImg = "./img/Plumbing.png";
                }
                else if($row->sERVID == "2")
                {
                    $urlImg = "./img/Carpentry.png";
                }
                else if($row->sERVID == "3")
                {
                    $urlImg = "./img/Painting.png";
                }
                else if($row->sERVID == "4")
                {
                    $urlImg = "./img/Flooring.png";
                }
                else if($row->sERVID == "5")
                {
                    $urlImg = "./img/FenceRepair.png";
                }
                $cityName = $allTech5->cityArName;
                $zoneName = $allTech4->arabicZone;

                if($response != null)
                {
                    $response = $response.','.'{"serviceName":"'.$serviceName.'","techId":"'
                    .$techId.'","nickName":"'
                    .$techNickName.'","mobile":"'
                    .$mobile.'","techEmail":"'.$techEmail.'","birthDate":"'.$birthDate.'","cityName":"'
                    .$cityName.'","zoneName":"'.$zoneName.'","urlImg":"'.$urlImg.
                    '","responseCode":"0","responseMessage":"success"}]';
                }
                else
                {
                    $response = '[{"serviceName":"'.$serviceName.'","techId":"'.$techId.'","nickName":"'
                        .$techNickName.'","mobile":"'
                    .$mobile.'","techEmail":"'.$techEmail.'","birthDate":"'.$birthDate.'","cityName":"'
                    .$cityName.'","zoneName":"'.$zoneName.'","urlImg":"'.$urlImg.
                    '","responseCode":"0","responseMessage":"success"}';
                }
            }
            echo $response;

        }

        else if($_GET["methodName"] == "log")
        {
            include ('./class/include_dao.php');
            $viewId = null;
            $btnId = null;
            $btnName = null;
            $custHitId = null;
            $viewUrl = null;
            $UploadName = null;
            $loginViewId = null;
            $techId = null;
            $systemUser = null;
            $searchKeywordId = null;
            $uploadId = null;

            if(isset($_GET["btnName"]))
            {
                $btnName = $_GET["btnName"];
            }

            if(isset($_GET["custHitId"]))
            {
                $custHitId = $_GET["custHitId"];
            }

            if(isset($_GET["UploadName"]))
            {
                $UploadName = $_GET["UploadName"];
            }

            if(isset($_GET["loginViewId"]))
            {
                $loginViewId = $_GET["loginViewId"];
            }

            if(isset($_GET["techId"]))
            {
                $techId = $_GET["techId"];
            }

            if(isset($_GET["systemUser"]))
            {
                $systemUser = $_GET["systemUser"];
            }

            if(isset($_GET["searchKeywordId"]))
            {
                $searchKeywordId = $_GET["searchKeywordId"];
            }

            if(isset($_GET["uploadId"]))
            {
                $uploadId = $_GET["uploadId"];
            }

            if(isset($_GET["viewUrl"]))
            {
                $viewUrl= $_GET["viewUrl"];
            }

            $transaction = new Transaction();
            if($btnName != "")
            {
                $viewId = DAOFactory::getCntrlViewDAO()->queryByVIEWCOMMENT($viewUrl);
                $btnId = DAOFactory::getCntrlBtnDAO()->queryByPARVIEWID($viewId[0]->iD);
                for($i=0;$i<count($btnId);$i++){
                    $row = $btnId[$i];
                    if($row->cNTRLNAME == $btnName)
                    {
                        $btnId = $row->iD;
                        $viewId = $viewId[0]->iD;
                        break;
                    }
                }

            }

            if($btnName == "" && $viewUrl != "")
            {
                $viewId = DAOFactory::getCntrlViewDAO()->queryByVIEWCOMMENT($viewUrl);
                $viewId = $viewId[0]->iD;
            }

            //$transaction = new Transaction();

            $date = date('Y-m-d H:i:s');

            $CstHitLog = new CstHitLog();

            $CstHitLog->cREATEDBY = $systemUser;
            $CstHitLog->lASTUPDBY = $systemUser;
            $CstHitLog->cREATED = $date;
            $CstHitLog->lASTUPD = $date;
            $CstHitLog->vIEWID = $viewId;
            $CstHitLog->bTNID = $btnId;
            $CstHitLog->tECHID = $techId;
            $CstHitLog->cSTHITID = $custHitId;
            $CstHitLog->sRCHKEYWRDID = $searchKeywordId;
            $CstHitLog->uPLDID = $uploadId;
            $CstHitLog->lOGINVIEWID = $loginViewId;

            DAOFactory::getCstHitLogDAO()->insert($CstHitLog);

            $transaction->commit();


            echo '[{"responseCode":"0","responseMessage":"success"}]';
        }
        else if($_GET["methodName"] == "search")
        {
            include ('./class/include_dao.php');
            $cityId = null;
            $zoneId = null;
            $serviceId = null;
            $urlImg = null;
            $response = null;

            if(isset($_GET["cityId"]))
            {
                $cityId = $_GET["cityId"];
            }

            if(isset($_GET["zoneId"]))
            {
                $zoneId = $_GET["zoneId"];
            }

            if(isset($_GET["serviceId"]))
            {
                $serviceId = $_GET["serviceId"];
            }
//search parameters
            if($cityId != "" && $zoneId != "" && $serviceId != "")
            {
                $tech = DAOFactory::getTechAddrDAO()->queryByCITYID($cityId);
                for($i=0;$i<count($tech);$i++)
                {
                    $row = $tech[$i];
                    if($row->zONEID == $zoneId)
                    {
                        $tech1 = DAOFactory::getTechProfileDAO()->load($row->tECHID);
                        if($tech1->sERVID == $serviceId)
                        {
                            if($serviceId == "1")
                            {
                                $urlImg = "./img/Plumbing.png";
                            }
                            else if($serviceId == "2")
                            {
                                $urlImg = "./img/Carpentry.png";
                            }
                            else if($serviceId == "3")
                            {
                                $urlImg = "./img/Painting.png";
                            }
                            else if($serviceId == "4")
                            {
                                $urlImg = "./img/Flooring.png";
                            }
                            else if($serviceId == "5")
                            {
                                $urlImg = "./img/FenceRepair.png";
                            }
                            $allTech1 = DAOFactory::getTechContDAO()->queryByTECHID($row->tECHID);
                            $allTech2 = DAOFactory::getServDAO()->load($tech1->sERVID);
                            $allTech4 = DAOFactory::getZonesDAO()->load($row->zONEID);
                            $allTech5 = DAOFactory::getCitiesDAO()->load($row->cITYID);
                            $techName = $allTech1[0]->tECNAME;
                            $cityName = $allTech5->cityArName;
                            $zoneName = $allTech4->arabicZone;
                            //modified by shalaby , skip errro cannot get value of non-object
                            //old value $allTech2->sERVNAME;
                            $servName = "";
                            $techNickName = $allTech1[0]->nICKNAME;
                            $mobile = $allTech1[0]->mOBNUM;
                            $techEmail = $tech1->email;
                            $birthDate = $allTech1[0]->bIRTHDATE;
                            $techId = $row->tECHID;

                            if($response != null)
                            {
                                $response = $response.','.'{"serviceName":"'.$servName.'","techId":"'
                                .$techId.'","nickName":"'
                                .$techNickName.'","mobile":"'
                                .$mobile.'","techEmail":"'.$techEmail.'","birthDate":"'.$birthDate.'","cityName":"'
                                .$cityName.'","zoneName":"'.$zoneName.'","cityId":"'.$cityId
                                .'","zoneId":"'.$zoneId.'","serviceId":"'.$serviceId.'","urlImg":"'.$urlImg.
                                '","responseCode":"0","responseMessage":"success"}]';
                            }
                            else
                            {
                                $response = '[{"serviceName":"'.$servName.'","techId":"'
                                .$techId.'","nickName":"'
                                .$techNickName.'","mobile":"'
                                .$mobile.'","techEmail":"'.$techEmail.'","birthDate":"'.$birthDate.'","cityName":"'
                                .$cityName.'","zoneName":"'.$zoneName.'","cityId":"'.$cityId
                                .'","zoneId":"'.$zoneId.'","serviceId":"'.$serviceId.'","urlImg":"'.$urlImg.
                                '","responseCode":"0","responseMessage":"success"}';
                            }

                        }
                    }
                }
            }
            else if($cityId != "" && $zoneId == "" && $serviceId != "")
            {
                $tech = DAOFactory::getTechAddrDAO()->queryByCITYID($cityId);
                for($i=0;$i<count($tech);$i++)
                {
                    $row = $tech[$i];
                    $tech1 = DAOFactory::getTechProfileDAO()->load($row->tECHID);
                    if($tech1->sERVID == $serviceId)
                    {
                        if($serviceId == "1")
                        {
                            $urlImg = "./img/Plumbing.png";
                        }
                        else if($serviceId == "2")
                        {
                            $urlImg = "./img/Carpentry.png";
                        }
                        else if($serviceId == "3")
                        {
                            $urlImg = "./img/Painting.png";
                        }
                        else if($serviceId == "4")
                        {
                            $urlImg = "./img/Flooring.png";
                        }
                        else if($serviceId == "5")
                        {
                            $urlImg = "./img/FenceRepair.png";
                        }
                        $allTech1 = DAOFactory::getTechContDAO()->queryByTECHID($row->tECHID);
                        $allTech2 = DAOFactory::getServDAO()->load($tech1->sERVID);
                        $allTech4 = DAOFactory::getZonesDAO()->load($row->zONEID);
                        $allTech5 = DAOFactory::getCitiesDAO()->load($row->cITYID);
                        $techName = $allTech1[0]->tECNAME;
                        $cityName = $allTech5->cityArName;
                        $zoneName = $allTech4->arabicZone;
                        $servName = $allTech2->sERVNAME;
                        $techNickName = $allTech1[0]->nICKNAME;
                        $mobile = $allTech1[0]->mOBNUM;
                        $techEmail = $tech1->email;
                        $birthDate = $allTech1[0]->bIRTHDATE;
                        $techId = $row->tECHID;
                        $zoneId = $row->zONEID;

                        if($response != null)
                        {
                            $response = $response.','.'{"serviceName":"'.$servName.'","techId":"'
                            .$techId.'","nickName":"'
                            .$techNickName.'","mobile":"'
                            .$mobile.'","techEmail":"'.$techEmail.'","birthDate":"'.$birthDate.'","cityName":"'
                            .$cityName.'","zoneName":"'.$zoneName.'","cityId":"'.$cityId
                            .'","zoneId":"'.$zoneId.'","serviceId":"'.$serviceId.'","urlImg":"'.$urlImg.
                            '","responseCode":"0","responseMessage":"success"}]';
                        }
                        else
                        {
                            $response = '[{"serviceName":"'.$servName.'","techId":"'
                            .$techId.'","nickName":"'
                            .$techNickName.'","mobile":"'
                            .$mobile.'","techEmail":"'.$techEmail.'","birthDate":"'.$birthDate.'","cityName":"'
                            .$cityName.'","zoneName":"'.$zoneName.'","cityId":"'.$cityId
                            .'","zoneId":"'.$zoneId.'","serviceId":"'.$serviceId.'","urlImg":"'.$urlImg.
                            '","responseCode":"0","responseMessage":"success"}';
                        }

                    }
                }
            }
            else if($cityId == "" && $zoneId == "" && $serviceId != "")
            {
                $tech = DAOFactory::getTechProfileDAO()->queryBySERVID($serviceId);
                for($i=0;$i<count($tech);$i++)
                {
                    $row = $tech[$i];
                    if($serviceId == "1")
                    {
                        $urlImg = "./img/Plumbing.png";
                    }
                    else if($serviceId == "2")
                    {
                        $urlImg = "./img/Carpentry.png";
                    }
                    else if($serviceId == "3")
                    {
                        $urlImg = "./img/Painting.png";
                    }
                    else if($serviceId == "4")
                    {
                        $urlImg = "./img/Flooring.png";
                    }
                    else if($serviceId == "5")
                    {
                        $urlImg = "./img/FenceRepair.png";
                    }
                    $tech1 = DAOFactory::getTechAddrDAO()->queryByTECHID($row->iD);
                    $allTech1 = DAOFactory::getTechContDAO()->queryByTECHID($row->iD);
                    $allTech2 = DAOFactory::getServDAO()->load($serviceId);
                    $allTech4 = DAOFactory::getZonesDAO()->load($tech1[0]->zONEID);
                    $allTech5 = DAOFactory::getCitiesDAO()->load($tech1[0]->cITYID);
                    $techName = $allTech1[0]->tECNAME;
                    $cityName = $allTech5->cityArName;
                    $zoneName = $allTech4->arabicZone;
                    $servName = $allTech2->sERVNAME;
                    $techNickName = $allTech1[0]->nICKNAME;
                    $mobile = $allTech1[0]->mOBNUM;
                    $techEmail = $row->email;
                    $birthDate = $allTech1[0]->bIRTHDATE;
                    $techId = $row->iD;
                    $zoneId = $tech1[0]->zONEID;
                    $cityId = $tech1[0]->cITYID;

                    if($response != null)
                    {
                        $response = $response.','.'{"serviceName":"'.$servName.'","techId":"'
                        .$techId.'","nickName":"'
                        .$techNickName.'","mobile":"'
                        .$mobile.'","techEmail":"'.$techEmail.'","birthDate":"'.$birthDate.'","cityName":"'
                        .$cityName.'","zoneName":"'.$zoneName.'","cityId":"'.$cityId
                        .'","zoneId":"'.$zoneId.'","serviceId":"'.$serviceId.'","urlImg":"'.$urlImg.
                        '","responseCode":"0","responseMessage":"success"}]';
                    }
                    else
                    {
                        $response = '[{"serviceName":"'.$servName.'","techId":"'
                        .$techId.'","nickName":"'
                        .$techNickName.'","mobile":"'
                        .$mobile.'","techEmail":"'.$techEmail.'","birthDate":"'.$birthDate.'","cityName":"'
                        .$cityName.'","zoneName":"'.$zoneName.'","cityId":"'.$cityId
                        .'","zoneId":"'.$zoneId.'","serviceId":"'.$serviceId.'","urlImg":"'.$urlImg.
                        '","responseCode":"0","responseMessage":"success"}';
                    }
                }
            }
            echo $response;
        }
        else if($_GET["methodName"] == "getTechById")
        {

            include ('./class/include_dao.php');

            $techId = null;
            $urlImg = null;

            if(isset($_GET["techId"]))
            {
                $techId = $_GET["techId"];
            }

            if($techId != "")
            {
                $tech = DAOFactory::getTechProfileDAO()->load($techId);

                if($tech != "")
                {
                    $allTech1 = DAOFactory::getTechContDAO()->queryByTECHID($techId);
                    $allTech2 = DAOFactory::getServDAO()->load($tech->sERVID);
                    $allTech3 = DAOFactory::getTechAddrDAO()->queryByTECHID($techId);
                    $allTech4 = DAOFactory::getZonesDAO()->load($allTech3[0]->zONEID);
                    $allTech5 = DAOFactory::getCitiesDAO()->load($allTech3[0]->cITYID);
                    $techName = $allTech1[0]->tECNAME;
                    $techNickName = $allTech1[0]->nICKNAME;
                    $mobile = $allTech1[0]->mOBNUM;
                    $serviceName = $allTech2->sERVNAME;
                    $techEmail = $tech->email;
                    $birthDate = $allTech1[0]->bIRTHDATE;
                    $cityName = $allTech5->cityArName;
                    $zoneName = $allTech4->arabicZone;
                    $techStatus = $tech->tECHSTAT;
                    $techLoyId = $tech->tECHLOYID;
                    $tECHHITID = $tech->tECHHITID;
                    $tECHSGMNTID = $tech->tECHSGMNTID;
                    $tECHGRPID = $tech->tECHGRPID;
                    $tECHTYPEID = $tech->tECHTYPEID;
                    $tECHPROFILECOMMENT = $tech->tECHPROFILECOMMENT;
                    $tECHPRICEAVG = $tech->tECHPRICEAVG;
                    $gENDERID = $allTech1[0]->gENDERID;
                    $mOBNUM = $allTech1[0]->mOBNUM;
                    $contId = $allTech1[0]->iD;
                    $addrId = $allTech3[0]->iD;

                    if($tech->sERVID == "1")
                    {
                        $urlImg = "./img/Plumbing.png";
                    }
                    else if($tech->sERVID == "2")
                    {
                        $urlImg = "./img/Carpentry.png";
                    }
                    else if($tech->sERVID == "3")
                    {
                        $urlImg = "./img/Painting.png";
                    }
                    else if($tech->sERVID == "4")
                    {
                        $urlImg = "./img/Flooring.png";
                    }
                    else if($tech->sERVID == "5")
                    {
                        $urlImg = "./img/FenceRepair.png";
                    }


                    echo '[{"serviceName":"'.$serviceName.'","techId":"'
                    .$techId.'","nickName":"'
                    .$techNickName.'","mobile":"'
                    .$mobile.'","techEmail":"'.$techEmail.'","birthDate":"'.$birthDate.'","cityName":"'
                    .$cityName.'","zoneName":"'.$zoneName.'","urlImg":"'.$urlImg.
                    '","techStatus":"'.$techStatus
                    .'","techLoyId":"'.$techLoyId.'","tECHHITID":"'.$tECHHITID.
                    '","tECHSGMNTID":"'.$tECHSGMNTID.'","tECHGRPID":"'.$tECHGRPID.
                    '","tECHTYPEID":"'.$tECHTYPEID
                    .'","tECHPROFILECOMMENT":"'.$tECHPROFILECOMMENT.'","tECHPRICEAVG":"'.$tECHPRICEAVG
                    .'","gENDERID":"'.$gENDERID.'","mOBNUM":"'.$mOBNUM.
                    ',"contId":"'.$contId.',"addrId":"'.$addrId.',"responseCode":"0","responseMessage":"success"}]';
                }
            }
        }
        else
        {
            echo '[{"responseCode":"-1002","responseMessage":"Invalid Method Name !"}]';
        }
    }
    else
    {
        echo '[{"responseCode":"-1003","responseMessage":"Missing methodName parameter !"}]';
    }
}

?>
