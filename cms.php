<?php
variables([
	socialBuilder::variableName => socialBuilder::create()
		->addExternal('fab fa-whatsapp bg-success', 'https://chat.whatsapp.com/Ck2TCT33KBCCWOdll0K5Ny', 'AU WA Group')
		->addExternal('fab fa-whatsapp bg-warning', 'https://chat.whatsapp.com/KBYFvghUTx06hbGiqGeV62', 'AU WA Community')
		->addHR()
		->addYoutube('@aanmeegaullagam', '@aanmeegaullagam')
		->addYoutube('@elitebricks2025', '@elitebricks2025')
		->addHR()
		->addSpecial('aanmeegaullagam@gmail.com', 'aanmeegaullagam', VAREmail)
		->addSpecial('elitebricks2025@gmail.com', 'elitebricks2025', VAREmail)
		->addSpecial('jtheagoo@gmail.com', 'jtheagoo', VAREmail)
		->addHR()
		->addShare()
		->addDawn(true, false)
		->addThisSitesGithub()
		->getItems()
]);
