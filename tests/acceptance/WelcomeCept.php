<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('login');
$I->amOnPage('/index.php');
$I->fillField('username', 'admin');
$I->fillField('password', 'admin');
$I->click('Sisene');
$I->see('Sisseloggimine õnnestus, Tere tulemast!');
$I->seeInCurrentUrl('/welcome.php');
?>


<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('login');
$I->amOnPage('/index.php');
$I->fillField('username', 'admin');
$I->fillField('password', 'valeparool');
$I->click('Sisene');
$I->see('Vale kasutajatunnus või parool!');
$I->seeInCurrentUrl('/index.php');
?>


<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('login');
$I->amOnPage('/welcome.php');
$I->click('Loggi välja');
$I->see('Olete välja logginud');
$I->seeInCurrentUrl('/logout.php');
?>