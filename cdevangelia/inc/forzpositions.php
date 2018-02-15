<?php
defined('_JEXEC') or die;
$objetoDisFuncion= new DisFuncion;
$mobilesearch = $this->params->get('mobilesearch');
$mobilecontact = $this->params->get('mobilecontact');
$mobiletop1a = $this->params->get('mobileTop1a');
$mobiletop1b = $this->params->get('mobileTop1b');
$mobiletop1c = $this->params->get('mobileTop1c');
$mobiletop1d = $this->params->get('mobileTop1d');
$mobileheadera = $this->params->get('mobileHeadera');
$mobileheaderb = $this->params->get('mobileHeaderb');
$mobileheaderc = $this->params->get('mobileHeaderc');
$mobileheaderd = $this->params->get('mobileHeaderd');
$mobiletop2a = $this->params->get('mobileTop2a');
$mobiletop2b = $this->params->get('mobileTop2b');
$mobiletop2c = $this->params->get('mobileTop2c');
$mobiletop2d = $this->params->get('mobileTop2d');
$mobiletop3a = $this->params->get('mobileTop3a');
$mobiletop3b = $this->params->get('mobileTop3b');
$mobiletop3c = $this->params->get('mobileTop3c');
$mobiletop3d = $this->params->get('mobileTop3d');
$mobiletop4a = $this->params->get('mobileTop4a');
$mobiletop4b = $this->params->get('mobileTop4b');
$mobiletop4c = $this->params->get('mobileTop4c');
$mobiletop4d = $this->params->get('mobileTop4d');
$mobilelefta = $this->params->get('mobileLefta');
$mobileleftb = $this->params->get('mobileLeftb');
$mobilerighta = $this->params->get('mobileRighta');
$mobilerightb = $this->params->get('mobileRightb');
$mobilemainta = $this->params->get('mobileMainta');
$mobilemaintb = $this->params->get('mobileMaintb');
$mobilemainba = $this->params->get('mobileMainba');
$mobilemainbb = $this->params->get('mobileMainbb');
$mobilemain = $this->params->get('mobileMain');
$mobilebottom1a = $this->params->get('mobileBottom1a');
$mobilebottom1b = $this->params->get('mobileBottom1b');
$mobilebottom1c = $this->params->get('mobileBottom1c');
$mobilebottom1d = $this->params->get('mobileBottom1d');
$mobilebottom2a = $this->params->get('mobileBottom2a');
$mobilebottom2b = $this->params->get('mobileBottom2b');
$mobilebottom2c = $this->params->get('mobileBottom2c');
$mobilebottom2d = $this->params->get('mobileBottom2d');
$mobilebottom3a = $this->params->get('mobileBottom3a');
$mobilebottom3b = $this->params->get('mobileBottom3b');
$mobilebottom3c = $this->params->get('mobileBottom3c');
$mobilebottom3d = $this->params->get('mobileBottom3d');
$mobilebottom4a = $this->params->get('mobileBottom4a');
$mobilebottom4b = $this->params->get('mobileBottom4b');
$mobilebottom4c = $this->params->get('mobileBottom4c');
$mobilebottom4d = $this->params->get('mobileBottom1d');
$mobilefootera = $this->params->get('mobileFootera');
$mobilefooterb = $this->params->get('mobileFooterb');
$mobilefooterc = $this->params->get('mobileFooterc');
$mobilefooterd = $this->params->get('mobileFooterd');
$mobiledataa = $this->params->get('mobiledataa');
$mobiledatab = $this->params->get('mobiledatab');
$mobiledatac = $this->params->get('mobiledatac');
$mobiledatad = $this->params->get('mobiledatad');
$mobilelogo = $this->params->get('mobileSowLogo');
$mobilemenu = $this->params->get('mobileSowMenu');
$mobilemenuc = $this->params->get('mobileMenuc');
$mobilemenud = $this->params->get('mobileMenud');
$tabletsearch = $this->params->get('tabletsearch');
$tablettop1a = $this->params->get('tabletcontact');
$tabletcontact = $this->params->get('tabletTop1a');
$tablettop1b = $this->params->get('tabletTop1b');
$tablettop1c = $this->params->get('tabletTop1c');
$tablettop1d = $this->params->get('tabletTop1d');
$tabletheadera = $this->params->get('tabletHeadera');
$tabletheaderb = $this->params->get('tabletHeaderb');
$tabletheaderc = $this->params->get('tabletHeaderc');
$tabletheaderd = $this->params->get('tabletHeaderd');
$tablettop2a = $this->params->get('tabletTop2a');
$tablettop2b = $this->params->get('tabletTop2b');
$tablettop2c = $this->params->get('tabletTop2c');
$tablettop2d = $this->params->get('tabletTop2d');
$tablettop3a = $this->params->get('tabletTop3a');
$tablettop3b = $this->params->get('tabletTop3b');
$tablettop3c = $this->params->get('tabletTop3c');
$tablettop3d = $this->params->get('tabletTop3d');
$tablettop4a = $this->params->get('tabletTop4a');
$tablettop4b = $this->params->get('tabletTop4b');
$tablettop4c = $this->params->get('tabletTop4c');
$tablettop4d = $this->params->get('tabletTop4d');
$tabletlefta = $this->params->get('tabletLefta');
$tabletleftb = $this->params->get('tabletLeftb');
$tabletrighta = $this->params->get('tabletRighta');
$tabletrightb = $this->params->get('tabletRightb');
$tabletmainta = $this->params->get('tabletMainta');
$tabletmaintb = $this->params->get('tabletMaintb');
$tabletmainba = $this->params->get('tabletMainba');
$tabletmainbb = $this->params->get('tabletMainbb');
$tabletmain = $this->params->get('tabletMain');
$tabletbottom1a = $this->params->get('tabletBottom1a');
$tabletbottom1b = $this->params->get('tabletBottom1b');
$tabletbottom1c = $this->params->get('tabletBottom1c');
$tabletbottom1d = $this->params->get('tabletBottom1d');
$tabletbottom2a = $this->params->get('tabletBottom2a');
$tabletbottom2b = $this->params->get('tabletBottom2b');
$tabletbottom2c = $this->params->get('tabletBottom2c');
$tabletbottom2d = $this->params->get('tabletBottom2d');
$tabletbottom3a = $this->params->get('tabletBottom3a');
$tabletbottom3b = $this->params->get('tabletBottom3b');
$tabletbottom3c = $this->params->get('tabletBottom3c');
$tabletbottom3d = $this->params->get('tabletBottom3d');
$tabletbottom4a = $this->params->get('tabletBottom4a');
$tabletbottom4b = $this->params->get('tabletBottom4b');
$tabletbottom4c = $this->params->get('tabletBottom4c');
$tabletbottom4d = $this->params->get('tabletBottom1d');
$tabletfootera = $this->params->get('tabletFootera');
$tabletfooterb = $this->params->get('tabletFooterb');
$tabletfooterc = $this->params->get('tabletFooterc');
$tabletfooterd = $this->params->get('tabletFooterd');
$tabletdataa = $this->params->get('tabletdataa');
$tabletdatab = $this->params->get('tabletdatab');
$tabletdatac = $this->params->get('tabletdatac');
$tabletdatad = $this->params->get('tabletdatad');
$tabletlogo = $this->params->get('tabletSowLogo');
$tabletmenu = $this->params->get('tabletSowMenu');
$tabletmenuc = $this->params->get('tabletMenuc');
$tabletmenud = $this->params->get('tabletMenud');
$pcsearch = $this->params->get('pcsearch');
$pccontact = $this->params->get('pccontact');
$pctop1a = $this->params->get('pcTop1a');
$pctop1b = $this->params->get('pcTop1b');
$pctop1c = $this->params->get('pcTop1c');
$pctop1d = $this->params->get('pcTop1d');
$pcheadera = $this->params->get('pcHeadera');
$pcheaderb = $this->params->get('pcHeaderb');
$pcheaderc = $this->params->get('pcHeaderc');
$pcheaderd = $this->params->get('pcHeaderd');
$pctop2a = $this->params->get('pcTop2a');
$pctop2b = $this->params->get('pcTop2b');
$pctop2c = $this->params->get('pcTop2c');
$pctop2d = $this->params->get('pcTop2d');
$pctop3a = $this->params->get('pcTop3a');
$pctop3b = $this->params->get('pcTop3b');
$pctop3c = $this->params->get('pcTop3c');
$pctop3d = $this->params->get('pcTop3d');
$pctop4a = $this->params->get('pcTop4a');
$pctop4b = $this->params->get('pcTop4b');
$pctop4c = $this->params->get('pcTop4c');
$pctop4d = $this->params->get('pcTop4d');
$pclefta = $this->params->get('pcLefta');
$pcleftb = $this->params->get('pcLeftb');
$pcrighta = $this->params->get('pcRighta');
$pcrightb = $this->params->get('pcRightb');
$pcmainta = $this->params->get('pcMainta');
$pcmaintb = $this->params->get('pcMaintb');
$pcmainba = $this->params->get('pcMainba');
$pcmainbb = $this->params->get('pcMainbb');
$pcmain = $this->params->get('pcMain');
$pcbottom1a = $this->params->get('pcBottom1a');
$pcbottom1b = $this->params->get('pcBottom1b');
$pcbottom1c = $this->params->get('pcBottom1c');
$pcbottom1d = $this->params->get('pcBottom1d');
$pcbottom2a = $this->params->get('pcBottom2a');
$pcbottom2b = $this->params->get('pcBottom2b');
$pcbottom2c = $this->params->get('pcBottom2c');
$pcbottom2d = $this->params->get('pcBottom2d');
$pcbottom3a = $this->params->get('pcBottom3a');
$pcbottom3b = $this->params->get('pcBottom3b');
$pcbottom3c = $this->params->get('pcBottom3c');
$pcbottom3d = $this->params->get('pcBottom3d');
$pcbottom4a = $this->params->get('pcBottom4a');
$pcbottom4b = $this->params->get('pcBottom4b');
$pcbottom4c = $this->params->get('pcBottom4c');
$pcbottom4d = $this->params->get('pcBottom1d');
$pcfootera = $this->params->get('pcFootera');
$pcfooterb = $this->params->get('pcFooterb');
$pcfooterc = $this->params->get('pcFooterc');
$pcfooterd = $this->params->get('pcFooterd');
$pcdataa = $this->params->get('pcdataa');
$pcdatab = $this->params->get('pcdatab');
$pcdatac = $this->params->get('pcdatac');
$pcdatad = $this->params->get('pcdatad');
$pclogo = $this->params->get('pcSowLogo');
$pcmenu = $this->params->get('pcSowMenu');
$pcmenuc = $this->params->get('pcMenuc');
$pcmenud = $this->params->get('pcMenucd');
$objetoDisFuncion->positionhidden($searchhd, $mobilesearch, $tabletsearch, $pcsearch);
$objetoDisFuncion->positionhidden($contacthd, $mobilecontact, $tabletcontact, $pccontact);
$objetoDisFuncion->positionhidden($top1ahd, $mobiletop1a, $tablettop1a, $pctop1a);
$objetoDisFuncion->positionhidden($top1bhd, $mobiletop1b, $tablettop1b, $pctop1b);
$objetoDisFuncion->positionhidden($top1chd, $mobiletop1c, $tablettop1c, $pctop1c);
$objetoDisFuncion->positionhidden($top1dhd, $mobiletop1d, $tablettop1d, $pctop1d);
$objetoDisFuncion->positionhidden($headerahd, $mobileheadera, $tabletheadera, $pcheadera);
$objetoDisFuncion->positionhidden($headerbhd, $mobileheaderb, $tabletheaderb, $pcheaderb);
$objetoDisFuncion->positionhidden($headerchd, $mobileheaderc, $tabletheaderc, $pcheaderc);
$objetoDisFuncion->positionhidden($headerdhd, $mobileheaderd, $tabletheaderd, $pcheaderd);
$objetoDisFuncion->positionhidden($top2ahd, $mobiletop2a, $tablettop2a, $pctop2a);
$objetoDisFuncion->positionhidden($top2bhd, $mobiletop2b, $tablettop2b, $pctop2b);
$objetoDisFuncion->positionhidden($top2chd, $mobiletop2c, $tablettop2c, $pctop2c);
$objetoDisFuncion->positionhidden($top2dhd, $mobiletop2d, $tablettop2d, $pctop2d);
$objetoDisFuncion->positionhidden($top3ahd, $mobiletop3a, $tablettop3a, $pctop3a);
$objetoDisFuncion->positionhidden($top3bhd, $mobiletop3b, $tablettop3b, $pctop3b);
$objetoDisFuncion->positionhidden($top3chd, $mobiletop3c, $tablettop3c, $pctop3c);
$objetoDisFuncion->positionhidden($top3dhd, $mobiletop3d, $tablettop3d, $pctop3d);
$objetoDisFuncion->positionhidden($top4ahd, $mobiletop4a, $tablettop4a, $pctop4a);
$objetoDisFuncion->positionhidden($top4bhd, $mobiletop4b, $tablettop4b, $pctop4b);
$objetoDisFuncion->positionhidden($top4chd, $mobiletop4c, $tablettop4c, $pctop4c);
$objetoDisFuncion->positionhidden($top4dhd, $mobiletop4d, $tablettop4d, $pctop4d);
$objetoDisFuncion->positionhidden($leftahd, $mobilelefta, $tabletlefta, $pclefta);
$objetoDisFuncion->positionhidden($leftbhd, $mobileleftb, $tabletleftb, $pcleftb);
$objetoDisFuncion->positionhidden($rightahd, $mobilerighta, $tabletrighta, $pcrighta);
$objetoDisFuncion->positionhidden($rightbhd, $mobilerightb, $tabletrightb, $pcrightb);
$objetoDisFuncion->positionhidden($maintopahd, $mobilemainta, $tabletmainta, $pcmainta);
$objetoDisFuncion->positionhidden($maintopbhd, $mobilemaintb, $tabletmaintb, $pcmaintb);
$objetoDisFuncion->positionhidden($mainbottomahd, $mobilemainba, $tabletmainba, $pcmainba);
$objetoDisFuncion->positionhidden($mainbottombhd, $mobilemainbb, $tabletmainbb, $pcmainbb);
$objetoDisFuncion->positionhidden($mainhd, $mobilemain, $tabletmain, $pcmain);
$objetoDisFuncion->positionhidden($bottom1ahd, $mobilebottom1a, $tabletbottom1a, $pcbottom1a);
$objetoDisFuncion->positionhidden($bottom1bhd, $mobilebottom1b, $tabletbottom1b, $pcbottom1b);
$objetoDisFuncion->positionhidden($bottom1chd, $mobilebottom1c, $tabletbottom1c, $pcbottom1c);
$objetoDisFuncion->positionhidden($bottom1dhd, $mobilebottom1d, $tabletbottom1d, $pcbottom1d);
$objetoDisFuncion->positionhidden($bottom2ahd, $mobilebottom2a, $tabletbottom2a, $pcbottom2a);
$objetoDisFuncion->positionhidden($bottom2bhd, $mobilebottom2b, $tabletbottom2b, $pcbottom2b);
$objetoDisFuncion->positionhidden($bottom2chd, $mobilebottom2c, $tabletbottom2c, $pcbottom2c);
$objetoDisFuncion->positionhidden($bottom2dhd, $mobilebottom2d, $tabletbottom2d, $pcbottom2d);
$objetoDisFuncion->positionhidden($bottom3ahd, $mobilebottom3a, $tabletbottom3a, $pcbottom3a);
$objetoDisFuncion->positionhidden($bottom3bhd, $mobilebottom3b, $tabletbottom3b, $pcbottom3b);
$objetoDisFuncion->positionhidden($bottom3chd, $mobilebottom3c, $tabletbottom3c, $pcbottom3c);
$objetoDisFuncion->positionhidden($bottom3dhd, $mobilebottom3d, $tabletbottom3d, $pcbottom3d);
$objetoDisFuncion->positionhidden($bottom4ahd, $mobilebottom4a, $tabletbottom4a, $pcbottom4a);
$objetoDisFuncion->positionhidden($bottom4bhd, $mobilebottom4b, $tabletbottom4b, $pcbottom4b);
$objetoDisFuncion->positionhidden($bottom4chd, $mobilebottom4c, $tabletbottom4c, $pcbottom4c);
$objetoDisFuncion->positionhidden($bottom4dhd, $mobilebottom4d, $tabletbottom4d, $pcbottom4d);
$objetoDisFuncion->positionhidden($footerahd, $mobilefootera, $tabletfootera, $pcfootera);
$objetoDisFuncion->positionhidden($footerbhd, $mobilefooterb, $tabletfooterb, $pcfooterb);
$objetoDisFuncion->positionhidden($footerchd, $mobilefooterc, $tabletfooterc, $pcfooterc);
$objetoDisFuncion->positionhidden($footerdhd, $mobilefooterd, $tabletfooterd, $pcfooterd);
$objetoDisFuncion->positionhidden($dataahd, $mobiledataa, $tabletdataa, $pcdataa);
$objetoDisFuncion->positionhidden($databhd, $mobiledatab, $tabletdatab, $pcdatab);
$objetoDisFuncion->positionhidden($datachd, $mobiledatac, $tabletdatac, $pcdatac);
$objetoDisFuncion->positionhidden($datadhd, $mobiledatad, $tabletdatad, $pcdatad);
$objetoDisFuncion->positionhidden($$logohd, $mobilelogo, $tabletlogo, $pclogo);
$objetoDisFuncion->positionhidden($menuhd, $mobilemenu, $tabletmenu, $pcmenu);
$objetoDisFuncion->positionhidden($menuchd, $mobilemenuc, $tabletmenuc, $pcmenuc);
$objetoDisFuncion->positionhidden($menudhd, $mobileenud, $tabletmenud, $pcmenud);
$top1f = $this->params->get('DismoduleTop1');
$top1f = explode("-", $top1f);
$headerf = $this->params->get('DismoduleHeader');
$headerf = explode("-", $headerf);
$footerf = $this->params->get('DismoduleFooter');
$footerf = explode("-", $footerf);
$dataf = $this->params->get('DismoduleData');
$dataf = explode("-", $dataf);
$top2f = $this->params->get('DismoduleTop2');
$top2f = explode("-", $top2f);
$top3f = $this->params->get('DismoduleTop3');
$top3f = explode("-", $top3f);
$top4f = $this->params->get('DismoduleTop4');
$top4f = explode("-", $top4f);
$bottom1f = $this->params->get('DismoduleBottom1');
$bottom1f = explode("-", $bottom1f);
$bottom2f = $this->params->get('DismoduleBottom2');
$bottom2f = explode("-", $bottom2f);
$bottom3f = $this->params->get('DismoduleBottom3');
$bottom3f = explode("-", $bottom3f);
$bottom4f = $this->params->get('DismoduleBottom4');
$bottom4f = explode("-", $bottom4f);
$mainf = $this->params->get('DismoduleMain');
$mainf = explode("-", $mainf);
$manint = $this->params->get('DismoduleMainTop');
$manint = explode("-", $manint);
$maninb = $this->params->get('DismoduleMainBot');
$maninb = explode("-", $maninb);
$logomenu = $this->params->get('DismoduleLogoMenu');
$logomenu = explode("-", $logomenu);
$top1ft = $this->params->get('DismoduleTabletTop1');
$top1ft = explode("-", $top1ft);
$headerft = $this->params->get('DismoduleTabletHeader');
$headerft = explode("-", $headerft);
$footerft = $this->params->get('DismoduleTabletFooter');
$footerft = explode("-", $footerft);
$dataft = $this->params->get('DismoduleData');
$dataft = explode("-", $dataft);
$top2ft = $this->params->get('DismoduleTabletTop2');
$top2ft = explode("-", $top2ft);
$top3ft = $this->params->get('DismoduleTabletTop3');
$top3ft = explode("-", $top3ft);
$top4ft = $this->params->get('DismoduleTabletTop4');
$top4ft = explode("-", $top4ft);
$bottom1ft = $this->params->get('DismoduleTabletBottom1');
$bottom1ft = explode("-", $bottom1ft);
$bottom2ft = $this->params->get('DismoduleTabletBottom2');
$bottom2ft = explode("-", $bottom2ft);
$bottom3ft = $this->params->get('DismoduleTabletBottom3');
$bottom3ft = explode("-", $bottom3ft);
$bottom4ft = $this->params->get('DismoduleTabletBottom4');
$bottom4ft = explode("-", $bottom4ft);
$mainft = $this->params->get('DismoduleTabletMain');
$mainft = explode("-", $mainft);
$manint = $this->params->get('DismoduleTabletMainTop');
$manint = explode("-", $manint);
$maninbt = $this->params->get('DismoduleTabletMainBot');
$maninbt = explode("-", $maninbt);
$logomenuft = $this->params->get('DismoduleTabletLogoMenu');
$logomenuft = explode("-", $logomenuft);
$top1fm = $this->params->get('DismoduleMobileTop1');
$top1fm = explode("-", $top1fm);
$headerfm = $this->params->get('DismoduleMobileHeader');
$headerfm = explode("-", $headerfm);
$footerfm = $this->params->get('DismoduleMobileFooter');
$footerfm = explode("-", $footerfm);
$datafm = $this->params->get('DismoduleData');
$datafm = explode("-", $datafm);
$top2fm = $this->params->get('DismoduleMobileTop2');
$top2fm = explode("-", $top2fm);
$top3fm = $this->params->get('DismoduleMobileTop3');
$top3fm = explode("-", $top3fm);
$top4fm = $this->params->get('DismoduleMobileTop4');
$top4fm = explode("-", $top4fm);
$bottom1fm = $this->params->get('DismoduleMobileBottom1');
$bottom1fm = explode("-", $bottom1fm);
$bottom2fm = $this->params->get('DismoduleMobileBottom2');
$bottom2fm = explode("-", $bottom2fm);
$bottom3fm = $this->params->get('DismoduleMobileBottom3');
$bottom3fm = explode("-", $bottom3fm);
$bottom4fm = $this->params->get('DismoduleMobileBottom4');
$bottom4fm = explode("-", $bottom4fm);
$mainfm = $this->params->get('DismoduleMobileMain');
$mainfm = explode("-", $mainfm);
$manint = $this->params->get('DismoduleMobileMainTop');
$manint = explode("-", $manint);
$maninbt = $this->params->get('DismoduleMobileMainBot');
$maninbt = explode("-", $maninbt);
$logomenufm = $this->params->get('DismoduleMobileLogoMenu');
$logomenufm = explode("-", $logomenufm);
$top1acount = $this->countModules('top1-A');
$top1bcount = $this->countModules('top1-B');
$top1ccount = $this->countModules('top1-C');
$top1dcount = $this->countModules('top1-C');
$headeracount = $this->countModules('Header-A');
$headerbcount = $this->countModules('Header-B');
$headerccount = $this->countModules('Header-C');
$headerdcount = $this->countModules('Header-D');
$top2acount = $this->countModules('top2-A');
$top2bcount = $this->countModules('top2-B');
$top2ccount = $this->countModules('top2-C');
$top2dcount = $this->countModules('top2-D');
$top3acount = $this->countModules('top3-A');
$top3bcount = $this->countModules('top3-B');
$top3ccount = $this->countModules('top3-C');
$top3dcount = $this->countModules('top3-D');
$top4acount = $this->countModules('top4-A');
$top4bcount = $this->countModules('top4-B');
$top4ccount = $this->countModules('top4-C');
$top4dcount = $this->countModules('top4-D');
$leftacount = $this->countModules('left-A');
$leftbcount = $this->countModules('left-B');
$maintopacount = $this->countModules('main-top-A');
$maintopbcount = $this->countModules('main-top-B');
$mainbottomacount = $this->countModules('main-bottom-A');
$mainbottombcount = $this->countModules('main-bottom-B');
$rightacount = $this->countModules('right-A');
$rightbcount = $this->countModules('right-B');
$bottom1acount = $this->countModules('bottom1-A');
$bottom1bcount = $this->countModules('bottom1-B');
$bottom1ccount = $this->countModules('bottom1-C');
$bottom1dcount = $this->countModules('bottom1-D');
$bottom2acount = $this->countModules('bottom2-A');
$bottom2bcount = $this->countModules('bottom2-B');
$bottom2ccount = $this->countModules('bottom2-C');
$bottom2dcount = $this->countModules('bottom2-D');
$bottom3acount = $this->countModules('bottom3-A');
$bottom3bcount = $this->countModules('bottom3-B');
$bottom3ccount = $this->countModules('bottom3-C');
$bottom3dcount = $this->countModules('bottom3-D');
$bottom4acount = $this->countModules('bottom4-A');
$bottom4bcount = $this->countModules('bottom4-B');
$bottom4ccount = $this->countModules('bottom4-C');
$bottom4dcount = $this->countModules('bottom4-D');
$footeracount = $this->countModules('footer-A');
$footerbcount = $this->countModules('footer-B');
$footerccount = $this->countModules('footer-C');
$footerdcount = $this->countModules('footer-D');
$dataacount = $this->countModules('data-A');
$databcount = $this->countModules('data-B');
$dataccount = $this->countModules('data-C');
$datadcount = $this->countModules('data-D');
$copyrightcount = $this->countModules('copyright');
if (($this->params->get('cdtelephone')) || ($this->params->get('cdemail')) ||($this->params->get('cdaddress'))) {
	$dataacount = 1;
}
if (($this->params->get('cdcontacttextprev')) || ($this->params->get('cdcontacttextnext')) ||($this->params->get('cdcontacttext')) || ($this->params->get('cdurlcontact')) || ($this->params->get('cdtitledatab'))) {
	$databcount = 1;
}
if (($this->params->get('cdtitledatac')) || ($this->params->get('redsoacial1textprev')) || ($this->params->get('redsoacial1textnext')) ||($this->params->get('redsoacial1text')) || ($this->params->get('redsoacial1url')) || ($this->params->get('redsoacial2textprev')) ||($this->params->get('redsoacial2textnext')) || ($this->params->get('redsoacial2text')) || ($this->params->get('redsoacial2url')) ||($this->params->get('redsoacial3textprev')) || ($this->params->get('redsoacial3textnext')) || ($this->params->get('redsoacial3text')) ||($this->params->get('redsoacial3url'))) {
	$dataccount = 1;
}
$datadcount = $this->countModules('Data-D');
if (($this->params->get('pcSowLogo')) || ($this->params->get('tabletSowLogo')) ||($this->params->get('mobileSowLogo'))) {
	$logocount = 1;
}
if (($this->params->get('pcSowMenu')) || ($this->params->get('tabletSowMenu')) ||($this->params->get('mobileSowMenu'))) {
	$menucount = 1;
}
if (($this->params->get('pcMenuc')) || ($this->params->get('tabletMenuc')) ||($this->params->get('mobileMenuc'))) {
	$menuccount = 1;
}
if (($this->params->get('pcMenud')) || ($this->params->get('tabletMenud')) ||($this->params->get('mobileMenud'))) {
	$menudcount = 1;
}

if (($this->params->get('copyrighttextprev')) || ($this->params->get('copyrighttextnext')) || ($this->params->get('copyrighttext')) || ($this->params->get('copyrighturl'))) {
	$copyrightcount = 1;
}
$objetoDisFuncion->mediumpositionstablet($leftasm, $leftbsm, $rightasm, $rightbsm, $mainsm, $leftacount, $leftbcount,$rightacount, $rightbcount, $pclefta, $pcleftb, $pcrighta, $pcrightb, $pcmain);
$objetoDisFuncion->mediumpositionsmobile($leftaxs, $leftbxs, $rightaxs, $rightbxs, $mainxs, $leftacount, $leftbcount,$rightacount, $rightbcount, $pclefta, $pcleftb, $pcrighta, $pcrightb, $pcmain);
$objetoDisFuncion->mediumpositionsbig($mainf, $leftamd, $leftbmd, $rightamd, $rightbmd, $mainmd, $leftacount, $leftbcount,$rightacount, $rightbcount, $pclefta, $pcleftb, $pcrighta, $pcrightb, $pcmain);
$top1amd = $top1bmd = $top1cmd = $top1dmd = $headeramd = $headerbmd = $headercmd = $headerdmd = $top2amd = $top2bmd = $top2cmd = $top2dmd = $top3amd = $top3bmd = $top3cmd = $top3dmd = $top4amd = $top4bmd = $top4cmd = $top4dmd = $bottom1amd = $bottom1bmd = $bottom1cmd = $bottom1dmd = $bottom2amd = $bottom2bmd = $bottom2cmd = $bottom2dmd = $bottom3amd = $bottom3bmd = $bottom3cmd = $bottom3dmd = $bottom4amd = $bottom4bmd = $bottom4cmd = $bottom4dmd = $footeramd = $footerbmd = $footercmd = $footerdmd = $dataamd = $databmd = $datacmd = $datadmd = $maintopamd = $maintopbmd = $mainbottomamd = $mainbottombmd = $top1axs = $top1bxs = $top1cxs = $top1dxs = $headeraxs = $headerbxs = $headercxs = $headerdxs = $top2axs = $top2bxs = $top2cxs = $top2dxs = $top3axs = $top3bxs = $top3cxs = $top3dxs = $top4axs = $top4bxs = $top4cxs = $top4dxs = $bottom1axs = $bottom1bxs = $bottom1cxs = $bottom1dxs = $bottom2axs = $bottom2bxs = $bottom2cxs = $bottom2dxs = $bottom3axs = $bottom3bxs = $bottom3cxs = $bottom3dxs = $bottom4axs = $bottom4bxs = $bottom4cxs = $bottom4dxs = $footeraxs = $footerbxs = $footercxs = $footerdxs = $dataaxs = $databxs = $datacxs = $datadxs = $maintopaxs = $maintopbxs = $mainbottomaxs = $mainbottombxs = $top1asm = $top1bsm = $top1csm = $top1dsm = $headerasm = $headerbsm = $headercsm = $headerdsm = $top2asm = $top2bsm = $top2csm = $top2dsm = $top3asm = $top3bsm = $top3csm = $top3dsm = $top4asm = $top4bsm = $top4csm = $top4dsm = $bottom1asm = $bottom1bsm = $bottom1csm = $bottom1dsm = $bottom2asm = $bottom2bsm = $bottom2csm = $bottom2dsm = $bottom3asm = $bottom3bsm = $bottom3csm = $bottom3dsm = $bottom4asm = $bottom4bsm = $bottom4csm = $bottom4dsm = $footerasm = $footerbsm = $footercsm = $footerdsm = $dataasm = $databsm = $datacsm = $datadsm = $maintopasm = $maintopbsm = $mainbottomasm = $mainbottombsm = $logomd = $menumd = $logosm = $menusm =  $logoxs = $menuxs = '';
if($top1acount > 0 || $top1bcount > 0 || $top1ccount > 0 || $top1dcount > 0){
	$objetoDisFuncion->fourpositionsbig($top1f, $top1amd, $top1bmd, $top1cmd, $top1dmd, $top1acount, $top1bcount, $top1ccount, $top1dcount, $pctop1a, $pctop1b, $pctop1c, $pctop1d);
	$objetoDisFuncion->fourpositionsmobile($top1fm, $top1axs, $top1bxs, $top1cxs, $top1dxs, $top1acount, $top1bcount, $top1ccount, $top1dcount, $tablettop1a, $tablettop1b, $tablettop1c, $tablettop1d);
	$objetoDisFuncion->fourpositionstablet($top1ft, $top1asm, $top1bsm, $top1csm, $top1dsm, $top1acount, $top1bcount, $top1ccount, $top1dcount, $tablettop1a, $tablettop1b, $tablettop1c, $tablettop1d);
}
if($headeracount > 0 || $headerbcount > 0 || $headerccount > 0 || $headerdcount > 0){
	$objetoDisFuncion->fourpositionsbig($headerf, $headeramd, $headerbmd, $headercmd, $headerdmd, $headeracount, $headerbcount, $headerccount, $headerdcount, $pcheadera, $pcheaderb, $pcheaderc, $pcheaderd);
	$objetoDisFuncion->fourpositionsmobile($headerfm, $headeraxs, $headerbxs, $headercxs, $headerdxs, $headeracount, $headerbcount, $headerccount, $headerdcount, $tabletheadera, $tabletheaderb, $tabletheaderc, $tabletheaderd);
	$objetoDisFuncion->fourpositionstablet($headerft, $headerasm, $headerbsm, $headercsm, $headerdsm, $headeracount, $headerbcount, $headerccount, $headerdcount, $tabletheadera, $tabletheaderb, $tabletheaderc, $tabletheaderd);
}
if($top2acount > 0 || $top2bcount > 0 || $top2ccount > 0 || $top2dcount > 0){
	$objetoDisFuncion->fourpositionsbig($top2f, $top2amd, $top2bmd, $top2cmd, $top2dmd, $top2acount, $top2bcount, $top2ccount, $top2dcount, $pctop2a, $pctop2b, $pctop2c, $pctop2d);
	$objetoDisFuncion->fourpositionsmobile($top2fm, $top2axs, $top2bxs, $top2cxs, $top2dxs, $top2acount, $top2bcount, $top2ccount, $top2dcount, $tablettop2a, $tablettop2b, $tablettop2c, $tablettop2d);
	$objetoDisFuncion->fourpositionstablet($top2ft, $top2asm, $top2bsm, $top2csm, $top2dsm, $top2acount, $top2bcount, $top2ccount, $top2dcount, $tablettop2a, $tablettop2b, $tablettop2c, $tablettop2d);
}
if($top3acount > 0 || $top3bcount > 0 || $top3ccount > 0 || $top3dcount > 0){
	$objetoDisFuncion->fourpositionsbig($top3f, $top3amd, $top3bmd, $top3cmd, $top3dmd, $top3acount, $top3bcount, $top3ccount, $top3dcount, $pctop3a, $pctop3b, $pctop3c, $pctop3d);
	$objetoDisFuncion->fourpositionsmobile($top3fm, $top3axs, $top3bxs, $top3cxs, $top3dxs, $top3acount, $top3bcount, $top3ccount, $top3dcount, $tablettop3a, $tablettop3b, $tablettop3c, $tablettop3d);
	$objetoDisFuncion->fourpositionstablet($top3ft, $top3asm, $top3bsm, $top3csm, $top3dsm, $top3acount, $top3bcount, $top3ccount, $top3dcount, $tablettop3a, $tablettop3b, $tablettop3c, $tablettop3d);
}
if($top4acount > 0 || $top4bcount > 0 || $top4ccount > 0 || $top4dcount > 0){
	$objetoDisFuncion->fourpositionsbig($top4f, $top4amd, $top4bmd, $top4cmd, $top4dmd, $top4acount, $top4bcount, $top4ccount, $top4dcount, $pctop4a, $pctop4b, $pctop4c, $pctop4d);
	$objetoDisFuncion->fourpositionsmobile($top4fm, $top4axs, $top4bxs, $top4cxs, $top4dxs, $top4acount, $top4bcount, $top4ccount, $top4dcount, $tablettop4a, $tablettop4b, $tablettop4c, $tablettop4d);
	$objetoDisFuncion->fourpositionstablet($top4ft, $top4asm, $top4bsm, $top4csm, $top4dsm, $top4acount, $top4bcount, $top4ccount, $top4dcount, $tablettop4a, $tablettop4b, $tablettop4c, $tablettop4d);
}
if($bottom1acount > 0 || $bottom1bcount > 0 || $bottom1ccount > 0 || $bottom1dcount > 0){
	$objetoDisFuncion->fourpositionsbig($bottom1f, $bottom1amd, $bottom1bmd, $bottom1cmd, $bottom1dmd, $bottom1acount, $bottom1bcount, $bottom1ccount, $bottom1dcount, $pcbottom1a, $pcbottom1b, $pcbottom1c, $pcbottom1d);
	$objetoDisFuncion->fourpositionsmobile($bottom1fm, $bottom1axs, $bottom1bxs, $bottom1cxs, $bottom1dxs, $bottom1acount, $bottom1bcount, $bottom1ccount, $bottom1dcount, $tabletbottom1a, $tabletbottom1b, $tabletbottom1c, $tabletbottom1d);
	$objetoDisFuncion->fourpositionstablet($bottom1ft, $bottom1asm, $bottom1bsm, $bottom1csm, $bottom1dsm, $bottom1acount, $bottom1bcount, $bottom1ccount, $bottom1dcount, $tabletbottom1a, $tabletbottom1b, $tabletbottom1c, $tabletbottom1d);
}
if($bottom2acount > 0 || $bottom2bcount > 0 || $bottom2ccount > 0 || $bottom2dcount > 0){
	$objetoDisFuncion->fourpositionsbig($bottom2f, $bottom2amd, $bottom2bmd, $bottom2cmd, $bottom2dmd, $bottom2acount, $bottom2bcount, $bottom2ccount, $bottom2dcount, $pcbottom2a, $pcbottom2b, $pcbottom2c, $pcbottom2d);
	$objetoDisFuncion->fourpositionsmobile($bottom2fm, $bottom2axs, $bottom2bxs, $bottom2cxs, $bottom2dxs, $bottom2acount, $bottom2bcount, $bottom2ccount, $bottom2dcount, $tabletbottom2a, $tabletbottom2b, $tabletbottom2c, $tabletbottom2d);
	$objetoDisFuncion->fourpositionstablet($bottom2ft, $bottom2asm, $bottom2bsm, $bottom2csm, $bottom2dsm, $bottom2acount, $bottom2bcount, $bottom2ccount, $bottom2dcount, $tabletbottom2a, $tabletbottom2b, $tabletbottom2c, $tabletbottom2d);
}
if($bottom3acount > 0 || $bottom3bcount > 0 || $bottom3ccount > 0 || $bottom3dcount > 0){
	$objetoDisFuncion->fourpositionsbig($bottom3f, $bottom3amd, $bottom3bmd, $bottom3cmd, $bottom3dmd, $bottom3acount, $bottom3bcount, $bottom3ccount, $bottom3dcount, $pcbottom3a, $pcbottom3b, $pcbottom3c, $pcbottom3d);
	$objetoDisFuncion->fourpositionsmobile($bottom3fm, $bottom3axs, $bottom3bxs, $bottom3cxs, $bottom3dxs, $bottom3acount, $bottom3bcount, $bottom3ccount, $bottom3dcount, $tabletbottom3a, $tabletbottom3b, $tabletbottom3c, $tabletbottom3d);
	$objetoDisFuncion->fourpositionstablet($bottom3ft, $bottom3asm, $bottom3bsm, $bottom3csm, $bottom3dsm, $bottom3acount, $bottom3bcount, $bottom3ccount, $bottom3dcount, $tabletbottom3a, $tabletbottom3b, $tabletbottom3c, $tabletbottom3d);
}
if($bottom4acount > 0 || $bottom4bcount > 0 || $bottom4ccount > 0 || $bottom4dcount > 0){
	$objetoDisFuncion->fourpositionsbig($bottom4f, $bottom4amd, $bottom4bmd, $bottom4cmd, $bottom4dmd, $bottom4acount, $bottom4bcount, $bottom4ccount, $bottom4dcount, $pcbottom4a, $pcbottom4b, $pcbottom4c, $pcbottom4d);
	$objetoDisFuncion->fourpositionsmobile($bottom4fm, $bottom4axs, $bottom4bxs, $bottom4cxs, $bottom4dxs, $bottom4acount, $bottom4bcount, $bottom4ccount, $bottom4dcount, $tabletbottom4a, $tabletbottom4b, $tabletbottom4c, $tabletbottom4d);
	$objetoDisFuncion->fourpositionstablet($bottom4ft, $bottom4asm, $bottom4bsm, $bottom4csm, $bottom4dsm, $bottom4acount, $bottom4bcount, $bottom4ccount, $bottom4dcount, $tabletbottom4a, $tabletbottom4b, $tabletbottom4c, $tabletbottom4d);
}
if($footeracount > 0 || $footerbcount > 0 || $footerccount > 0 || $footerdcount > 0){
	$objetoDisFuncion->fourpositionsbig($footerf, $footeramd, $footerbmd, $footercmd, $footerdmd, $footeracount, $footerbcount, $footerccount, $footerdcount, $pcfootera, $pcfooterb, $pcfooterc, $pcfooterd);
	$objetoDisFuncion->fourpositionsmobile($footerfm, $footeraxs, $footerbxs, $footercxs, $footerdxs, $footeracount, $footerbcount, $footerccount, $footerdcount, $tabletfootera, $tabletfooterb, $tabletfooterc, $tabletfooterd);
	$objetoDisFuncion->fourpositionstablet($footerft, $footerasm, $footerbsm, $footercsm, $footerdsm, $footeracount, $footerbcount, $footerccount, $footerdcount, $tabletfootera, $tabletfooterb, $tabletfooterc, $tabletfooterd);
}

if($dataacount > 0 || $databcount > 0 || $dataccount > 0 || $datadcount > 0){
	$objetoDisFuncion->fourpositionsbig($dataf, $dataamd, $databmd, $datacmd, $datadmd, $dataacount, $databcount, $dataccount, $datadcount, $pcdataa, $pcdatab, $pcdatac, $pcdatad);
	$objetoDisFuncion->fourpositionsmobile($datafm, $dataaxs, $databxs, $datacxs, $datadxs, $dataacount, $databcount, $dataccount, $datadcount, $tabletdataa, $tabletdatab, $tabletdatac, $tabletdatad);
	$objetoDisFuncion->fourpositionstablet($dataft, $dataasm, $databsm, $datacsm, $datadsm, $dataacount, $databcount, $dataccount, $datadcount, $tabletdataa, $tabletdatab, $tabletdatac, $tabletdatad);
}

if($maintopacount > 0 || $maintopbcount > 0){
	$objetoDisFuncion->mainpositionsbig($manint, $maintopamd, $maintopbmd, $maintopacount, $maintopbcount, $pcmainta, $pcmaintb);
	$objetoDisFuncion->mainpositionsmobile($maintopasm, $maintopbsm, $maintopacount, $maintopbcount, $mobilemainta, $mobilemaintb);
	$objetoDisFuncion->mainpositionstablet($manintt, $maintopaxs, $maintopbxs, $maintopacount, $maintopbcount, $tabletmainta, $tabletmaintb);
}
if($mainbottomacount > 0 || $mainbottombcount > 0){
	$objetoDisFuncion->mainpositionsbig($maninb, $mainbottomamd, $mainbottombmd, $mainbottomacount, $mainbottombcount, $pcmainba, $pcmainbb);
	$objetoDisFuncion->mainpositionsmobile($mainbottomasm, $mainbottombsm, $mainbottomacount, $mainbottombcount, $mobilemainba, $mobilemainbb);
$objetoDisFuncion->mainpositionstablet($maninbt, $mainbottomaxs, $mainbottombxs, $mainbottomacount, $mainbottombcount, $tabletmainba, $tabletmainbb);
}
if($logocount > 0 || $menucount > 0 || $menuccount > 0 || $menudcount > 0){
	$objetoDisFuncion->fourpositionsbig($logomenu, $logomd, $menumd, $menucmd, $menudmd, $logocount, $menucount, $menuccount, $menudcount, $pclogo, $pcmenu, $pcmenuc, $pcmenud);
	$objetoDisFuncion->fourpositionsmobile($logomenufm, $logoxs, $menuxs, $menucxs, $menudxs, $logocount, $menucount, $menuccount, $menudcount, $tabletlogo, $tabletmenu, $tabletmenuc, $tabletmenud);
	$objetoDisFuncion->fourpositionstablet($logomenuft, $logosm, $menusm, $menucsm, $menudsm, $logocount, $menucount, $menuccount, $menudcount, $tabletlogo, $tabletmenu, $tabletmenuc, $tabletmenud);
}
